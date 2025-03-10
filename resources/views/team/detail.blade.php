
@extends('layouts.index')
@section('content')
 <!-- Start Common BreadCrumb -->
  <section>
    <div class="cs-breadcrumb-wrap theme-dark" data-src="{{ asset('storage/' . $company->breadcrumb_image) }}">
      <div class="container">
        <div class="row cs_center">
          <div class="cs-bread-page-title-area">
            <div class="cs-page-title">
              <h2 class="cs_white_color">Team Detail</h2>
            </div>
            <div class="breadcrumb">
              <ul>
                <li>
                  <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
                </li>
                <li>/</li>
                <li>TEAM Detail</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


    <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Team Section -->
  <section>
    <div class="team-single-wrap">
      <div class="container stickysec-wrap clearfix">
        <div class="row">
          <div class="col-lg-4 sticky-box">
            <div class="sticky-box-child">
              <div class="member-img-single">
                <div class="animate-img-wrap">
                  <div class="reveal"></div>
                  <img src="{{ asset('storage/' . $teamMember->image)}}" alt="">
                </div>
              </div>
              <div class="cs-height-50"></div>
              <div class="cs_gray_bg" data-aos="fade-up" data-aos-duration="500">
                  <div class="cs-height-50"></div>
                  <div class="contact-items">
                    <div class="contact-item">
                      <p>Say hello!</p>
                      <a href="mailto:{{ $teamMember->email }}">
                        <h6>{{ $teamMember->email }}</h6>
                      </a>
                    </div>
                  </div>
                  <div class="cs-height-30"></div>
  
                  <div class="theme-dark">
                    <div class="theme-social contact-items">
                      <ul>
                        @if( $teamMember->linkedin)                        
                        <li>
                            <a href="{{ $teamMember->linkedin }}" target="_blank">
                            <i class="flaticon-linkedin-big-logo"></i>
                            </a>
                        </li>                    
                        @endif
                        @if($teamMember->instagram)
                        <li>
                            <a href="{{ $teamMember->instagram }}" target="_blank">
                            <i class="flaticon-instagram"></i>
                            </a>
                        </li>                    
                        @endif
                      </ul>
                    </div>
                    <div class="cs-height-50"></div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-7">
            <div class="content scolling-content">
              <div class="member-info-single">
                <h2 class="cs_medium">{{ $teamMember->name }}</h2>
                <div class="cs-height-5"></div>
                <p class="cs-text-style-h6 cs_light">{{ $teamMember->position }}</p>
                <div class="cs-height-20"></div>
                <p  style="white-space: pre-line;text-align:justify;">
                  {{ $teamMember->description }}
                </p>
              </div>

              <div class="cs-height-30"></div>

              <blockquote  style="white-space: pre-line;text-align:justify; font-weight: bold;">
                {{ $teamMember->quote }}
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Team Section -->

  <div class="cs-section-height"></div>
  @include('layouts.tagline');      
@endsection