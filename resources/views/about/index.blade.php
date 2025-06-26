
@extends('layouts.index')
@section('content')
  <section>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($aboutSliders as $key => $slider)
        <div class="carousel-item {{ $key == 0? 'active' : '' }}">
          <img src="{{ asset('storage/' . $slider->image) }}" class="d-block w-100" alt="Slide{{ $key }}">  
          <div class="container">
            <div class="carousel-caption text-center">
              <h2 class="cs_white_color">About Us</h2>        
              <a href="{{ url('/')}}" class="cs-text_b_line cs_white_color"><span>HOME &nbsp; </span></a>/ ABOUT US
            </div>
          </div>
        </div>                       
        @endforeach       
      </div>
    </div>
  </section>

  <section class="container py-5">
    <div class="row">
      <div class="col-md-6">
        <p style="text-align: justify;"  data-aos="fade-up" data-aos-duration="700"  style="white-space: pre-line;text-align:justify; margin-right: 10px;">
          {{ $company->about_us }}
        </p> 
      </div>

      <div class="col-md-6">
        <img src="{{ asset('storage/' . $company->about_us_image) }}" alt="About Us Image" class="img-fluid rounded">
      </div>
    </div>
  </section>
  
  <section class="container">
    <div class="row">
      <div class="col text-center my-5">        
        <h2>Company History</h2>
      </div>
    </div>    
    <div class="row">
      <div class="col my-5">
      <div class="timeline-pagination" style="margin-left: -40px"></div>
        <div class="timeline-progress" style="margin-left: -1px">
          <div class="timeline-progress-bar"></div>
        </div>
        <div class="cs-height-40"></div>
        <div class="swiper timeline-slider">
          <div class="swiper-wrapper">
            @foreach($briefHistories as $briefHistory)
              <div class="swiper-slide">
                <div class="d-flex align-items-center">
                  <!-- Gambar di kiri -->
                  <div class="swiper-slide-image col-md-6">
                    <img src="{{ asset('storage/' . $briefHistory->image) }}" alt=" {{ $briefHistory->year }}" class="img-fluid rounded">
                  </div>
  
                  <!-- Teks di kanan -->
                  <div class="swiper-slide-text col-md-6">
                    <div class="cs-height-50"></div>
                    <div class="cs-heading-with-animation text-left m-auto d-flex">
                      <h2 class="cs-heading">{{ $briefHistory->year }}</h2>
                      <span class="cs-text-style-h1 cs-animated-text">INITIAL START {{ $briefHistory->year }}</span>
                    </div>
                    <p style="white-space: pre-line; text-align:justify">{{ $briefHistory->note }}</p>
                  </div>
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