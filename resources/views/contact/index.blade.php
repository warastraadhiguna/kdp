@extends('layouts.index')
@section('content')
<!-- Start Common BreadCrumb -->
<section>
    <div class="cs-breadcrumb-wrap theme-dark" data-src="{{ asset('storage/' . $company->breadcrumb_image) }}">
        <div class="container">
            <div class="row cs_center">
                <div class="cs-bread-page-title-area">
                    <div class="cs-page-title">
                        <h2 class="cs_white_color">Contact Us</h2>
                    </div>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{ url('/')}}" class="cs-text_b_line"><span>HOME</span></a>
                            </li>
                            <li>/</li>
                            <li>CONTACT US</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Common BreadCrumb -->
@include('contact.message');

< <!-- Start Contact Form & Map -->

    <!-- End Contact Form & Map -->
    @include('layouts.tagline');
    @endsection