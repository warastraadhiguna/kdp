  <section>
    <div class="container">

      <div class="cs-heading-with-animation text-center max-width-800 m-auto d-flex">
        <h2 class="cs-heading">{{ $company->news_text }}</h2>
        <span class="cs-text-style-h1 cs-animated-text">{{ $company->news_text }}</span>
      </div>
      <div class="cs-height-50"></div>

      <div class="row justify-content-center">
        @foreach($blogs as $blog)
                  <div class="col-xl-4 col-md-6">
          <div class="blog-item" data-aos="fade-up" data-aos-duration="300">
            <div class="blog-item-header">
              <div class="blog-item-img">
                <a href="{{ url('blog/' . $blog->slug) }}">
                  <img src="{{ asset('storage/' . pathinfo($blog->image , PATHINFO_DIRNAME) . '/'. pathinfo($blog->image , PATHINFO_FILENAME) . '_thumbnail.' . pathinfo($blog->image, PATHINFO_EXTENSION))}}" alt="" />
                </a>
              </div>
              <div class="date">
                <span>{{ $blog->created_at->format('d M') }}</span>
              </div>
            </div>
            <div class="blog-item-data">
              {{-- <div class="tag-item">
                <a href="blog-standard.html"><span>Construction</span></a>
              </div> --}}
              <div class="title">
                <a href="{{ url('blog/' . $blog->slug) }}">
                  <h6>
                    {{ $blog->title }}
                  </h6>
                </a>
              </div>
              <div class="border-1px"></div>
              <div class="cs-height-20"></div>
              <a href="{{ url('blog/' . $blog->slug) }}" class="cs-text_b_line"
                ><span>Read More</span>
                <i class="flaticon-right-arrow"></i>
              </a>
            </div>
          </div>
          <div class="cs-height-30"></div>
        </div>
        @endforeach        
      </div>
    </div>

  </section>