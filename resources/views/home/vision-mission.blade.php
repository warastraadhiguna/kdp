<section>
    <div class="cs-vision-mission-wrap">
      <div class="container-fluid cs-vision-mission-wrap-in d-flex flex-column flex-lg-row align-items-stretch p-5">
        
        <!-- Kolom Gambar -->
        <div class="p-0 m-1" style="flex: 1; min-width: 300px;">
          <div class="cs-vision-mission-img h-100">
            <div class="animate-img-wrap h-100">
              <img 
                src="{{ asset('storage/' . $company->vision_mission_image)}}" 
                alt="Vision Mission" 
                data-aos="zoom-in"
                data-aos-duration="1000"
                class="cs-vision-mission-img-fluid"
              >
            </div>
          </div>
        </div>
  
        <!-- Kolom Konten -->
        <div class="p-0 m-1" style="flex: 1; min-width: 300px;"                 
        data-aos="zoom-out"
        data-aos-duration="1000">
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
            <div class="cs-vision-mission-heading-with-animation">
              <h2 class="cs-vision-mission-heading text-center">Vision Mission</h2>
              <hr style="width: 50%; border: 2px solid black; margin: auto;">
            </div>
  
            <div class="cs-vision-mission-list-feature mt-4">
              <h6 data-aos="fade-up" data-aos-duration="300" style="text-align:center; font-size: 30px;">Vision</h6>
              <p style="white-space: pre-line; text-align:center; font-size: 20px;">
                {{ $company->vision }}
              </p>
  
  
              <h6 data-aos="fade-down" data-aos-duration="400" style="text-align:center; font-size: 30px;">Mission</h6>
              <p style="white-space: pre-line; text-align:center; font-size: 20px;">
                {{ $company->mission }}
              </p>
            </div>
  
            <div class="d-flex justify-content-center">
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
  