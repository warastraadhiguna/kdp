<?php 
  $aoses = ['flip-left','fade-down-left','fade-down','fade-up-right','flip-down','zoom-in-down'];
  $randomNumber = rand(0, 5);
?>
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
      <div class="services-wrapper">
        <div class="container">
          <div class="swiper service-slider-project">
            <div class="swiper-wrapper">
              @foreach($projectCategories as $projectCategory)
              @if($projectCategory->projects && sizeOf($projectCategory->projects)>0)
                
              <div class="swiper-slide">
                <div class="service-item"  data-aos="{{ $aoses[$randomNumber] }}" data-aos-duration="1000">
                  <div class="srv-img">
                    <a href="{{ url("project/" . $projectCategory->slug )}}">
                      <img src="{{ asset('storage/'. $projectCategory->image)}}" alt="">
                    </a>
                  </div>
                  <div class="services-content">
                    <a href="{{ url("project/" . $projectCategory->slug )}}" class="the-srv-title cs-text-style-h6">{{ $projectCategory->title }}</a>
                      <h4 class="the-plus">+</h4>
                      <div class="srv-the-hover">
                        {{-- <p>{{ Illuminate\Support\Str::limit($projectCategory->introduction, 200, '...') }}</p> --}}
                          <a href="{{ url("project/" . $projectCategory->slug )}}" class="cs-primary-btn cs-color-black cs_white_color-bg cs-height-50 cs-width-160"><span>More Details</span></a>
                      </div>
                  </div>
                </div>
              </div>   
              @endif             
              @endforeach

            </div>
          </div>
          <div class="cs-height-50"></div>
          <div class="srv-pagination">
            <div class="srv-swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>    
  </section>