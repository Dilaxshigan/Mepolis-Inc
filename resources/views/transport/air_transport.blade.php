@extends('layouts.app')
@section('title','')
@section('main-content')

<section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg2.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Air Transport</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('index2') }}">Home</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>Air Transport</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="services-details__left">
                            <div class="services-details__client-box">
                                <div class="services-details__client-img">
                                    <img src="{{ asset('assets/images/services/services-details-client-img-1.jpg') }}" alt="">
                                </div>
                                <h3 class="services-details__client-name">Sakib al hasan</h3>
                                <p class="services-details__client-text">
                                    Any Question?
                                    Call Us Now</p>
                                <h3 class="services-details__client-number"><a href="tel:888123456765">647-549-5656<br>
                                    647-241-2255
                                        765</a></h3>
                                <div class="services-details__client-social">
                                    <a href=""><span class="icon-instagram"></span></a>
                                    <a href=""><span class="icon-facebook-f"></span></a>
                                    <a href=""><span class="icon-linkedin-in"></span></a>
                                </div>
                            </div>
                            <div class="services-details__services-box">
                                <h3 class="services-details__services-list-title">Our Services</h3>
                                <ul class="services-details__service-list list-unstyled">
                                    <li class="active">
                                        <div class="icon">
                                            <span class="icon-dabble-arrow"></span>
                                        </div>
                                        <p><a href="{{ route('services') }}">Road Transport</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-dabble-arrow"></span>
                                        </div>
                                        <p><a href="{{ route('air_transport') }}">Air Transport</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-dabble-arrow"></span>
                                        </div>
                                        <p><a href="{{ route('ocean_transport') }}">Ocean Transport</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-dabble-arrow"></span>
                                        </div>
                                        <p><a href="{{ route('train_transport') }}">Train Transport</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="services-details__get-touch">
                                <div class="services-details__get-touch-bg"
                                    style="background-image: url(assets/images/services/services-details-get-touch-bg-img.jpg);">
                                </div>
                                <h3 class="services-details__get-touch-title">GET TOUCH</h3>
                                <p class="services-details__get-touch-sub-title">For fast service</p>
                                <div class="services-details__get-touch-icon">
                                    <span class="icon-call"></span>
                                </div>
                                <h3 class="services-details__get-touch-number"><a href="tel:647-549-5656">+ 647-549-5656</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__right">
                            <h3 class="services-details__title-1">Air Transport Services</h3>
                            <p class="services-details__text-1">Air Transport Services provide the fastest and most efficient method of shipping goods across long distances. At Mepolis Inc., we manage every step of the air freight process, ensuring your cargo arrives quickly and securely at its destination.

                                Air transport is ideal for urgent and time-sensitive shipments, offering unmatched speed compared to other modes of transport. It’s a reliable option for businesses requiring rapid delivery of goods both domestically and internationally.
                                
                                Our air transport services focus on speed and precision, allowing you to plan and track shipments in real time. With a global network of carriers and airports, Mepolis Inc. ensures a seamless, transparent process from takeoff to arrival.</p>
                            <div class="services-details__img-1">
                                <img src="{{ asset('assets/images/services/services-details-img-1.jpg') }}" alt="" width="120px" height="170px">
                            </div>
                            <div class="services-details__service-box">
                                <div class="row">
                                    <!-- Benefits of Service -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="services-details__service-single">
                                            <div class="services-details__service-icon">
                                                <span class="icon-team"></span>
                                            </div>
                                            <h3 class="services-details__service-title"><a href="#">Professional and Dedicated Team</a></h3>
                                            <p class="services-details__service-text">Our team is committed to providing the best logistics solutions for your needs.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Quick Move Logistics -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="services-details__service-single">
                                            <div class="services-details__service-icon">
                                                <span class="icon-lift-truck"></span>
                                            </div>
                                            <h3 class="services-details__service-title"><a href="#">Quick Move Logistics</a></h3>
                                            <p class="services-details__service-text">We ensure smooth and efficient logistics for all your transport needs.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                    <!-- Packages and Web -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="services-details__service-single">
                                            <div class="services-details__service-icon">
                                                <span class="icon-package"></span>
                                            </div>
                                            <h3 class="services-details__service-title"><a href="#">Packages and Web</a></h3>
                                            <p class="services-details__service-text">Seamlessly manage and track your shipments with our online tools.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Page Editors -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="services-details__service-single">
                                            <div class="services-details__service-icon">
                                                <span class="icon-helmet"></span>
                                            </div>
                                            <h3 class="services-details__service-title"><a href="#">Trusted Construction Agency</a></h3>
                                            <p class="services-details__service-text">Partner with us for reliable transport solutions in the construction industry.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                                                    
                                <!--finished-->
                            </div>
                            <div class="benefits-of-service">
                                <h2 class="section-title">Benefits of Service</h2>
                                <p>
                                    Choosing <strong>Mepolis Inc.</strong> for your air transport needs offers several key benefits:
                                </p>
                                <ul class="benefits-list">
                                    <li>
                                        <strong>Speed and Efficiency:</strong> Air transport is the fastest shipping option available, ensuring your goods reach their destination quickly.
                                    </li>
                                    <li>
                                        <strong>Global Reach:</strong> Our services connect you to airports and destinations worldwide, offering unparalleled access to international markets.
                                    </li>
                                    <li>
                                        <strong>Reliability:</strong> With real-time tracking and expert handling, air freight offers a dependable, on-time delivery solution.
                                    </li>
                                    <li>
                                        <strong>Security:</strong> Air transport offers a high level of security for valuable or sensitive shipments, reducing the risk of damage or theft.
                                    </li>
                                </ul>
                                <p>
                                    Let <strong>Mepolis Inc.</strong> streamline your air transport logistics. Our dedicated team is ready to provide swift, reliable, and professional services for your urgent shipping needs.
                                </p>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

{{-- Specify footer type --}}
@section('footer-type', 'footer2')
{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/air_transport.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/air_transport.js') }}"></script>
@endsection
{{-- asset link end --}}