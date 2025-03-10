  <section>
    <div class="cs-com-strength theme-black-bg theme-dark">
      <div class="cs-height-140"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-7">
            <h2><span data-aos="fade-up" data-aos-duration="500">About Us</span> </h2>
            <div class="cs-height-10"></div>
            <p style="text-align: justify">{{ Illuminate\Support\Str::limit($company->about_us, 1100, '...') }}</p>
            <div class="cs-height-35"></div>
            <div class="d-flex gap-3">
              <div class="cs-couple-btn d-flex gap-3">
                <a href="{{ url('/about') }}" data-aos="fade-top" data-aos-duration="900" class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-70 cs-width-220"><span>Read More</span></a>
                <a href="{{ url('/contact') }}" data-aos="fade-top" data-aos-duration="1500" class="cs-primary-btn cs_white_color-bg cs-height-70 cs-width-220"><span>Contact Us</span></a>
              </div>
            </div>
          </div>
          <div class="col-xl-5">
            <div class="cs-video-area">
              <div class="cs-video" data-aos="fade-top" data-aos-duration="1000">
                <img src="{{ asset('storage/'. $company->video_thumbnail_image)}}" alt="">
                <div class="cs-video-btn">
                  <a href="{{ $company->video_link }}" class="cs_video_open"><svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.7939 15.2383L0.293944 29.9607L0.293945 0.515848L25.7939 15.2383Z" fill="#F57500"/>
                    </svg>                    
                  </a>
                </div>
              </div>
              <div class="cs-height-50"></div>
              <div class="list-feature" data-aos="fade-up" data-aos-duration="600">
                  @foreach($shownGalleryCategories as $key => $shownGalleryCategory)
                      <h6><a href="{{ url("gallery/" . $shownGalleryCategory->slug )}}" class="cs-text_b_line"><span>{{ str($shownGalleryCategory->title) }}</span></a></h6>
                      
                      @if($key < sizeof($shownGalleryCategories) - 1)                        
                      <div class="cs-list-border"></div>
                      @endif
                  @endforeach
              </div>
              <div class="cs-height-140"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="com-strength-img" data-aos="fade-right" data-aos-duration="500">
        <img src="{{ asset('assets/img/about/transparent-img-about-com.png')}}" alt="">
      </div>
    </div>

    {{-- <div class="cs-working-process-wrap themecolor-bg theme-dark">
      <div class="cs-height-100"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="cs-process-item" data-aos="fade-top" data-aos-duration="300">
              <div class="cs-wp-icon">
                <img src="{{ asset('assets/img/one.svg')}}" alt="">
              </div>
              <h6>Project Planning</h6>
              <p>Lorem Ipsum is simply dummy text of the printing typesetting industry.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="cs-process-item" data-aos="fade-top" data-aos-duration="500">
              <div class="cs-wp-icon">
                <img src="{{ asset('assets/img/two.svg')}}" alt="">
              </div>
              <h6>Design Development</h6>
              <p>Lorem Ipsum is simply dummy text of the printing typesetting industry.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="cs-process-item" data-aos="fade-top" data-aos-duration="700">
              <div class="cs-wp-icon">
                <img src="{{ asset('assets/img/three.svg')}}" alt="">
              </div>
              <h6>Pre-Construction</h6>
              <p>Lorem Ipsum is simply dummy text of the printing typesetting industry.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="cs-process-item" data-aos="fade-top" data-aos-duration="900">
              <div class="cs-wp-icon">
                <img src="{{ asset('assets/img/four.svg')}}" alt="">
              </div>
              <h6>Project Completion</h6>
              <p>Lorem Ipsum is simply dummy text of the printing typesetting industry.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="cs-height-100"></div>
    </div> --}}
  </section>