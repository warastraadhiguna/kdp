
@extends('layouts.index')
@section('content')
 <!-- Start Common BreadCrumb -->

  <section>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($aboutSliders as $key => $slider)
        <div class="carousel-item {{ $key == 0? 'active' : '' }}">
          <img src="{{ asset('storage/' . $slider->image) }}" class="d-block w-100" alt="Slide{{ $key }}">  
          <div class="container">
            <div class="carousel-caption text-center">
              <h2 class="cs_white_color">About Us</h2>        
              <a href="{{ url('/')}}" class="cs-text_b_line cs_white_color"><span>HOME &nbsp; </span></a>/ DETAIL ABOUT
            </div>
          </div>
        </div>                       
        @endforeach       
      </div>
    </div>
  </section>  
  <!-- End Common BreadCrumb -->

    <!-- Start Post Section -->
    <article class="blog-single">
      <div class="container">
        <div class="row">
          <div class="">
            <div class="border-left-right">
              <div class="image-slider">
                <div class="swiper common-slider">
                  <div
                    class="swiper-wrapper"
                    data-aos="fade-top"
                    data-aos-duration="400"
                  >
                    <div class="swiper-slide">
                      <img
                        src="{{ asset('storage/' . $about->image) }}"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>

              <div class="cs-height-60"></div>

              <div class="max-width-1120 m-auto">
                <h4>
                    {{ $about->title }}
                </h4>
                <div class="cs-height-30"></div>         
                <div class="cs-height-30"></div>
                 {!! $about->content !!}

                <div class="cs-height-40"></div>

              <div class="cs-container-border"></div>
            </div>
          </div>
        </div>
      </div>
    </article>
    <!-- Start Post Section -->
  <div class="cs-section-height"></div>
  @include('layouts.tagline');      
@endsection