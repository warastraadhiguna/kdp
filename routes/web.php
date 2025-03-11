<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class,'index']);

route::get('/about', [HomeController::class,'about']);

route::get('/about/{slug}', [HomeController::class,'detailAbout']);

route::get('/gallery/{slug}', [HomeController::class,'gallery']);

route::get('/contact', [HomeController::class,'contact']);
route::post('/contact', [HomeController::class,'message'])->name('contact.store');

route::get('/blog', [HomeController::class,'blog']);
route::get('/blog/{slug}', [HomeController::class,'detailBlog']);
route::get('/project/{slug}', [HomeController::class,'project']);

route::get('/team-member/{slug}', [HomeController::class,'teamMember']);
