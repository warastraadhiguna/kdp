<!-- Start Company Journey -->
<section>
    <div class="cs-about-wrap" data-src="{{ asset('storage/' . $company->vision_mission_image)}}">
        <div class="container-fluid cs-about-wrap-in">
            <div class="col-xl-5 col-lg-12 col-md-12">
                <div class="cs-about-img">
                    {{-- <div class="cs-section-height"></div> --}}
                    <!-- Section to Section Gap -->
                    <div class="animate-img-wrap">
                        <div class="reveal"></div>
                        <img class="the-animated-image" src="{{ asset('storage/' . $company->vision_mission_image)}}"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-12 col-md-12">
                {{-- <div class="cs-about-content">
        <div class="cs-about-content"> --}}
                <div
                    style="background-color: white; padding: 30px; border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                    <!-- Section to Section Gap -->
                    <div class="cs-height-20"></div>
                    <div class="cs-heading-with-animation">
                        <h2 class="cs-heading" style="text-align: center">Vision Mission</h2>
                        <hr style="width: 50%; border: 2px solid black; margin: auto;">
                        {{-- <span class="cs-text-style-h1 cs-animated-text">ABOUT US</span> --}}
                    </div>
                    <div class="cs-height-80"></div>
                    <div class="list-feature">
                        <h6 data-aos="fade-up" data-aos-duration="300" style="text-align:center;">Vision</h6>
                        <div class="cs-height-20"></div>
                        <p style="white-space: pre-line;text-align:center;">{{ $company->vision }}</p>
                        <div class="cs-height-50"></div>
                        <h6 data-aos="fade-up" data-aos-duration="400" style="text-align:center;">Mission</h6>
                        <div class="cs-height-20"></div>
                        <p style="white-space: pre-line;text-align:center;">{{ $company->mission }}</p>
                    </div>
                    <div class="cs-height-40"></div>

                    <a href="{{ url("/about") }}"
                        class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-70 cs-width-220"
                        style="margin-inline: auto;"><span>About Us</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Company Journey -->