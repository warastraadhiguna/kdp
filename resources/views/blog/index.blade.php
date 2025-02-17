
@extends('layouts.index')
@section('content')
 <!-- Start Common BreadCrumb -->
  <section>
    <div class="cs-breadcrumb-wrap theme-dark" data-src="{{ asset('storage/' . $company->breadcrumb_image) }}">
      <div class="container">
        <div class="row cs_center">
          <div class="cs-bread-page-title-area">
            <div class="cs-page-title">
              <h2 class="cs_white_color">All Detail</h2>
            </div>
            <div class="breadcrumb">
              <ul>
                <li>
                  <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
                </li>
                <li>/</li>
                <li>ALL BLOG</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Common BreadCrumb -->

    <div class="cs-section-height"></div>
    <!-- Section to Section Gap -->

<!-- Start Blog Content -->
  <section>
    <div class="container blog-container lg-gutter-control">
      <div class="blog-container">
        <div class="blog-grid">
          <div class="grid-sizer"></div>
          {{-- <div class="blog-item masonry-item blog-quote-item theme-dark">

            <a href="{{ url('blog/' . $blog->slug) }}">
              <blockquote class="themecolor-bg">
                “The Lorem Ipsum Future of Sustainable Construc Trends to Watch”
              </blockquote>
              <div class="cs-height-65"></div>
              <div class="author-data">
                <p>Devid Walker</p>
                <svg width="105" height="107" viewBox="0 0 105 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.2">
                    <path
                      d="M68.5212 53.8359H84.543V66.7754C84.543 73.9124 78.7952 79.7149 71.7256 79.7149H70.1235C67.46 79.7149 65.3169 81.8781 65.3169 84.5672V94.2718C65.3169 96.9608 67.4598 99.1242 70.1235 99.1242H71.7256C89.4296 99.1242 103.769 84.6482 103.769 66.7756V18.2524C103.769 12.8947 99.4632 8.54785 94.156 8.54785H68.5212C63.214 8.54785 58.9082 12.8947 58.9082 18.2524V44.1314C58.9082 49.4891 63.214 53.8359 68.5212 53.8359Z"
                      fill="white" />
                    <path
                      d="M10.8435 53.8359H26.8652V66.7754C26.8652 73.9124 21.1175 79.7149 14.0479 79.7149H12.4458C9.78223 79.7149 7.63916 81.8781 7.63916 84.5672V94.2718C7.63916 96.9608 9.78202 99.1242 12.4458 99.1242H14.0479C31.7518 99.1242 46.0913 84.6482 46.0913 66.7756V18.2524C46.0913 12.8947 41.7855 8.54785 36.4783 8.54785H10.8435C5.53629 8.54785 1.23047 12.8947 1.23047 18.2524V44.1314C1.23047 49.4891 5.53629 53.8359 10.8435 53.8359Z"
                      fill="white" />
                  </g>
                </svg>

              </div>
            </a>

          </div> --}}

          @foreach($blogs as $blog)
                      <div class="blog-item masonry-item">
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
                <a href="#"><span>Project Management</span></a>
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
              <a href="{{ url('blog/' . $blog->slug) }}" class="cs-text_b_line"><span>Read More</span>
                <i class="flaticon-right-arrow"></i>
              </a>
            </div>
          </div>
          @endforeach



          {{-- <div class="blog-item masonry-item blog-quote-item theme-dark">

            <a href="{{ url('blog/' . $blog->slug) }}">
              <blockquote class="theme-black-bg">
                “Construc Trends to Watch The Lorem Ipsum Future of Sustainable”
              </blockquote>
              <div class="author-data theme-black-bg">
                <p>Walker Devid</p>
                <svg width="105" height="107" viewBox="0 0 105 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.2">
                    <path
                      d="M68.5212 53.8359H84.543V66.7754C84.543 73.9124 78.7952 79.7149 71.7256 79.7149H70.1235C67.46 79.7149 65.3169 81.8781 65.3169 84.5672V94.2718C65.3169 96.9608 67.4598 99.1242 70.1235 99.1242H71.7256C89.4296 99.1242 103.769 84.6482 103.769 66.7756V18.2524C103.769 12.8947 99.4632 8.54785 94.156 8.54785H68.5212C63.214 8.54785 58.9082 12.8947 58.9082 18.2524V44.1314C58.9082 49.4891 63.214 53.8359 68.5212 53.8359Z"
                      fill="white" />
                    <path
                      d="M10.8435 53.8359H26.8652V66.7754C26.8652 73.9124 21.1175 79.7149 14.0479 79.7149H12.4458C9.78223 79.7149 7.63916 81.8781 7.63916 84.5672V94.2718C7.63916 96.9608 9.78202 99.1242 12.4458 99.1242H14.0479C31.7518 99.1242 46.0913 84.6482 46.0913 66.7756V18.2524C46.0913 12.8947 41.7855 8.54785 36.4783 8.54785H10.8435C5.53629 8.54785 1.23047 12.8947 1.23047 18.2524V44.1314C1.23047 49.4891 5.53629 53.8359 10.8435 53.8359Z"
                      fill="white" />
                  </g>
                </svg>

              </div>
            </a>

          </div> --}}

        </div>
      </div>
      {{-- <div class="cs-height-60"></div>
      <div class="blog-navigation">
        <div class="next"><i class="flaticon-left-arrow"></i>
        </div>
        <ul>
          <li class="themecolor active"><a href="#">01</a></li>
          <li><a href="#">02</a></li>
          <li><a href="#">03</a></li>
          <li><a href="#">04</a></li>
          <li><a href="#">05</a></li>
          <li><a href="#">06</a></li>
        </ul>
        <div class="prev"><i class="flaticon-right-chevron"></i>
        </div>
      </div> --}}
    </div>
  </section>
  <!-- End Blog Content -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->    
 
  @include('layouts.tagline');      
@endsection