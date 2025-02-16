<!-- Start Service Section -->
<section>
<div class="cs-heading-with-animation text-center max-width-800 m-auto d-flex">
    <h2 class="cs-heading">Owner</h2>
    <span class="cs-text-style-h1 cs-animated-text">OWNER</span>
</div>
<div class="cs-height-50"></div>

<div class="services-wrapper">
    <div class="container">
    <div class="swiper service-slider">
        <div class="swiper-wrapper">
            @foreach($owners as $owner)
            <div class="swiper-slide">
                <div class="service-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="srv-img">
                        <a href="#">
                        <img src="{{ asset('storage/' . $owner->image)}}" alt="">
                        </a>
                    </div>
                    <div class="services-content">
                        {{-- <a href="service-details.html" class="the-srv-title cs-text-style-h6">{{ $owner->name }}</a> --}}
                        <h4 class="the-plus">+</h4>
                        <div class="srv-the-hover">
                            <p>{{ $owner->note }}</p>
                            {{-- <a href="service-details.html" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50 cs-width-160"><span>More Details</span></a> --}}
                        </div>
                    </div>
                </div>
            </div>                
            @endforeach
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