
@extends('layouts.index')
@section('content')


  @include('home.slider');    

  @include('home.vision-mission');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  @include('layouts.tagline');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->
 <!-- Start Experience & Image Section -->
  @include('home.experience');
  <!-- Start Experience & Image Section -->
  <div class="cs-section-height"></div>

  @include('home.owner');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Projects Section -->
  @include('home.project');  
  
  <!-- End Projects Section -->

  <!-- Start Features Section -->
  <section class="themecolor-bg-primary">
    <div class="cs-section-height"></div>
    <div class="cs-feature-card-wrap lg-gutter-control">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div  data-aos="fade-up" data-aos-duration="300" class="feature-card-item cs_white_bg theme-border-wrap" data-src="{{ asset('assets/img/strength-pattern-1.jpg')}}">
              <div class="b-top-left">
                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-top-right d-flex">
                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-bottom-right d-flex flex-end">

                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-bottom-left">
                <div class="verticle"></div>
                <div class="horizontal"></div>
              </div>
              
              <div class="cs-feature-icon">
                <img src="{{ asset('assets/img/feature-icon-1.svg')}}" alt="">
              </div>
              <h5>Optimized Construction</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="cs-height-30"></div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div  data-aos="fade-up" data-aos-duration="400" class="feature-card-item cs_white_bg theme-border-wrap" data-src="{{ asset('assets/img/strength-pattern-2.jpg')}}">
              <div class="b-top-left">
                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-top-right d-flex">
                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-bottom-right d-flex flex-end">

                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-bottom-left">
                <div class="verticle"></div>
                <div class="horizontal"></div>
              </div>

              <div class="cs-feature-icon">
                <img src="{{ asset('assets/img/feature-icon-2.svg')}}" alt="">
              </div>
              <h5>Building Economic Growth</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="cs-height-30"></div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div  data-aos="fade-up" data-aos-duration="500" class="feature-card-item cs_white_bg theme-border-wrap" data-src="{{ asset('assets/img/strength-pattern-3.jpg')}}">
              <div class="b-top-left">
                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-top-right d-flex">
                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-bottom-right d-flex flex-end">

                <div class="horizontal"></div>
                <div class="verticle"></div>
              </div>

              <div class="b-bottom-left">
                <div class="verticle"></div>
                <div class="horizontal"></div>
              </div>

              <div class="cs-feature-icon">
                <img src="{{ asset('assets/img/feature-icon-3.svg')}}" alt="">
              </div>
              <h5>Full-Service Contracting</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="cs-height-30"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="cs-section-height"></div>
    <!-- Section to Section Gap -->
    @include('home.client');

    <div class="cs-section-height"></div>
    <!-- Section to Section Gap -->
  </section>
  <!-- Start Features Section -->

  <!-- Start Counter With CTA Section -->
  <section>
    <div class="cs-counter-wrap">
      <div class="theme-black-bg theme-dark">
        <div class="cs-height-100"></div>
        <div class="container">
          <div class="cs-couter-items">
            <div class="counter-item" data-aos="fade-top" data-aos-duration="400">
              <h6>Happy Customers</h6>
              <span id="count1" class="amin_auto_count cs-text-style-h2">126</span><span class="cs-text-style-h2">+</span>
              <p>We believe construction is more than building structures.</p>
            </div>
            <div class="counter-sep"></div>
            <div class="counter-item" data-aos="fade-top" data-aos-duration="600">
              <h6>On-Going Projects</h6>
              <span id="count2" class="amin_auto_count cs-text-style-h2">32</span><span class="cs-text-style-h2">+</span>
              <p>We believe construction is more than building structures.</p>
            </div>
            <div class="counter-sep"></div>
            <div class="counter-item" data-aos="fade-top" data-aos-duration="800">
              <h6>Happy Customers</h6>
              <span id="count3" class="amin_auto_count cs-text-style-h2">50</span><span class="cs-text-style-h2">k</span>
              <p>We believe construction is more than building structures.</p>
            </div>
            <div class="counter-sep"></div>
            <div class="counter-item" data-aos="fade-top" data-aos-duration="1000">
              <h6>Awards Achievement</h6>
              <span id="count4" class="amin_auto_count cs-text-style-h2">50+</span><span class="cs-text-style-h2">+</span>
              <p>We believe construction is more than building structures.</p>
            </div>
          </div>
        </div>
        <div class="cs-height-100"></div>
      </div>
    </div>
  </section>
  <!-- End Counter With CTA Section -->

  {{-- <div class="cs-section-height"></div> --}}
  <!-- Section to Section Gap -->

  <!-- Start Team Section -->
  {{-- @include('home.member'); --}}
  <!-- End Team Section -->

  {{-- <div class="cs-section-height"></div> --}}
  <!-- Section to Section Gap -->

  <!-- Start Testimonial -->
  {{-- @include('home.testimoni'); --}}
  <!-- End Testimonial -->

  {{-- <div class="cs-section-height"></div> --}}
  <!-- Section to Section Gap -->

  <!-- Start Why Choose Us & Video -->
  {{-- @include('home.video'); --}}
  <!-- End Why Choose Us & Video -->

  {{-- <div class="cs-section-height"></div> --}}
  <!-- Section to Section Gap -->
{{-- @include('home.pricing'); --}}
  <!-- Start Pricing -->

<!-- End Pricing -->

  {{-- <div class="cs-section-height"></div> --}}
  <!-- Section to Section Gap -->

 
   
  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Blog Section -->
  @include('home.blog');
  <!-- Start Blog Section -->

  <!-- Section to Section Gap -->
  <!-- Start Contact Form -->
  @include('contact.message');    
  <!-- End Contact Form -->
  @endsection