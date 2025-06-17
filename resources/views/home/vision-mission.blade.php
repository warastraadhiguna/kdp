<!-- Start Company Journey -->
<!-- 
<section>
    <div class="cs-about-wrap" data-src="{{ asset('storage/' . $company->vision_mission_image)}}">
        <div class="container-fluid cs-about-wrap-in">
            <div class="col-xl-5 col-lg-12 col-md-12">
                <div class="cs-about-img">
                    {{-- <div class="cs-section-height"></div> --}}
 
                    <div class="animate-img-wrap">
                        <div class="reveal"></div>
                        <img class="the-animated-image" src="{ { asset('storage/' . $company->vision_mission_image)}}"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-12 col-md-12">
                {{-- <div class="cs-about-content">
        <div class="cs-about-content"> --}}
                <div
                    style="background-color: white; padding: 30px; border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
 
                    <div class="cs-height-20"></div>
                    <div class="cs-heading-with-animation">
                        <h2 class="cs-heading" style="text-align: center">Vision Mission</h2>
                        <hr style="width: 50%; border: 2px solid black; margin: auto;">
                        {{-- <span class="cs-text-style-h1 cs-animated-text">ABOUT US</span> --}}
                    </div>
                    <div class="cs-height-80"></div>
                    <div class="list-feature">
                        <h6 data-aos="fade-up" data-aos-duration="300" style="text-align:center;font-size: 30px;">Vision</h6>
                        <div class="cs-height-20"></div>
                        <p style="white-space: pre-line;text-align:center; font-size: 20px;">{ { $company->vision }}</p>
                        <div class="cs-height-50"></div>
                        <h6 data-aos="fade-down" data-aos-duration="400" style="text-align:center;font-size: 30px;">Mission</h6>
                        <div class="cs-height-20"></div>
                        <p style="white-space: pre-line;text-align:center; font-size: 20px;">{ { $company->mission }}</p>
                    </div>
                    <div class="cs-height-40"></div>

                    <a href="{ { url("/about") }}"
                        class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-70 cs-width-220"
                        style="margin-inline: auto;"><span>Brief Histories</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!-- End Company Journey -->


<!-- Start Company Journey -->
<section>
    <div class="cs-about-wrap">
        <div class="container-fluid cs-about-wrap-in d-flex flex-column flex-lg-row align-items-stretch">
            <!-- Kolom Gambar -->
            <div class="p-0 m-0" style="flex: 1; min-width: 300px;">
                <div class="cs-about-img h-100">
                    <div class="animate-img-wrap h-100">
                        <img 
                        src="{{ asset('storage/' . $company->vision_mission_image)}}" 
                        alt="Vision Mission" 
                        data-aos="zoom-in"
                        data-aos-duration="1000"
                        style="height: 100%; width: 100%; object-fit: cover; border-radius: 20px;"
                    >
                    </div>
                </div>
            </div>

            <!-- Kolom Konten -->
            <div class="p-0 m-0" style="flex: 1; min-width: 300px;">
                <div style="
                    background-color: white;
                    padding: 30px;
                    border-radius: 20px;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                ">
                    <div class="cs-heading-with-animation">
                        <h2 class="cs-heading text-center">Vision Mission</h2>
                        <hr style="width: 50%; border: 2px solid black; margin: auto;">
                    </div>

                    <div class="list-feature mt-4">
                        <h6 data-aos="fade-up" data-aos-duration="300" style="text-align:center; font-size: 30px;">Vision</h6>
                        <p style="white-space: pre-line; text-align:center; font-size: 20px;">
                            {{ $company->vision }}
                        </p>

                        <div class="cs-height-30"></div>

                        <h6 data-aos="fade-down" data-aos-duration="400" style="text-align:center; font-size: 30px;">Mission</h6>
                        <p style="white-space: pre-line; text-align:center; font-size: 20px;">
                            {{ $company->mission }}
                        </p>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <a href="{{ url('/about') }}" 
                        class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-70 cs-width-220 mx-auto">
                        <span>Brief Histories</span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Company Journey -->
