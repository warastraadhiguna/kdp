
@extends('layouts.index')
@section('content')
 <!-- Start Common BreadCrumb -->
 @if($galleryCategory->breadcrumb_image)

  <section>
    <div class="cs-breadcrumb-wrap theme-dark" data-src="{{ asset('storage/' . $galleryCategory->breadcrumb_image) }}">
      <div class="container">
        <div class="row cs_center">
          <div class="cs-bread-page-title-area">
            <div class="cs-page-title">
              <h2 class="cs_white_color">Manpower & Facilities</h2>
            </div>
            <div class="breadcrumb">
              <ul>
                <li>
                  <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
                </li>
                <li>/</li>
                <li>MANPOWER & FACILITIES</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Common BreadCrumb -->
    
 @endif


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
            @foreach($galleries as $key => $gallery)
            <div class="item 
                {{ 
                    // Logika untuk menentukan class berdasarkan urutan gambar
                    ($key % 4 == 0) ? 'gallery-vertical' : 
                    (($key % 4 == 2) ? 'gallery-horizontal' : '') 
                }}">
                <a href="{{ asset('storage/' . $gallery->image) }}">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Photo{{ $key }}" />
                    <div class="frame gallery-hover-icon">
                        <i class="flaticon-magnifying-glass"></i>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </section>
    <!-- Snd Gallery -->

  <div class="cs-section-height"></div>
  @include('layouts.tagline');      
@endsection