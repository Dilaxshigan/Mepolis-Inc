@extends('layouts.app')
@section('title','')
@section('main-content')

<section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg99.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Train Transport</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('index2') }}">Home</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>Train Transport</li>
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
                                    <img src="{{ asset('assets/images/services/page-header-bg3.jpg') }}" alt="">
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
                            <h3 class="services-details__title-1">
                                Train Transport Services</h3>
                            <p class="services-details__text-1"></p>Rail Transport Services offer an efficient and environmentally friendly option for shipping goods overland. At Mepolis Inc., we handle the entire rail transport process, ensuring your cargo is delivered safely, efficiently, and on schedule.

                            Rail transport is ideal for bulk shipments over long distances, offering a cost-effective alternative to road and air transport. It’s a reliable and sustainable choice for both domestic and international shipping needs.
                            
                            Our rail transport services focus on efficiency and flexibility, allowing you to plan and track shipments with ease. With a well-established network and strong partnerships with carriers, Mepolis Inc. ensures a smooth, transparent journey from origin to destination.</p>
                            <div class="services-details__img-1">
                                <img src="{{ asset('assets/images/services/services-details-img-651.jpg') }}" alt="" width="120px" height="170px">
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
                                    Choosing <strong>Mepolis Inc.</strong> for your Train transport needs offers several key benefits:
                                </p>
                                <ul class="benefits-list">
                                    <li>
                                        <strong>Cost-Effectiveness:</strong> Rail transport is a highly economical solution for large shipments, particularly for long-distance deliveries.
                                    </li>
                                    <li>
                                        <strong>Global and Regional Reach:</strong> Our services provide access to a vast network of rail routes, both locally and internationally, expanding your shipping capabilities.
                                    </li>
                                    <li>
                                        <strong>Reliable Timelines:</strong> Our expert team ensures effective schedule management to minimize delays, offering dependable transit times.
                                    </li>
                                    <li>
                                        <strong>Eco-Friendly:</strong> Rail transport is one of the most sustainable options, producing fewer emissions than other modes of transport, making it a green choice for your business.
                                    </li>
                                </ul>
                                <p>
                                    Let <strong>Mepolis Inc.</strong> streamline your rail transport logistics. Our experienced team is ready to provide safe, reliable, and cost-effective solutions for your shipping needs.
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
<link rel="stylesheet" href="{{ asset('assets/css/train_transport.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/train_transport.js') }}"></script>
@endsection
{{-- asset link end --}}