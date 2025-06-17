
@extends('layouts.index')
@section('content')
 <!-- Start Common BreadCrumb -->
  <section>
    <div class="cs-breadcrumb-wrap theme-dark" data-src="{{ asset('storage/' . $projectCategory->image) }}">
      <div class="container">
        <div class="row cs_center">
          <div class="cs-bread-page-title-area">
            <div class="cs-page-title">
              <h2 class="cs_white_color">Projects</h2>
            </div>
            <div class="breadcrumb">
              <ul>
                <li>
                  <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
                </li>
                <li>/</li>
                <li>PROJECTS</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Common BreadCrumb -->


 <div class="cs-section-height"></div>

<!-- Start Projects Section-->
  @include('project.list');     
  <!-- End Projects Section-->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  @include('project.promotion');     
  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  @include('home.owner');    
<div class="cs-section-height"></div>
  {{-- @include('layouts.tagline');       --}}
@endsection