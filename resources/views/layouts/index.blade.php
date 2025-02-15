<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Thememarch" />
  <!-- Favicon Icon -->
  <link rel="icon" href="{{ asset('assets/img/favicon.svg')}}" />
  <!-- Site Title -->
  <title>Constr - Construction & Building</title>
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
     <!-- Start Preloader -->
     <div id="constr-preloader">
      <div id="constr-status" role="status" aria-live="polite">
        <div class="preloader-content">
          <div class="constr-spinner">
            <div class="constr-rect rect1"></div>
            <div class="constr-rect rect2"></div>
            <div class="constr-rect rect3"></div>
            <div class="constr-rect rect4"></div>
            <div class="constr-rect rect5"></div>
            <div class="constr-rect rect6"></div>
            <div class="constr-rect rect7"></div>
          </div>
          <div class="constr-text">Loading, please wait...</div>
        </div>
      </div>
    </div>
    <!-- End Preloader -->

  <!-- Start Header Section -->
  <header class="cs_site_header cs-header-with-bg cs_style1 cs_sticky_header">

    <!-- Start Main Header Area -->
    <div class="cs_main_header">

      <div class="cs_main_header_in">
        <!-- Start Main Header Left Area -->
        <div class="cs_main_header_left">
          <div class="cs-constr-header-logo">
            <a class="cs_site_branding" href="{{ URL::to('/')}}">
              <img src="{{ asset('storage/' . $company->image)}}" alt="Logo" />
            </a>
          </div>
        </div>
        <!-- End Main Header Left Area -->

        <!-- Start Main Header Middle Area -->
        <div class="cs-constr-header-middle">
          <div class="cs_nav cs_medium">
            <ul class="cs_nav_list">
              <li>
                <a href="{{ URL::to('/')}}" class="cs-text_b_line"><span>HOME</span></a>
              </li>
              <li>
                <a href="about.html" class="cs-text_b_line"><span>ABOUT</span></a>
              </li>
              <li class="menu-item-has-children">
                <a href="service.html" class="cs-text_b_line"><span>SERVICES</span></a>
                <ul>
                  <li>
                    <a href="service.html" class="cs-text_b_line"><span>SERVICES</span></a>
                  </li>
                  <li>
                    <a href="service-details.html" class="cs-text_b_line"><span>SERVICES DETAILS</span></a>
                  </li>
                </ul>
                <span class="cs_munu_dropdown_toggle"></span>
              </li>
              <li class="menu-item-has-children">
                <a href="blog.html" class="cs-text_b_line"><span>NEWS & INSIGHTS</span></a>
                <ul>
                  <li>
                    <a href="blog.html" class="cs-text_b_line"><span>NEWS</span></a>
                  </li>
                  <li>
                    <a href="blog-standard.html" class="cs-text_b_line"><span>NEWS STANDARD</span></a>
                  </li>
                  <li>
                    <a href="blog-details.html" class="cs-text_b_line"><span>NEWS SINGLE</span></a>
                  </li>
                </ul>
                <span class="cs_munu_dropdown_toggle"></span>
              </li>
              <li class="menu-item-has-children">
                <a href="#" class="cs-text_b_line"><span>PAGES</span></a>
