<!-- Start Clients Section -->
<section>
    <div class="cs-heading-with-animation text-center max-width-800 m-auto d-flex">
      <h2 class="cs-heading">Clients</h2>
      <span class="cs-text-style-h1 cs-animated-text">CLIENTS</span>
    </div>
    <div class="cs-height-50"></div>
  
    <div class="services-wrapper position-relative">
      <div class="container">
        <!-- Swiper -->
        <div class="swiper service-slider">
          <div class="swiper-wrapper">
            @foreach($owners as $owner)
            <div class="swiper-slide">
              <div class="service-item" data-aos="fade-up" data-aos-duration="300">
                <div class="srv-img">
                  <a href="#"><img src="{{ asset('storage/' . $owner->image) }}" alt=""></a>
                </div>
                <div class="services-content">
                  <div class="srv-the-hover">
                    <p>{{ $owner->name }}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
  
        <!-- Tombol Navigasi -->
<!-- Tombol Navigasi Kiri -->
<div class="srv-swiper-button-prev constr-nvigate"
     style="position: absolute; top: 50%; left: 30px; transform: translateY(-50%); z-index: 10;">
  <i class="flaticon-left-arrow" style="font-family: 'Flaticon';"></i>
</div>

<!-- Tombol Navigasi Kanan -->
<div class="srv-swiper-button-next constr-nvigate"
     style="position: absolute; top: 50%; right: 30px; transform: translateY(-50%); z-index: 10;">
  <i class="flaticon-right-chevron" style="font-family: 'Flaticon';"></i>
</div>
  
        <!-- Pagination -->
        <div class="cs-height-50"></div>
        <div class="srv-pagination">
          <div class="srv-swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Clients Section -->
  