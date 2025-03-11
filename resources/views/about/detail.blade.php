
@extends('layouts.index')
@section('content')
 <!-- Start Common BreadCrumb -->
  <section>
    <div class="cs-breadcrumb-wrap theme-dark" data-src="{{ asset('storage/' . $company->breadcrumb_image) }}">
      <div class="container">
        <div class="row cs_center">
          <div class="cs-bread-page-title-area">
            <div class="cs-page-title">
              <h2 class="cs_white_color">Detail About</h2>
            </div>
            <div class="breadcrumb">
              <ul>
                <li>
                  <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
                </li>
                <li>/</li>
                <li>DETAIL ABOUT</li>
              </ul>
            </div>
          </div>
        </div>
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