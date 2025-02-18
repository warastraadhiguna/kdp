  <!-- Start Hero Section -->
  <section>
    <div class="cs-height-100"></div>
    <div class="cs-hero-wrap">
      <div class="cs-hero-wrap-in">
        <div class="swiper hero-slider">
          <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide">
              <div class="hero-slider-item" data-src="{{ asset('storage/'. $slider->image)}}">
                <div class="slider-item-content">
                 <div class="cs-hero-title">
                  <div class="cs-hero-title-in cs-head">
                    <h1><span class="hero-strong-title constr-splite">{{ $slider->title }}</span> <span class="cs-hero-title-normal hero-second-splite">{{ $company->name }}</span></h1>
                  </div>
                  {{-- <div class="ae-title hero-backdrop-text constr-splite">
                    <h2>{{ $slider->title }}</h2>
                  </div> --}}
                 </div>
                  <p class="hero-subtitle">{{ $slider->note }}</p>
                  <div class="cs-couple-btn d-flex gap-3">
                    <a href="{{ url('/about') }}" class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-60 cs-width-180"><span>About Us</span></a>
                    <a href="{{ url('/contact') }}" class="cs-primary-btn cs-color-white theme-black-bg cs-height-60 cs-width-180"><span>Contact Us</span></a>
                  </div>
                </div>
              </div>
            </div>              
            @endforeach
          </div>
        </div>
      </div>
      <div class="cs-hero-social">
          <ul>
            @if($company->youtube)
                                    <li>
                <a href="{{ $company->youtube }}" target="_blank">
                <i class="fa-brands fa-youtube"></i>
                </a>
            </li>
            @endif

            @if($company->linkedin)
            <li>
                <a href="{{ $company->linkedin }}" target="_blank">
                <i class="flaticon-linkedin-big-logo"></i>
                </a>
            </li>
            @endif
          </ul>       
      </div>
      <div class="cs-arrow-style-fill">
        <div class="cs-left-arrow hero-swiper-button-prev">
          <i class="flaticon-left-arrow"></i>
        </div>
        <div class="cs-right-arrow hero-swiper-button-next">
          <i class="flaticon-right-chevron"></i>
        </div>
      </div>
      <div class="cs-slider-pagi">

      </div>
    </div>
  </section>
  <!-- End Hero Section -->