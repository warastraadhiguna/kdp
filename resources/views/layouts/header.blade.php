  <!-- Start Header Section -->
  <header class="cs_site_header cs-header-with-bg cs_style1 cs_sticky_header">

    <!-- Start Main Header Area -->
    <div class="cs_main_header">

      <div class="cs_main_header_in">
        <!-- Start Main Header Left Area -->
        <div class="cs_main_header_left">
          <div class="cs-constr-header-logo">
            <a class="cs_site_branding" href="{{ url('/')}}">
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
                <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
              </li>
              <li>
                <a href="{{ url('/about')}}" class="cs-text_b_line"><span>ABOUT US</span></a>
              </li>
              <li>
                <a href="{{ url('/gallery')}}" class="cs-text_b_line"><span>GALLERY</span></a>
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
                <a href="{{ url('/contact')}}" class="cs-text_b_line"><span>CONTACT US</span></a>
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
              <a href="tel:{{ $company->phone }}" class="cs-text_b_line"><span>(406) 555-0120</span></a>
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
      <div class="cs-height-40"></div>        
      <div class="cs-sidebar-about-brand">
        <img src="{{ asset('storage/' . $company->image)}}" alt="">
      </div>
      <div class="cs-height-40"></div>   
      <div class="cs-sidebar-middle-area">
        <p>Phone</p>
        <a href="tel:{{ $company->phone }}"><h6>{{ $company->phone }}</h6></a>
        <div class="cs-height-20"></div>
        <p>Email</p>
        <a href="mailto:{{ $company->email }}"><h6>{{ $company->email }}</h6></a>
        <div class="cs-height-20"></div>
        <p>Address:</p>
        <span class="cs-text-style-h6">{{ $company->address }} <br>{{ $company->city }}</span>
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
  </div>
  <!-- End Sidebar -->