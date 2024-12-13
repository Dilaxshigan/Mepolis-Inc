@extends('layouts.app')
@section('title','')
@section('main-content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg1.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Request A Quote</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('index2') }}">Home</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>Request A Quote</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="quote-section-with-photo">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Form Section -->
                    <div class="col-lg-6">
                        <div class="quote-form-container">
                            <h2 class="section-title">Request Quick Quote</h2>
                            <p>Fill out the form below, and we’ll get back to you with a customized logistics quote.</p>
                            <form class="quote-form" action="{{ route('store_request') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="full-name">Full Name</label>
                                    <input type="text" id="full-name" name="name" class="form-control" placeholder="Your Full Name">
                                    @error('name')
                                       <span class="text-danger fw-semibold">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Your Email Address">
                                    @error('email')
                                        <span class="text-danger fw-semibold">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone Number">
                                    @error('phone')
                                         <span class="text-danger fw-semibold">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="weight">Weight (kg)</label>
                                        <input type="number" id="weight" name="weight" class="form-control" placeholder="Weight">
                                        @error('weight')
                                           <span class="text-danger fw-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="length">Length (cm)</label>
                                        <input type="number" id="length" name="length" class="form-control" placeholder="Length">
                                        @error('length')
                                             <span class="text-danger fw-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="height">Height (cm)</label>
                                        <input type="number" id="height" name="height" class="form-control" placeholder="Height">
                                        @error('height')
                                             <span class="text-danger fw-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="width">Width (cm)</label>
                                    <input type="number" id="width" name="width" class="form-control" placeholder="Width">
                                </div>
                                <div class="form-group">
                                    <label for="message">Write Your Message</label>
                                    <textarea id="message" name="message" class="form-control" rows="4" placeholder="Write Your Message"></textarea>
                                    @error('message')
                                        <span class="text-danger fw-semibold">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-orange">Send Request</button>
                            </form>
                            @if (session('message'))
                                   <div class="alert alert-success mt-3 fs-5">
                                        {{ session('message') }}
                                   </div>
                           @endif
                        </div>
                    </div>
                    <!-- Image Section -->
                    <div class="col-lg-6">
                        <div class="quote-image-container">
                            <img src="{{ asset('assets/images/request-quote.jpg') }}" alt="Logistics" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--Process One Start-->
        <section class="benefits-section">
            
            <div class="container center">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Company Benefit</span>
                    </div>
                    <h2 class="section-title__title">Why Do You Like Mepolis Inc?</h2>
                    <p>Beyond just a supplier, Mepolis Inc. is your dedicated partner, working closely with you to provide data-driven insights and recommendations that help streamline your logistics and minimize costs.</p>
                </div>
                <div class="row">
                    <!-- Benefit Single Start -->
                    <div class="col-xl-3 col-lg-3 content-inner col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="benefits-single">
                            <div class="benefits-single__icon">
                                <img src="{{ asset('assets/images/benefits/delivery-time.jpg') }}" alt="Right Time Delivery">
                            </div>
                            <h3 class="benefits-single__title">Right Time Delivery</h3>
                            <p class="benefits-single__text">Our Right Time Delivery service ensures that your shipments arrive precisely when needed. With meticulous planning and real-time tracking, we reduce delays and enhance reliability.</p>
                        </div>
                    </div>
                    <!-- Benefit Single End -->
                    <!-- Benefit Single Start -->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="benefits-single">
                            <div class="benefits-single__icon">
                                <img src="{{ asset('assets/images/benefits/online-support.jpg') }}" alt="24/7 Online Support">
                            </div>
                            <h3 class="benefits-single__title">24/7 Online Support</h3>
                            <p class="benefits-single__text">Mepolis Inc. offers round-the-clock online support to keep your logistics running smoothly. Our dedicated team ensures seamless operations and quick responses anytime, anywhere.</p>
                        </div>
                    </div>
                    <!-- Benefit Single End -->
                    <!-- Benefit Single Start -->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="benefits-single">
                            <div class="benefits-single__icon">
                                <img src="{{ asset('assets/images/benefits/safe-package.jpg') }}" alt="Safe Package">
                            </div>
                            <h3 class="benefits-single__title">Safe Package</h3>
                            <p class="benefits-single__text">At Mepolis Inc., we prioritize the safety of every package. With secure handling, robust packaging solutions, and thorough quality checks, your shipments arrive in perfect condition.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="benefits-single">
                            <div class="benefits-single__icon">
                                <img src="{{ asset('assets/images/benefits/data-driven.jpg') }}" alt="Data-Driven Insights">
                            </div>
                            <h3 class="benefits-single__title">Data-Driven Insights</h3>
                            <p class="benefits-single__text">We provide actionable insights and strategic recommendations that streamline your logistics operations, ensuring cost-effectiveness and optimal efficiency for your business.</p>
                        </div>
                    </div>
                    <!-- Benefit Single End -->
                </div>
                    <!-- Benefit Single End -->
                    
                </div>
            </div>
        </section>

@endsection

{{-- Specify footer type --}}
@section('footer-type', 'footer2')

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/request.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/request.js') }}"></script>
@endsection
{{-- asset link end --}}