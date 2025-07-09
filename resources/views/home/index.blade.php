
@extends('layouts.index')
@section('content')
  @include('home.slider');    

  @include('home.vision-mission');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  @include('layouts.tagline');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Section to Section Gap -->
  <!-- Start Why Choose Us & Video -->
  @include('home.video');
  <!-- End Why Choose Us & Video -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Team Section -->
  @include('home.member');
  <!-- End Team Section -->

  <div class="cs-section-height"></div>
  <!-- Start Experience & Image Section -->
  @include('home.experience');
  <!-- Start Experience & Image Section -->
  <div class="cs-section-height"></div>

  @include('home.owner');    

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Projects Section -->
  @include('home.project');  
  
  <!-- End Projects Section -->

  <!-- Start Features Section -->
  {{-- @include('home.feature');   --}}
  <!-- Start Features Section -->
  {{-- @include('home.client');   --}}
  <!-- Start Counter With CTA Section -->
  
  {{-- <div class="cs-section-height"></div> --}}
  @include('home.counter');  
  <div class="cs-section-height"></div>
  <!-- End Counter With CTA Section -->

  {{-- <div class="cs-section-height"></div> --}}


  <!-- Start Testimonial -->
  {{-- @include('home.testimoni'); --}}
  <!-- End Testimonial -->


{{-- @include('home.pricing'); --}}
  <!-- Start Pricing -->

<!-- End Pricing -->

  {{-- <div class="cs-section-height"></div> --}}
  <!-- Section to Section Gap -->

  <div class="cs-section-height"></div>
  <!-- Section to Section Gap -->

  <!-- Start Blog Section -->
  @include('home.blog');
  <!-- Start Blog Section -->

  <!-- Section to Section Gap -->
  <!-- Start Contact Form -->
  @include('contact.message');    
  <!-- End Contact Form -->
  @endsection