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
                  <a href="{{ url('/')}}"><img src="{{ asset('storage/' . $company->image)}}" style="background-color: rgba(255, 255, 255, 0.7)" alt=""></a>
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
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="{{ url(path: '/about')}}"
                        class="cs-text_b_line"><span>ABOUT US</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="{{ url('/gallery')}}"
                        class="cs-text_b_line"><span>GALLERY</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="{{ url('/contact')}}"
                        class="cs-text_b_line"><span>CONTACT US</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-5 col-md-6">
              <div class="cs-footer-widget">
                <div class="cs-footer-widget-title">
                  <h6>OTHERS</h6>
                  <div class="cs-height-30"></div>
                </div>
                <div class="cs-constr-footer-menu">
                  <ul>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="{{ url('/project')}}"
                        class="cs-text_b_line"><span>PROJECTS</span></a></li>
                    <li><i class="flaticon-right-arrow themecolor"></i><a href="{{ url('/blog')}}"
                        class="cs-text_b_line"><span>NEWS</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-7 col-md-6">
              <div class="cs-footer-widget">
                <p>Phone</p>
                <a href="tel:{{ $company->phone }}" class="cs-text-style-h5">{{ $company->phone }}</a>
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