
@extends('layouts.index')
@section('content')


  @include('home.slider');    

  @include('home.vision-mission');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  @include('layouts.tagline');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  @include('home.owner');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Projects Section -->
  <section>
    <div class="cs-project-wrap themecolor-bg-primary">
      <div class="container-fluid">
        <div class="cs-section-height"></div>
        <div class="cs-heading-with-animation text-center max-width-700 m-auto d-flex">
          <h2 class="cs-heading">Explore Our Most Recent Projects</h2>
          <span class="cs-text-style-h1 cs-animated-text">PORTFOLIO</span>
        </div>
  
        <div class="cs-height-50"></div>
      </div>
      
      <div class="project-masonry">
        <div class="cs-project-item first" data-aos="fade-top" data-aos-duration="300">
          <a href="project-details.html" class="cs-project-item-content-in">
            <img src="{{ asset('assets/img/projects/project-masonary-left.jpg')}}" alt="">
            <div class="project-meta-data">
              <div class="cs-project-content">
                <h4>Stronghold construction</h4>
                <span class="view-project">VIEW PROJECT <i class="flaticon-right-arrow"></i></span>
              </div>
            </div>
          </a>
        </div>
  
        <div class="cs-project-item second">
          <a href="project-details.html" class="cs-project-item-content-in" data-aos="fade-top" data-aos-duration="500">
            <img src="{{ asset('assets/img/projects/project-masonary-middle.jpg')}}" alt="">
            <div class="project-meta-data">
              <div class="cs-project-content">
                <h4>The Future of Sustainable Construction Trends to Watch</h4>
                <span class="view-project">VIEW PROJECT</span>
              </div>
            </div>
          </a>
        </div>
  
        <div class="cs-project-item third">
          <a href="project-details.html" class="cs-project-item-content-in" data-aos="fade-top" data-aos-duration="600">
            <img src="{{ asset('assets/img/projects/project-masonary-right-top.jpg')}}" alt="">
            <div class="project-meta-data">
              <div class="cs-project-content">
                <h5>The Future of Sustainable Construction Trends to Watch</h5>
                <span class="view-project">VIEW PROJECT</span>
              </div>
            </div>
          </a>
  
          <a href="project-details.html" class="cs-project-item-content-in" data-aos="fade-top" data-aos-duration="700">
            <img src="{{ asset('assets/img/projects/project-masonary-right-bottom.jpg')}}" alt="">
            <div class="project-meta-data">
              <div class="cs-project-content">
                <h5>The Future of Sustainable Construction Trends to Watch</h5>
                <span class="view-project">VIEW PROJECT</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  
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
    <div class="cs-heading-with-animation text-center max-width-800 m-auto d-flex">
      <h2 class="cs-heading">Our Clients</h2>
    </div>
    <div class="cs-height-50"></div>
    <div class="container client-wrap">
        <div class="swiper clients-slider">
          <div class="swiper-wrapper">
            @foreach($clients as $client)
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('storage/' . $client->image)}}" alt="{{ $client->name }}"></a>
            </div>
            @endforeach
          </div>         
          <div class="cs-height-50"></div>
          <div class="swiper-hint">
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
              Swipe
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
          </div>
        </div>
    </div>

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

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Team Section -->
  <section>
    <div class="team-wrap">
      <div class="container">
        <div class="cs-heading-with-animation max-width-700">
          <h2 class="cs-heading">Get to Know Our Dedicated Team Members</h2>
          <span class="cs-text-style-h1 cs-animated-text">TEAM</span>
          <div class="cs-height-50"></div>
        </div>
        <div class="row">
          <div class="team-member">
            <div class="member-img">
              <a href="team-details.html">
                <img class="animated-img" src="{{ asset('assets/img/member/team-member-1.jpg')}}" alt="">
              </a>
            </div>
            <div class="member-in">
              <div class="content">
                <a href="team-details.html">
                  <h6>Richard Hernandez</h6>
                </a>
                <p>Chief Officer (CEO)</p>
              </div>
              <div class="theme-social">
                <ul>
                  <li>
                    <a href="https://www.facebook.com" target="_blank">
                      <i class="flaticon-facebook-app-symbol"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com" target="_blank">
                      <i class="flaticon-linkedin-big-logo"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com" target="_blank">
                      <i class="flaticon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com" target="_blank">
                      <i class="flaticon-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="team-member">
            <div class="member-img">
              <a href="team-details.html">
                <img class="animated-img" src="{{ asset('assets/img/member/team-member-2.jpg')}}" alt="">
              </a>
            </div>
            <div class="member-in">
              <div class="content">
                <a href="team-details.html">
                  <h6>Robert Brown</h6>
                </a>
                <p>Lead Engineer</p>
              </div>
              <div class="theme-social">
                <ul>
                  <li>
                    <a href="https://www.facebook.com" target="_blank">
                      <i class="flaticon-facebook-app-symbol"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com" target="_blank">
                      <i class="flaticon-linkedin-big-logo"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com" target="_blank">
                      <i class="flaticon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com" target="_blank">
                      <i class="flaticon-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="team-member">
            <div class="member-img">
              <a href="team-details.html">
                <img class="animated-img" src="{{ asset('assets/img/member/team-member-3.jpg')}}" alt="">
              </a>
            </div>
            <div class="member-in">
              <div class="content">
                <a href="team-details.html">
                  <h6>Michel Wilson</h6>
                </a>
                <p>Site Coordinator</p>
              </div>
              <div class="theme-social">
                <ul>
                  <li>
                    <a href="https://www.facebook.com" target="_blank">
                      <i class="flaticon-facebook-app-symbol"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com" target="_blank">
                      <i class="flaticon-linkedin-big-logo"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com" target="_blank">
                      <i class="flaticon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com" target="_blank">
                      <i class="flaticon-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="team-member">
            <div class="member-img">
              <a href="team-details.html">
                <img class="animated-img" src="{{ asset('assets/img/member/team-member-4.jpg')}}" alt="">
              </a>
            </div>
            <div class="member-in">
              <div class="content">
                <a href="team-details.html">
                  <h6>Lucas Thompson</h6>
                </a>
                <p>Safety Officer</p>
              </div>
              <div class="theme-social">
                <ul>
                  <li>
                    <a href="https://www.facebook.com" target="_blank">
                      <i class="flaticon-facebook-app-symbol"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com" target="_blank">
                      <i class="flaticon-linkedin-big-logo"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com" target="_blank">
                      <i class="flaticon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com" target="_blank">
                      <i class="flaticon-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Team Section -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Testimonial -->
  <section>
    <div class="testi-wrapper">
      <div class="container for-quote-mark">
        <div class="row">
          <div class="swiper home1-testi-slider1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testi-slider-item-wrap">
                  <div class="testi-user" data-aos="fade-up" data-aos-duration="300">
                    <img class="testi-img" src="{{ asset('assets/img/avatar-testi.png')}}" alt="">
                    <h6>Sarah Johnson</h6>
                    <p>Los Angeles, CA</p>
                  </div>
                  <div class="testi-border">
                    <svg width="48" height="236" viewBox="0 0 48 236" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.5" d="M1 0V60.9809H46.3727L1 99.5681V236" stroke="#C1C1C1" />
                    </svg>
                  </div>
                  <div class="testi-content">
                    <img src="{{ asset('assets/img/star.svg')}}" alt="">
                    <div class="cs-height-20"></div>
                    <h4 class="testi-main-content">We were incredibly impressed with work on our project. They were professional, efficient, and
                      delivered a high-quality product on time and within budget. We would definitely recommend them to
                      others. Definitely recommend them.</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testi-slider-item-wrap">
                  <div class="testi-user">
                    <img src="{{ asset('assets/img/avatar-testi.png')}}" alt="">
                    <h6>Sarah Johnson</h6>
                    <p>Los Angeles, CA</p>
                  </div>
                  <div class="testi-border">
                    <svg width="48" height="236" viewBox="0 0 48 236" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.5" d="M1 0V60.9809H46.3727L1 99.5681V236" stroke="#C1C1C1" />
                    </svg>
                  </div>
                  <div class="testi-content">
                    <img src="{{ asset('assets/img/star.svg')}}" alt="">
                    <div class="cs-height-20"></div>
                    <h4 class="testi-main-content">We were incredibly impressed with work on our project. They were professional, efficient, and
                      delivered a high-quality product on time and within budget. We would definitely recommend them to
                      others. Definitely recommend them.</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="testi-quote-mark opacity01">
          <img src="{{ asset('assets/img/quotation-mark.svg')}}" alt="">
        </div>
      </div>
      <div class="testi-pagi-wrap">
        <div class="testi-pagination swiper-pagination-vertical"></div>
      </div>
    </div>
  </section>
  <!-- End Testimonial -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Why Choose Us & Video -->
  <section>
    <div class="cs-com-strength theme-black-bg theme-dark">
      <div class="cs-height-140"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-7">
            <h2><span data-aos="fade-up" data-aos-duration="500">Building Beyond Expectations</span> <span data-aos="fade-up" data-aos-duration="1000">with Innovation & Precision</span>  </h2>
            <div class="cs-height-10"></div>
            <p>Lorem Ipsum construction is more than building structures; it's about creating spaces that inspire and enrich lives. Our skilled professionals bring expertise and a passion for excellence to every project.</p>
            <div class="cs-height-35"></div>
            <div class="d-flex gap-3">
              <div class="cs-couple-btn d-flex gap-3">
                <a href="about.html" data-aos="fade-top" data-aos-duration="900" class="cs-primary-btn cs-color-white themecolor-bg cs-height-70 cs-width-220"><span>Read More</span></a>
                <a href="contact.html" data-aos="fade-top" data-aos-duration="1500" class="cs-primary-btn cs_white_color-bg cs-height-70 cs-width-220"><span>Contact Us</span></a>
              </div>
            </div>
          </div>
          <div class="col-xl-5">
            <div class="cs-video-area">
              <div class="cs-video" data-aos="fade-top" data-aos-duration="1000">
                <img src="{{ asset('assets/img/about/video-thumb.jpg')}}" alt="">
                <div class="cs-video-btn">
                  <a href="https://www.youtube.com/watch?v=4BzjUq921Y4" class="cs_video_open"><svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.7939 15.2383L0.293944 29.9607L0.293945 0.515848L25.7939 15.2383Z" fill="#F57500"/>
                    </svg>                    
                  </a>
                </div>
              </div>
              <div class="cs-height-50"></div>
              <div class="list-feature" data-aos="fade-up" data-aos-duration="600">
                <h6>Comprehensive Project Management</h6>
                <div class="cs-list-border"></div>
                <h6>High-Quality Craftsmanship</h6>
                <div class="cs-list-border"></div>
                <h6>Sustainable and Innovative Solutions</h6>
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

    <div class="cs-working-process-wrap themecolor-bg theme-dark">
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
    </div>
  </section>
  <!-- End Why Choose Us & Video -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Pricing -->
  <section>
    <div class="pricing-wrap ">
      <div class="container lg-gutter-control">

        <div class="cs-heading-with-animation text-center max-width-700 m-auto d-flex">
          <h2 class="cs-heading">Find the Right Plan for Your Project</h2>
          <span class="cs-text-style-h1 cs-animated-text">PRICING PLAN</span>
        </div>

        <div class="cs-height-50"></div>

        <div class="row">
          <div class="col-xl-4">
            <div class="pricing-item theme-border-wrap cs-hover-card-anim" data-aos="fade-up" data-aos-duration="300"
              data-ser="hover-reveal">

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

              <div class="content-for-top">
                <div class="cs-height-50"></div>

                <h5>Standard</h5>
                <p>Lorem Ipsum is simply.</p>
                <div class="cs-pricing-border-with-margin"></div>
                <h2>$250M</h2>

                <div class="cs-height-20"></div>

                <div class="pricing-feature-list body-text-color">
                  <ul class="cs-text-lh-200">
                    <li>Nam semper leo ac arcu ultricies ultricies.</li>
                    <li>Suspendisse interdum nisi ut aliquam.</li>
                    <li>Maecenas cursus eros sed nulla facilisis.</li>
                    <li>Sed sit amet velit egestas, luctus dolor vel.</li>
                    <li>Pellentesque mattis urna vitae tortor.</li>
                  </ul>
                </div>

                <div class="cs-height-70"></div>

                <a href="contact.html" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50"><span>Get
                    Start</span></a>

                <div class="cs-height-50"></div>
              </div>
              <div class="magic" data-src="{{ asset('assets/img/contact/contact-office-bg.jpg')}}"></div>
            </div>
            <div class="cs-height-30"></div>
          </div>
          <div class="col-xl-4">
            <div class="pricing-item theme-border-wrap theme-dark themecolor-bg hover-theme-black-bg" data-aos="fade-up"
              data-aos-duration="500">

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

              <div class="cs-height-50"></div>

              <h5>Professional</h5>
              <p>Lorem Ipsum is simply.</p>
              <div class="cs-pricing-border-with-margin"></div>
              <h2>$350M</h2>

              <div class="cs-height-20"></div>

              <div class="pricing-feature-list body-text-color">
                <ul class="cs-text-lh-200">
                  <li>Nam semper leo ac arcu ultricies ultricies.</li>
                  <li>Suspendisse interdum nisi ut aliquam.</li>
                  <li>Maecenas cursus eros sed nulla facilisis.</li>
                  <li>Sed sit amet velit egestas, luctus dolor vel.</li>
                  <li>Pellentesque mattis urna vitae tortor.</li>
                </ul>
              </div>

              <div class="cs-height-70"></div>

              <a href="contact.html" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50"><span>Get
                  Start</span></a>

              <div class="cs-height-50"></div>

            </div>
            <div class="cs-height-30"></div>
          </div>
          <div class="col-xl-4">
            <div class="pricing-item theme-border-wrap cs-hover-card-anim" data-aos="fade-up" data-aos-duration="900"
              data-ser="hover-reveal">

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

              <div class="content-for-top">
                <div class="cs-height-50"></div>
                <h5>Enterprise</h5>
                <p>Lorem Ipsum is simply.</p>
                <div class="cs-pricing-border-with-margin"></div>
                <h2>$550M</h2>

                <div class="cs-height-20"></div>

                <div class="pricing-feature-list body-text-color">
                  <ul class="cs-text-lh-200">
                    <li>Nam semper leo ac arcu ultricies ultricies.</li>
                    <li>Suspendisse interdum nisi ut aliquam.</li>
                    <li>Maecenas cursus eros sed nulla facilisis.</li>
                    <li>Sed sit amet velit egestas, luctus dolor vel.</li>
                    <li>Pellentesque mattis urna vitae tortor.</li>
                  </ul>
                </div>

                <div class="cs-height-70"></div>

                <a href="contact.html" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50"><span>Get
                    Start</span></a>
                <div class="cs-height-50"></div>
              </div>
              <div class="magic" data-src="{{ asset('assets/img/contact/contact-office-bg.jpg')}}"></div>
            </div>
            <div class="cs-height-30"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End Pricing -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Experience & Image Section -->
  <section>
    <div class="about-experience-wrap bottom-align">
      <div class="img-ae background-parallax">
        <div class="parallax-image max-height-750">
          <img src="{{ asset('assets/img/about/about-experience.jpg')}}" alt="">
          <div class="ae-title">
            <h2>CONSTRUCTION CONSTR</h2>
          </div>
        </div>
      </div>
      <div class="content-for-parallax">
        <div class="ae-content theme-dark">
          <div class="cs-experience" data-aos="fade-right" data-aos-duration="400">
            <img src="{{ asset('assets/img/about/27.svg')}}" alt="">
            <div class="cs-height-15"></div>
            <h4 class="cs-uppercase">Years of <br> Experience</h4>
          </div>
          <div class="aec-line"></div>
          <h3 data-aos="fade-left" data-aos-duration="400" class="cs-uppercase">We are Leading <br> Company</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Experience & Image Section -->
   
  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Blog Section -->
  <section>
    <div class="container">

      <div class="cs-heading-with-animation text-center max-width-800 m-auto d-flex">
        <h2 class="cs-heading">Explore Our Most Recent Blog Posts and Insights</h2>
        <span class="cs-text-style-h1 cs-animated-text">RECENT NEWS</span>
      </div>
      <div class="cs-height-50"></div>

      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="blog-item" data-aos="fade-up" data-aos-duration="300">
            <div class="blog-item-header">
              <div class="blog-item-img">
                <a href="blog-details.html">
                  <img src="{{ asset('assets/img/blog/blog-item-img01.jpg')}}" alt="" />
                </a>
              </div>
              <div class="date">
                <span>15 Aug</span>
              </div>
            </div>
            <div class="blog-item-data">
              <div class="tag-item">
                <a href="blog-standard.html"><span>Construction</span></a>
              </div>
              <div class="title">
                <a href="blog-details.html">
                  <h6>
                    The Future of Sustainable Construction Trends to Watch
                  </h6>
                </a>
              </div>
              <div class="border-1px"></div>
              <div class="cs-height-20"></div>
              <a href="blog-details.html" class="cs-text_b_line"
                ><span>Read More</span>
                <i class="flaticon-right-arrow"></i>
              </a>
            </div>
          </div>
          <div class="cs-height-30"></div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="blog-item" data-aos="fade-up" data-aos-duration="400">
            <div class="blog-item-header">
              <div class="blog-item-img">
                <a href="blog-details.html">
                  <img src="{{ asset('assets/img/blog/blog-item-img02.jpg')}}" alt="" />
                </a>
              </div>
              <div class="date">
                <span>17 Dec</span>
              </div>
            </div>
            <div class="blog-item-data">
              <div class="tag-item">
                <a href="blog-standard.html"><span>Project Management</span></a>
              </div>
              <div class="title">
                <a href="blog-details.html">
                  <h6>
                    Key Factors in Choosing the Right Construction Agency
                  </h6>
                </a>
              </div>
              <div class="border-1px"></div>
              <div class="cs-height-20"></div>
              <a href="blog-details.html" class="cs-text_b_line"
                ><span>Read More</span>
                <i class="flaticon-right-arrow"></i>
              </a>
            </div>
          </div>
          <div class="cs-height-30"></div>
        </div>
        <div class="col-xl-4 col-md-12">
          <div class="blog-item" data-aos="fade-up" data-aos-duration="500">
            <div class="blog-item-header">
              <div class="blog-item-img">
                <a href="blog-details.html">
                  <img src="{{ asset('assets/img/blog/blog-item-img03.jpg')}}" alt="" />
                </a>
              </div>
              <div class="date">
                <span>07 Jan</span>
              </div>
            </div>
            <div class="blog-item-data">
              <div class="tag-item">
                <a href="blog-standard.html"><span>Commercial</span></a>
              </div>
              <div class="title">
                <a href="blog-details.html">
                  <h6>
                    How Our Construction Agency Turns Visions into Reality
                  </h6>
                </a>
              </div>
              <div class="border-1px"></div>
              <div class="cs-height-20"></div>
              <a href="blog-details.html" class="cs-text_b_line"
                ><span>Read More</span>
                <i class="flaticon-right-arrow"></i>
              </a>
            </div>
          </div>
          <div class="cs-height-30"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Blog Section -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Contact Form -->
  <section>
    <div class="cs-contact-section">
      <div class="container-fluid">
        <div class="row cs_center" data-src="{{ asset('assets/img/pattern-bg-for-light.png')}}">

          <div class="col-xl-7">
            <div class="contact-img">
              <div class="animate-img-wrap">
                <div class="reveal"></div>
                <img class="the-animated-image" src="{{ asset('assets/img/contact/contact-image.jpg')}}" alt="">
              </div>
            </div>
          </div>

          <div class="col-xl-5">
            <div class="position-relative" data-aos="fade-up" data-aos-duration="300">
              <h2 class="cs-heading">Send Us a Message Use Our Contact Form to Get in Touch</h2>
              <span class="cs-text-style-h1 cs-animated-text">CONTACT US</span>
            </div>

            <div class="cs-height-35"></div>
            <form>
              <div class="input-col-two">
                <input type="text" placeholder="First Name*" required>
                <input type="text" placeholder="Last Name" required>
              </div>
              <div class="input-col-two">
                <input type="tel" placeholder="Phone*" required>
                <input type="email" placeholder="Email Address*" required>
              </div>
              <input type="text" placeholder="Subject" required>
              <textarea id="message" rows="4" placeholder="Write your message..." required></textarea>
              <button type="submit" class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-60 cs-width-220"><span>Send Message</span></button>
            </form>
          </div>

        </div>
        <div class="cs-section-height"></div>
      </div>
    </div>
  </section>
  <!-- End Contact Form -->
  @endsection