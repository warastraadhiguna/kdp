<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Owner;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\BriefHistory;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'sliders' => Slider::orderBy('index')->get(),
            'clients' => Client::orderBy('index')->get(),
            'owners'  => Owner::orderBy('index')->get(),
            'projects' => Project::with('owner')->orderBy('index')->where('index', ">", "0")->limit(4)->get(),
            'blogs' => Blog::orderBy('index')->where('index', ">", "0")->limit(3)->get(),
            'projectTotal' => Project::count()
        ];
        return view('home.index', $data);
    }

    public function about()
    {

        $years = BriefHistory::orderBy('year')->pluck('year')->toArray();

        $data = [
            'briefHistories' => BriefHistory::orderBy('year')->get(),
            'years' =>  $years,
        ];
        return view('about.index', $data);
    }

    public function gallery()
    {
        $data = [
            'galleries' => Gallery::orderBy('title')->get(),
        ];
        return view('gallery.index', $data);
    }

    public function contact()
    {
        $data = [
            'galleries' => Gallery::orderBy('title')->get(),
            'status' => Request()->input("status")
        ];
        return view('contact.index', $data);
    }

    public function message(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
            'first_name' => ['required', 'string', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
            'last_name' => ['nullable', 'string', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
            'phone' => ['required', 'regex:/^\+?[0-9]{10,15}$/'], // Menerima angka dengan format internasional
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ],
            [
            'first_name.required' => 'Please enter your first name.',
            'first_name.string' => 'First name must be a valid text.',
            'first_name.max' => 'First name cannot exceed 100 characters.',
            'first_name.regex' => 'First name can only contain letters and spaces.',

            'last_name.string' => 'Last name must be a valid text.',
            'last_name.max' => 'Last name cannot exceed 100 characters.',
            'last_name.regex' => 'Last name can only contain letters and spaces.',

            'phone.required' => 'Please enter your phone number.',
            'phone.regex' => 'Phone number must be 10 to 15 digits long and can include a plus sign (+) for international format.',

            'email.required' => 'Your email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email cannot exceed 255 characters.',

            'subject.required' => 'Please enter a subject.',
            'subject.string' => 'Subject must be valid text.',
            'subject.max' => 'Subject cannot exceed 255 characters.',

            'message.required' => 'Message cannot be empty.',
            'message.string' => 'Message must be valid text.',
            'message.max' => 'Message cannot exceed 2000 characters.',
        ]
        );

        // Jika Validasi Gagal
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // **🛡 Mencegah XSS dengan htmlentities**
        $sanitizedData = [
            'first_name' => htmlentities($request->first_name),
            'last_name' => htmlentities($request->last_name),
            'phone' => htmlentities($request->phone),
            'email' => filter_var($request->email, FILTER_SANITIZE_EMAIL),
            'subject' => htmlentities($request->subject),
            'message' => htmlentities($request->message),
        ];


        Message::create($sanitizedData);

        return redirect("/contact?status=success");
    }

    public function blog()
    {
        $data = [
            'blogs' => Blog::orderBy('index')->where('index', ">", "0")->get(),
        ];

        return view('blog.index', $data);
    }
    public function detailBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->where('index', ">", "0")->firstOrFail();
        $data = [
            "blog" => $blog ,
            'blogs' => Blog::orderBy('index')->whereNot('id', $blog->id)->where('index', ">", "0")->limit(3)->get(),
        ];

        return view('blog.detail', $data);
    }

    public function project()
    {
        $data = [
            'clients' => Client::orderBy('index')->get(),
            'projects' => Project::with('owner')->orderBy('index')->where('index', ">", "0")->get(),
        ];

        return view('project.index', $data);
    }
}
