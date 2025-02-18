  <section>
    <div class="about-experience-wrap bottom-align">
      <div class="img-ae background-parallax">
        <div class="parallax-image max-height-750">
          <img src="{{ asset('storage/' . $company->parallax_image)}}" alt="">
          {{-- <div class="ae-title">
            <h2>{{ $company->application_name }}</h2>
          </div> --}}
        </div>
      </div>
      <div class="content-for-parallax">
        <div class="ae-content theme-dark">
          <div class="cs-experience" data-aos="fade-right" data-aos-duration="400">
            {{-- <img src="{{ asset('assets/img/about/25.svg')}}" alt=""> --}}
            <svg width="200" height="100" xmlns="http://www.w3.org/2000/svg">
              <text x="50%" y="65%" font-size="60" font-family="Arial, sans-serif" fill="white" stroke="white" stroke-width="2" text-anchor="middle" dominant-baseline="middle" font-weight="bold">
                {{ $company->years_since_established }}
              </text>
            </svg>

            <div class="cs-height-15"></div>
            <h4 class="cs-uppercase">Years of <br> Experience</h4>
          </div>
          <div class="aec-line"></div>
          <h3 data-aos="fade-left" data-aos-duration="400" class="cs-uppercase">We are Leading <br> Company</h3>
        </div>
      </div>
    </div>
  </section>