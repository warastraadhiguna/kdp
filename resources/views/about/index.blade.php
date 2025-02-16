
@extends('layouts.index')
@section('content')
 <!-- Start Common BreadCrumb -->
  <section>
    <div class="cs-breadcrumb-wrap theme-dark" data-src="{{ asset('storage/' . $company->breadcrumb_image) }}">
      <div class="container">
        <div class="row cs_center">
          <div class="cs-bread-page-title-area">
            <div class="cs-page-title">
              <h2 class="cs_white_color">About Us</h2>
            </div>
            <div class="breadcrumb">
              <ul>
                <li>
                  <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
                </li>
                <li>/</li>
                <li>ABOUT US</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Common BreadCrumb -->


 <!-- Start Company Journey -->
  <section>
    <div class="cs-cj-wrap">
      <div class="cj-left">
        <div class="cs-section-height"></div>
        <div class="cj-left-content">
          <h2 data-aos="fade-up" data-aos-duration="500">About Us</h2>
          <div class="cs-height-25"></div>
          <div class="max-width-600">
            <p  data-aos="fade-up" data-aos-duration="700"  style="white-space: pre-line;text-align:justify; margin-right: 10px;">{{ $company->about_us }}</p>
            <div class="cs-height-30"></div>
          </div>
            <div class="cs-height-165"></div>
        </div>
        <img src="{{ asset('storage/' . $company->about_us_image) }}" alt="">
      </div>
      <div class="cj-right" >

              <div class="cs-height-70"></div>        
        <div class="cs-section-height"></div>
        <div class="cs-height-40"></div>

        <div class="timeline-pagination"  style="margin-left: -40px"></div>
        <div class="timeline-progress"  style="margin-left: -1px">
          <div class="timeline-progress-bar"></div>
        </div>

        <div class="swiper timeline-slider">
          <div class="swiper-wrapper">
            @foreach($briefHistories as $briefHistory)
                          <div class="swiper-slide">
              <div class="cs-height-50"></div>
              <img src="{{ asset('storage/' . $briefHistory->image) }}" alt=" {{ $briefHistory->year }}">
              <div class="cj-right-content">

                <div class="cs-height-40"></div>
                <div class="cs-heading-with-animation text-left m-auto d-flex">
                  <h2 class="cs-heading">{{ $briefHistory->year }}</h2>
                  <span class="cs-text-style-h1 cs-animated-text">INITIAL START {{ $briefHistory->year }}</span>
                </div>
                <p  style="white-space: pre-line;text-align:justify">{{ $briefHistory->note }}
                </p>
              </div>
            </div>
            @endforeach

          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Company Journey -->  
  @include('layouts.tagline');      
@endsection