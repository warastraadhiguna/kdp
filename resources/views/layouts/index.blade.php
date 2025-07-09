<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Thememarch" />
  <!-- Favicon Icon -->
  <link rel="shortcut icon" href="{{ asset('storage/' . $company->icon) }}" type="image/x-icon">
  <!-- Site Title -->
  <title>{{ $company->application_name }}</title>
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
  @if((\Illuminate\Support\Facades\Request::is('*about')))
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  @endif

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
    <!-- End Preloader  { {  asset('storage/' . $company->modal_image) }} -->

    @if($company->modal_image && (\Illuminate\Support\Facades\Request::is('/')))
      <div id="introOverlay"
      class="overlay-fullscreen position-relative"
      data-aos="zoom-in"
      data-aos-duration="1200"
      style="background-image: url('{{  asset('storage/' . $company->modal_image) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

      {{-- Tombol di 3/4 halaman --}}
      <div class="text-center position-absolute w-100" style="top: 75%;">

        <a href="#" id="enterSiteBtn" data-aos="fade-up" data-aos-delay="800"
        class="cs-primary-btn secondary-btn cs-color-white themecolor-bg cs-height-70 cs-width-220 mx-auto">
        <span>More about us</span>
      </a>
      </div> 
      </div>

      <div id="mainContent" style="display: none;">
        @include('layouts.header')    
        @yield('content')
        @include('layouts.footer')  
      </div>
    @else
      @include('layouts.header')    
      @yield('content')
      @include('layouts.footer')  
    @endif






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

  @if($company->modal_image && (\Illuminate\Support\Facades\Request::is('/')))
<script>
  const enterBtn = document.getElementById('enterSiteBtn');
  const overlay = document.getElementById('introOverlay');
  const mainContent = document.getElementById('mainContent');

  enterBtn.addEventListener('click', function () {
    // Fade out overlay
    overlay.classList.add('fade-out');

    // Setelah overlay menghilang, fade-in konten utama
    overlay.addEventListener('animationend', function () {
      overlay.style.display = 'none';
      mainContent.style.display = 'block';
      mainContent.classList.add('fade-in');
    });
  });