<ul>
                  <li>
                    <a href="projects.html" class="cs-text_b_line"><span>OUR PROJECTS</span></a>
                  </li>
                  <li>
                    <a href="project-details.html" class="cs-text_b_line"><span>PROJECTS DETAILS</span></a>
                  </li>
                  <li>
                    <a href="team.html" class="cs-text_b_line"><span>OUR TEAM</span></a>
                  </li>
                  <li>
                    <a href="team-details.html" class="cs-text_b_line"><span>TEAM DETAILS</span></a>
                  </li>

                  <li>
                    <a href="pricing.html" class="cs-text_b_line"><span>PRICING</span></a>
                  </li>
                  <li>
                    <a href="gallery.html" class="cs-text_b_line"><span>Gallery</span></a>
                  </li>
                  <li>
                    <a href="faq.html" class="cs-text_b_line"><span>FAQ</span></a>
                  </li>
                  <li>
                    <a href="404.html" class="cs-text_b_line"><span>Error</span></a>
                  </li>
                  <li>
                    <a href="coming.html" class="cs-text_b_line"><span>Coming Soon</span></a>
                  </li>
                </ul>
                <span class="cs_munu_dropdown_toggle"></span>
              </li>
              <li>
                <a href="contact.html" class="cs-text_b_line"><span>CONTACT US</span></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Main Header Middle Area -->

        <!-- Start Main Header Right Area -->
        <div class="cs_main_header_right themecolor-bg">

          <div class="cs_toolbox">
            <span class="cs_icon_btn">
              <span class="cs_icon_btn_in">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </span>
            </span>
          </div>

          <div class="header-contact">

            <div class="cs-header-phone theme-dark">
              <span>Support 24:</span>
              <a href="tel:+14065550120" class="cs-text_b_line"><span>(406) 555-0120</span></a>
            </div>

            <div class="cs-header-email theme-dark">
              <span>Email Us:</span>
              <a href="mailto:example@email.com" class="cs-text_b_line"><span>example@email.com</span></a>
            </div>

          </div>

        </div>
        <!-- End Main Header Right Area -->
      </div>

    </div>
    <!-- End Main Header Area -->

  </header>
  <!-- End Header Section -->

  <!-- Start Sidebar -->
  <div class="cs_side_header">

    <button class="cs_close"></button>

    <div class="cs_side_header_overlay"></div>
    <div class="cs_side_header_in">
      <div class="cs-sidebar-about-brand">
        <a class="cs_site_branding" href="{{ URL::to('/')}}">
          <img src="{{ asset('assets/img/logo_main.png')}}" alt="Logo" />
        </a>
        <div class="cs-height-20"></div>
        <p>
          We believe construction is more than building structures.
        </p>
        <div class="cs-height-35"></div>
        <img src="{{ asset('assets/img/header-sidebar/header-sidebar.jpg')}}" alt="">
      </div>

      <div class="cs-height-150"></div>
      <div class="cs-sidebar-middle-area">
        <p>Say hello!</p>
        <a href="tel:+14065550120"><h6>(406) 555-0120</h6></a>
        <div class="cs-height-20"></div>
        <p>Say hello!</p>
        <a href="mailto:info@email.com"><h6>info@email.com</h6></a>
        <div class="cs-height-20"></div>
                <p>Meet Us:</p>
        <span class="cs-text-style-h6">901 N Pitt Str., Suite 170 <br> Alexandria, USA</span>

        <div class="cs-height-30"></div>

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
  <!-- End Sidebar -->

  <!-- Start Hero Section -->
  <section>
    <div class="cs-height-100"></div>
    <div class="cs-hero-wrap">
      <div class="cs-hero-wrap-in">
        <div class="swiper hero-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="hero-slider-item" data-src="{{ asset('assets/img/hero/hero-image.jpg')}}">
                <div class="slider-item-content">
                 <div class="cs-hero-title">
                  <div class="cs-hero-title-in cs-head">
                    <h1><span class="hero-strong-title constr-splite">Construction</span> <span class="cs-hero-title-normal hero-second-splite">Solutions for Your Modern Living</span></h1>
                  </div>
                  <div class="ae-title hero-backdrop-text constr-splite">
                    <h2>CONSTRUCTION CONSTR</h2>
                  </div>
                 </div>
                  <p class="hero-subtitle">Your Partner in Creating Sustainable and Innovative Structures Your Partner in Creating Sustainable and Innovative Structures</p>
                  <div class="cs-couple-btn d-flex gap-3">
                    <a href="contact.html" class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-60 cs-width-180"><span>Start Project</span></a>
                    <a href="contact.html" class="cs-primary-btn cs-color-white theme-black-bg cs-height-60 cs-width-180"><span>Contact Us</span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="hero-slider-item" data-src="{{ asset('assets/img/hero/hero-image-slider-2.jpg')}}">
                <div class="slider-item-content">
                 <div class="cs-hero-title">
                  <div class="cs-hero-title-in">
                    <h1><span class="hero-strong-title constr-splite">Construction</span> <span class="cs-hero-title-normal hero-second-splite">Solutions for Modern Excellence</span></h1>
                  </div>
                  <div class="ae-title hero-backdrop-text constr-splite">
                    <h2>CONSTRUCTION CONSTR</h2>
                  </div>
                 </div>
                  <p class="hero-subtitle">Your Partner in Creating Sustainable and Innovative Structures Your Partner in Creating Sustainable and Innovative Structures</p>
                  <div class="cs-couple-btn d-flex gap-3">
                    <a href="contact.html" class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-60 cs-width-180"><span>Start Project</span></a>
                    <a href="contact.html" class="cs-primary-btn cs-color-white theme-black-bg cs-height-60 cs-width-180"><span>Contact Us</span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="hero-slider-item" data-src="{{ asset('assets/img/hero/hero-image-slider-3.jpg')}}">
                <div class="slider-item-content">
                 <div class="cs-hero-title">
                  <div class="cs-hero-title-in">
                    <h1><span class="hero-strong-title constr-splite">Construction</span> <span class="cs-hero-title-normal hero-second-splite">That Stands the <br> Test  of Time</span></h1>
                  </div>
                  <div class="ae-title hero-backdrop-text constr-splite">
                    <h2>CONSTRUCTION CONSTR</h2>
                  </div>
                 </div>
                  <p class="hero-subtitle">Your Partner in Creating Sustainable and Innovative Structures Your Partner in Creating Sustainable and Innovative Structures</p>
                  <div class="cs-couple-btn d-flex gap-3">
                    <a href="contact.html" class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-60 cs-width-180"><span>Start Project</span></a>
                    <a href="contact.html" class="cs-primary-btn cs-color-white theme-black-bg cs-height-60 cs-width-180"><span>Contact Us</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs-hero-social">
        <ul>
          <li><a href="https://dribbble.com" target="_blank">DRIBBBLE</a></li>
          <li><a href="https://pinterest.com" target="_blank">PINTEREST</a></li>
          <li><a href="https://linkedin.com" target="_blank">LINKEDIN</a></li>
          <li><a href="https://facebook.com" target="_blank">FACEBOOK</a></li>
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

  <!-- Start Company Journey -->
  <section>
    <div class="cs-about-wrap" data-src="{{ asset('assets/img/about/about-bg-img-home.svg')}}">
      <div class="container-fluid cs-about-wrap-in">
        <div class="col-xl-5 col-lg-12 col-md-12">
          <div class="cs-about-img">
            <div class="cs-section-height"></div>
              <!-- Section to Section Gap -->
            <div class="animate-img-wrap">
              <div class="reveal"></div>
              <img class="the-animated-image" src="{{ asset('assets/img/about/home-about-img.jpg')}}" alt="">
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-lg-12 col-md-12">
          <div class="cs-about-content">
            <div class="cs-about-content">
    
              <div class="cs-section-height"></div>
              <!-- Section to Section Gap -->
              <div class="cs-heading-with-animation">
                <h2 class="cs-heading">Enriching Lives with Constr Partner in Construction</h2>
                <span class="cs-text-style-h1 cs-animated-text">ABOUT US</span>
              </div>
              <div class="cs-height-10"></div>
              <p>We believe construction is more than building structures; it's about creating spaces that inspire and
                enrich lives. Our skilled professionals bring expertise and a passion for excellence to every project.
              </p>
              <div class="cs-height-90"></div>
              <div class="list-feature">
                <h6 data-aos="fade-up" data-aos-duration="300">1. Resistant Construction</h6>
                <div class="cs-list-border"></div>
                <h6 data-aos="fade-up" data-aos-duration="400">2. Commercial Construction</h6>
                <div class="cs-list-border"></div>
                <h6 data-aos="fade-up" data-aos-duration="500">3. Infrastructure Construction</h6>
              </div>
              <div class="cs-height-40"></div>
              <a href="about.html" class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-70 cs-width-220"><span>View More</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Company Journey -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Moving Text -->
  <section>
    <div class="cs-text-moving-wrap">
      <div class="cs_text-moving_in">
        <div class="cs_text-moving">
          <h2>Quality Construction, On Time, Every Time.</h2>
        </div>
        <div class="cs_text-moving">
          <h2>Quality Construction, On Time, Every Time.</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- End Moving Text -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Service Section -->
  <section>
    <div class="cs-heading-with-animation text-center max-width-800 m-auto d-flex">
      <h2 class="cs-heading">Construction Services Tailored to Build Your Success</h2>
      <span class="cs-text-style-h1 cs-animated-text">SERVICES</span>
    </div>
    <div class="cs-height-50"></div>

    <div class="services-wrapper">
      <div class="container">
        <div class="swiper service-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="service-item" data-aos="fade-up" data-aos-duration="300">
                <div class="srv-img">
                  <a href="service-details.html">
                    <img src="{{ asset('assets/img/service/service-img01.jpg')}}" alt="">
                  </a>
                </div>
                <div class="services-content">
                  <a href="service-details.html" class="the-srv-title cs-text-style-h6">01. Residential Construction</a>
                    <h4 class="the-plus">+</h4>
                    <div class="srv-the-hover">
                      <p>Lorem is simply text you can
                        just replace.</p>
                        <a href="service-details.html" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50 cs-width-160"><span>More Details</span></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-item"  data-aos="fade-up" data-aos-duration="400">
                <div class="srv-img">
                  <a href="service-details.html">
                    <img src="{{ asset('assets/img/service/service-img02.jpg')}}" alt="">
                  </a>
                </div>
                <div class="services-content">
                  <a href="service-details.html" class="the-srv-title cs-text-style-h6">02. Commercial Construction</a>
                    <h4 class="the-plus">+</h4>
                    <div class="srv-the-hover">
                      <p>Lorem is simply text you can
                        just replace.</p>
                        <a class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50 cs-width-160" href="service-details.html"><span>More Details</span></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-item"  data-aos="fade-up" data-aos-duration="500">
                <div class="srv-img">
                  <a href="service-details.html">
                    <img src="{{ asset('assets/img/service/service-img03.jpg')}}" alt="">
                  </a>
                </div>
                <div class="services-content">
                  <a href="service-details.html" class="the-srv-title cs-text-style-h6">03. Project Management</a>
                    <h4 class="the-plus">+</h4>
                    <div class="srv-the-hover">
                      <p>Lorem is simply text you can
                        just replace.</p>
                        <a href="service-details.html" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50 cs-width-160"><span>More Details</span></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-item"  data-aos="fade-up" data-aos-duration="600">
                <div class="srv-img">
                  <a href="service-details.html">
                    <img src="{{ asset('assets/img/service/service-img04.jpg')}}" alt="">
                  </a>
                </div>
                <div class="services-content">
                  <a href="service-details.html" class="the-srv-title cs-text-style-h6">04. Renovation and Remodeling</a>
                    <h4 class="the-plus">+</h4>
                    <div class="srv-the-hover">
                      <p>Lorem is simply text you can
                        just replace.</p>
                        <a href="service-details.html" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50 cs-width-160"><span>More Details</span></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="service-item"  data-aos="fade-up" data-aos-duration="700">
                <div class="srv-img">
                  <a href="service-details.html">
                    <img src="{{ asset('assets/img/service/service-img05.jpg')}}" alt="">
                  </a>
                </div>
                <div class="services-content">
                  <a href="service-details.html" class="the-srv-title cs-text-style-h6">05. Infrastructure Development</a>
                    <h4 class="the-plus">+</h4>
                    <div class="srv-the-hover">
                      <p>Lorem is simply text you can
                        just replace.</p>
                        <a href="service-details.html" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50 cs-width-160"><span>More Details</span></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs-height-50"></div>
        <div class="srv-pagination">
          <div class="srv-swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

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

    <div class="container client-wrap">
        <div class="swiper clients-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('assets/img/clients/logo05.png')}}" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('assets/img/clients/logo04.png')}}" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('assets/img/clients/logo03.png')}}" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('assets/img/clients/logo02.png')}}" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('assets/img/clients/logo01.png')}}" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('assets/img/clients/logo05.png')}}" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a class="client-item" href="#"><img src="{{ asset('assets/img/clients/logo04.png')}}" alt=""></a>
            </div>
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

  <!-- Start Footer -->
  <footer>
    <div class="cs-constr-footer-container theme-dark" data-src="{{ asset('assets/img/footer-bg.png')}}">

      <div class="cs-height-150"></div>

      <div class="cs-constr-footer-content">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-8 cs-lg-bootm-p30">
              <div class="cs-footer-widget">
                <div>
                  <a href="{{ URL::to('/')}}"><img src="{{ asset('storage/' . $company->image)}}" style="background-color: rgba(255, 255, 255, 0.7)" alt=""></a>
                  <div class="cs-height-20"></div>
                  <p>{{ $company->tagline }}</p>
                </div>
                <div class="cs-height-30"></div>
                {{-- <div class="cs-footer-widget-title">
                  <h6>NEWSLETTER</h6>
                  <div class="cs-height-10"></div>
                </div>
                <form class="cs-constr-newsletter">
                  <input class="cs-newsletter-email" type="email" placeholder="Enter your email..." required />
                  <button class="cs-newsletter-btn cs_center" type="submit">
                    Subscribe
                  </button>
                </form> --}}

                <div class="cs-height-30"></div>

                <div class="theme-social">
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
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-4">
              <div class="cs-footer-widget padding-lg-50">
                <div class="cs-footer-widget-title">
                  <h6>USEFUL LINK</h6>
                  <div class="cs-height-30"></div>
                </div>
                <div class="cs-constr-footer-menu">
                  <ul>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="about.html"
                        class="cs-text_b_line"><span>ABOUT US</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="service.html"
                        class="cs-text_b_line"><span>OUR SERVICES</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="projects.html"
                        class="cs-text_b_line"><span>RECENT PORTFOLIO</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i> <a href="blog.html"
                        class="cs-text_b_line"><span>NEWS & INSIGHTS</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="contact.html"
                        class="cs-text_b_line"><span>CONTACT US</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-5 col-md-6">
              <div class="cs-footer-widget">
                <div class="cs-footer-widget-title">
                  <h6>OUR SERVICES</h6>
                  <div class="cs-height-30"></div>
                </div>
                <div class="cs-constr-footer-menu">
                  <ul>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="service-details.html"
                        class="cs-text_b_line"><span>COMMERCIAL</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="service-details.html"
                        class="cs-text_b_line"><span>CONSULTING</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="service-details.html"
                        class="cs-text_b_line"><span>RENOVATIONS</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="service-details.html"
                        class="cs-text_b_line"><span>RESIDENTIAL</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i> <a href="service-details.html"
                        class="cs-text_b_line"><span>INDUSTRIAL</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-7 col-md-6">
              <div class="cs-footer-widget">
                <p>Phone</p>
                <a href="tel:+14065550120" class="cs-text-style-h5">{{ $company->phone }}</a>
                <div class="cs-height-30"></div>
                <p>Email</p>
                <a href="mailto:{{ $company->email }}" class="cs-text-style-h5">{{ $company->email }}</a>
                <div class="cs-height-30"></div>
                <p>Address:</p>
                <div class="cs-height-5"></div>
                <span class="cs-font-size-20">{{ $company->address }}</span>
                <span class="cs-font-size-20">{{ $company->city }}</span>                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="cs-height-130"></div>

      <div class="cs-theme-copyright">
        <div class="cs-footer-copy-text">
          <p>© {{ date('Y') }}  <a href="#" class="themecolor">{{ $company->application_name }}</a> All Rights Reserved.</p>
        </div>
      </div>

    </div>
  </footer>
  <!-- End Footer -->

  <!-- Start Scrollup -->
  <span class="cs_scrollup">
    <i class="flaticon-top"></i>
  </span>
  <!-- End Scrollup -->

    <!-- Start Video Popup -->
    <div class="cs_video_popup">
      <div class="cs_video_popup_overlay"></div>
      <div class="cs_video_popup_content">
          <div class="cs_video_popup_layer"></div>
          <div class="cs_video_popup_container">
              <div class="cs_video_popup_align">
                  <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="about:blank"></iframe>
                  </div>
              </div>
              <div class="cs_video_popup_close"></div>
          </div>
          
      </div>
    </div>
    <!-- End Video Popup -->

  <!-- Script -->
  <script src="{{ asset('assets/js/plugins/jquery-3.7.0.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/lightgallery.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/swiper.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/masonry.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/SplitText.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/ScrollToPlugin.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/gsap.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/aos.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>