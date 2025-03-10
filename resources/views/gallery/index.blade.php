
@extends('layouts.index')
@section('content')
 <!-- Start Common BreadCrumb -->
  <section>
    <div class="cs-breadcrumb-wrap theme-dark" data-src="{{ asset('storage/' . $company->breadcrumb_image) }}">
      <div class="container">
        <div class="row cs_center">
          <div class="cs-bread-page-title-area">
            <div class="cs-page-title">
              <h2 class="cs_white_color">Gallery</h2>
            </div>
            <div class="breadcrumb">
              <ul>
                <li>
                  <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
                </li>
                <li>/</li>
                <li>GALLERY</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Common BreadCrumb -->


  <div class="cs-section-height"></div>
 {{-- <div class="cs-section-height"></div> --}}
  <!-- Section to Section Gap -->

    <!-- Start Gallery -->
    <section class="container">
              <div class="max-width-1120 m-auto">
                <h4>
                    {{ $galleryCategory->title }}
                </h4>
                <div class="cs-height-30"></div>                
                <p  style="white-space: pre-line;text-align:justify; font-weight: bold;">{{ $galleryCategory->introduction }}
                </p>

                <div class="cs-height-40"></div>

              <div class="cs-container-border"></div>
            </div>      
        <div class="gallery" id="static-thumbnails">

            {{-- <div class="item gallery-horizontal">
                <a href="assets/img/gallery_3.jpg">
                    <img src="assets/img/gallery_3.jpg" alt="Phto" />
                    <div class="frame gallery-hover-icon">
                       <i class="flaticon-magnifying-glass"></i>
                    </div>
                </a>
            </div> --}}



            @foreach($galleries as $key => $gallery)
              <div class="item {{ $key %3 != 0 ? '' : 'gallery-vertical' }}">
                  <a href="{{ asset('storage/' . $gallery->image ) }}">
                      <img src="{{ asset('storage/' . $gallery->image ) }}" alt="Phto" />
                      <div class="frame gallery-hover-icon">
                        <i class="flaticon-magnifying-glass"></i>
                      </div>
                  </a>
              </div>
            @endforeach



            {{-- <div class="item gallery-horizontal">
                <a href="assets/img/gallery_6.jpg">
                    <img src="assets/img/gallery_6.jpg" alt="Phto" />
                    <div class="frame gallery-hover-icon">
                       <i class="flaticon-magnifying-glass"></i>
                    </div>
                </a>
            </div> --}}


          {{-- <div class="item gallery-vertical">
              <a href="assets/img/gallery_2.jpg">
                  <img src="assets/img/gallery_2.jpg" alt="Phto" />
                  <div class="frame gallery-hover-icon">
                     <i class="flaticon-magnifying-glass"></i>
                  </div>
              </a>
          </div> --}}
        </div>
    </section>
    <!-- Snd Gallery -->

  <div class="cs-section-height"></div>
  @include('layouts.tagline');      
@endsection