</script>
@endif
  <script>
  function swiperInit() {
    if ($(".hero-slider").length) {
      const heroSliderSwiper = new Swiper(".hero-slider", {
        speed: 1000,
        loop: true,
        autoplay: {
          delay: 6000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".hero-swiper-button-next",
          prevEl: ".hero-swiper-button-prev",
        },
        on: {
          init: function () {
            animateSlide(document.querySelector(".swiper-slide-active"));
          },
          slideChangeTransitionStart: function () {
            gsap.set(".swiper-slide .constr-splite", { clearProps: "all" });
            gsap.set(".swiper-slide .hero-subtitle", { clearProps: "all" });
            gsap.set(".swiper-slide .hero-backdrop-text", { clearProps: "all" });
    
            animateSlide(document.querySelector(".swiper-slide-active"));
          },
        },
      });
    
      function animateSlide(activeSlide) {
        if (!activeSlide) return;
    
        const activeSlideContent = activeSlide.querySelector(".constr-splite");
        const activeSlideContentBack = activeSlide.querySelector(".hero-backdrop-text");
        const activeSlideContentSecond = activeSlide.querySelector(".hero-second-splite");
        const activeSlideSubtitle = activeSlide.querySelector(".hero-subtitle");
        const activeButtons = activeSlide.querySelectorAll(".cs-couple-btn");
    
        if (activeSlideContent) {
          const childSplit = new SplitText(activeSlideContent, { type: "lines, words", wordsClass: "split-child" });
          const parentSplit = new SplitText(activeSlideContent, { linesClass: "split-parent" });
    
          gsap.from(childSplit.words, {
            duration: 0.8,
            yPercent: 50,
            rotation: 10,
            opacity: 0,
            ease: "power4.out",
            stagger: 0.05,
          });
        }
    
        if (activeSlideContentBack) {
          const childSplitBack = new SplitText(activeSlideContentBack, { type: "lines, words", wordsClass: "split-child" });
          const parentSplitBack = new SplitText(activeSlideContentBack, { linesClass: "split-parent" });
    
          gsap.from(childSplitBack.words, {
            duration: 1.1,
            opacity: 0,
            y: 100,
            ease: "power3.out",
          });
        }
    
        if (activeSlideContentSecond) {
          const childSplitSecond = new SplitText(activeSlideContentSecond, { type: "lines, words", wordsClass: "split-child" });
          const parentSplitSecond = new SplitText(activeSlideContentSecond, { linesClass: "split-parent" });
    
          gsap.from(childSplitSecond.words, {
            duration: 1.5,
            opacity: 0,
            y: 100,
            ease: "power3.out",
          });
        }
    
        if (activeSlideSubtitle) {
          gsap.from(activeSlideSubtitle, {
            duration: 1,
            opacity: 0,
            y: 100,
            scale: 1.2,
            ease: "power3.out",
          });
        }
    
        if (activeButtons.length) {
          gsap.from(activeButtons, {
            duration: 0.8,
            x: 300,
            opacity: 0,
            scale: 1.5,
            ease: "power4.out",
            stagger: 0.2,
          });
        }
      }
    }
    
    // Common Slider
    if ($(".common-slider").length) {
      var projectSliderSwiper = new Swiper(".common-slider", {
        effect: "fade",
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        scrollbar: {
          el: ".swiper-scrollbar",
          hide: false,
        },
        navigation: {
          nextEl: ".cs-ps-swiper-btn-next",
          prevEl: ".cs-ps-swiper-btn-prev",
        },
      });
    }

    // TimeLine Slider
    if ($(".timeline-slider").length) {
      var projectSliderSwiper = new Swiper(".timeline-slider", {
        slidesPerView: 1,
        spaceBetween: 1,
        loop: false,
        pagination: {
          el: ".timeline-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            const dates = @json($years??[]);
            return `<span class="${className}"  style="margin: 0 30px;"><span>${dates[index]}</span></span>`;
          },
        },
        on: {
          slideChange: function () {
            const progress =
              ((this.activeIndex + 1) / this.slides.length) * 100;
            document.querySelector(
              ".timeline-progress-bar"
            ).style.width = `${progress}%`;
          },
        },
      });
    }

    if ($(".home1-testi-slider1").length) {
      const testiSliderSwiper = new Swiper(".home1-testi-slider1", {
        speed: 1000,
        parallax: true,
        loop: true,
        autoplay: {
          delay: 5000,
        },
        pagination: {
          el: ".testi-pagination",
          clickable: true,
        },
        on: {
          slideChangeTransitionStart: function () {

            gsap.set(".swiper-slide .testi-content", { clearProps: "all" });
            gsap.set(".swiper-slide .testi-user", {
              clearProps: "all",
            });
            gsap.set(".swiper-slide .testi-user img", {
              clearProps: "all",
            });

            const activeSlideContentBack = document.querySelector(
              ".swiper-slide-active .testi-user"
            );
            const activeSlideContentSecond = document.querySelector(
              ".swiper-slide-active .testi-user img"
            );
            const activeSlideMainText = document.querySelector(
              ".swiper-slide-active .testi-content"
            );
            const activeButtons = document.querySelectorAll(
              ".swiper-slide-active .testi-user img"
            );

            if (activeSlideContentBack) {
              const childSplitBack = new SplitText(activeSlideContentBack, {
                type: "lines, words",
                wordsClass: "split-child",
              });
              const parentSplitBack = new SplitText(activeSlideContentBack, {
                linesClass: "split-parent",
              });

              gsap.from(childSplitBack.words, {
                duration: 1.1,
                opacity: 0,
                y: 100,
                ease: "power3.out",
              });
            }
            if (activeSlideContentSecond) {
              const childSplitSecond = new SplitText(activeSlideContentSecond, {
                type: "lines, words",
                wordsClass: "split-child",
              });
              const parentSplitSecond = new SplitText(
                activeSlideContentSecond,
                {
                  linesClass: "split-parent",
                }
              );

              gsap.from(childSplitSecond.words, {
                duration: 1.5,
                opacity: 0,
                y: 100,
                ease: "power3.out",
              });
            }

            if (activeSlideMainText) {
              gsap.from(activeSlideMainText, {
                duration: 1,
                opacity: 0,
                y: 100,
                scale: 1.2,
                ease: "power3.out",
              });
            }

            if (activeButtons.length) {
              gsap.from(activeButtons, {
                duration: 0.8,
                x: 300,
                opacity: 0,
                scale: 1.5,
                ease: "power4.out",
                stagger: 0.2,
              });
            }
          },
        },
      });
    }

    // Services Slider
    if ($(".service-slider").length) {
      var servicesslider = new Swiper(".service-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
        pagination: {
          el: ".srv-swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".srv-swiper-button-next",
          prevEl: ".srv-swiper-button-prev",
        },      
        breakpoints: {
          1200: {
            slidesPerView: 5,
            spaceBetween: 30,
          },
          992: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          576: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          0: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
        },
      }); 
    }

//project
if ($(".service-slider-project").length) {
      var servicesslider = new Swiper(".service-slider-project", {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
          el: ".srv-swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          1200: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
          992: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
          576: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          0: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
        },
      });
    }



    // Client Slider
    if ($(".clients-slider").length) {
      var clientslider = new Swiper(".clients-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
        breakpoints: {
          1200: {
            slidesPerView: 5,
            spaceBetween: 30,
          },
          992: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          576: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          300: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          0: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
        },
      });
    }
  }
  window.addEventListener("load", function () {
  const sliderEl = document.querySelector(".service-slider");

  if (sliderEl && sliderEl.querySelector(".swiper-wrapper").children.length > 0) {
    const nextBtn = document.querySelector(".srv-swiper-button-next");
    const prevBtn = document.querySelector(".srv-swiper-button-prev");

    new Swiper(sliderEl, {
      slidesPerView: 5,
      spaceBetween: 30,
      pagination: {
        el: ".srv-swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".srv-swiper-button-next",
        prevEl: ".srv-swiper-button-prev",
      },
      breakpoints: {
        1200: { slidesPerView: 5, spaceBetween: 30 },
        992: { slidesPerView: 4, spaceBetween: 20 },
        768: { slidesPerView: 3, spaceBetween: 20 },
        576: { slidesPerView: 2, spaceBetween: 10 },
        0:   { slidesPerView: 1, spaceBetween: 0 },
      },
      on: {
        init: function () {
          if (nextBtn) nextBtn.style.display = 'flex';
          if (prevBtn) prevBtn.style.display = 'flex';
        }
      }
    });
  }
});

  </script> 
</body>

</html>