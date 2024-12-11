@extends('layouts.app')
@section('title','')
@section('main-content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Express Freight Solutions</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('index2') }}">Home</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>Express Freight Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Services Details Start-->
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
                                <p class="services-details__client-sub-title">Brand Abasador</p>
                                <p class="services-details__client-text">Construction is an essential industry that the
                                    building and designing </p>
                                <h3 class="services-details__client-number"><a href="tel:888123456765">(+888) 123 456
                                        765</a></h3>
                                <div class="services-details__client-social">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-facebook-f"></span></a>
                                    <a href="#"><span class="icon-Vector"></span></a>
                                    <a href="#"><span class="icon-linkedin-in"></span></a>
                                </div>
                            </div>
                            <div class="services-details__services-box">
                                <h3 class="services-details__services-list-title">Our Services</h3>
                                <ul class="services-details__service-list list-unstyled">
                                    <li class="active">
                                        <div class="icon">
                                            <span class="icon-dabble-arrow"></span>
                                        </div>
                                        <p><a href="{{ route('express_freight_solutions') }}">Express Freight Solutions</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-dabble-arrow"></span>
                                        </div>
                                        <p><a href="#">Quick Move Logistics</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-dabble-arrow"></span>
                                        </div>
                                        <p><a href="#">Speedy Dispatch</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-dabble-arrow"></span>
                                        </div>
                                        <p><a href="#">Swift Supply Chain</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="#"></span>
                                        </div>
                                        <p><a href="on-point-distribution.html">On Point Distribution</a></p>
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
                                <h3 class="services-details__get-touch-number"><a href="tel:888123456765">(+888) 123 456
                                        765</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__right">
                            <h3 class="services-details__title-1">Cultivate Success with Agriculture</h3>
                            <p class="services-details__text-1">Logistics service involves the planning, implementation,
                                and
                                control of the efficient and effective transportation, storage, and distribution of
                                goods
                                and materials Logistics service involves the planning</p>
                            <div class="services-details__img-1">
                                <img src="{{ asset('assets/images/services/services-details-img-1.jpg') }}" alt="">
                            </div>
                            <div class="services-details__service-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="services-details__service-single">
                                            <div class="services-details__service-icon">
                                                <span class="icon-airplane"></span>
                                            </div>
                                            <h3 class="services-details__service-title"><a href="#">Rapid Delivery
                                                    Services</a></h3>
                                            <p class="services-details__service-text">Construction is an essential
                                                industry that an involves building and designing</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="services-details__service-single">
                                            <div class="services-details__service-icon">
                                                <span class="icon-lift-truck"></span>
                                            </div>
                                            <h3 class="services-details__service-title"><a href="#">Quick Move
                                                    Logistics</a></h3>
                                            <p class="services-details__service-text">Construction is an essential
                                                industry that an involves building and designing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="services-details__text-2">Logistics service involves the planning, implementation,
                                and control of the efficient and effective transportation, storage, and distribution of
                                goods and materials Logistics service involves the planning Logistics servi involves the
                                planning, implementation, and control of the efficient and effective transportation</p>
                            <div class="services-details__faq">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                    <div class="accrodion  active">
                                        <div class="accrodion-count"></div>
                                        <div class="accrodion-title">
                                            <h4>What is a ProActive Transport?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a p looking at its a layout. The point of using
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of a
                                                    letter as opposed to a using 'Content here, content here.It is a
                                                    long
                                                </p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-count"></div>
                                        <div class="accrodion-title">
                                            <h4>How do I set up a Swift Warehousing Solutions?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a p looking at its a layout. The point of using
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of a
                                                    letter as opposed to a using 'Content here, content here.It is a
                                                    long
                                                </p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-count"></div>
                                        <div class="accrodion-title">
                                            <h4>How do I set up a Efficient Freight Solutions?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a p looking at its a layout. The point of using
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of a
                                                    letter as opposed to a using 'Content here, content here.It is a
                                                    long
                                                </p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-details__pagenation-box">
                                    <ul class="list-unstyled blog-details__pagenation">
                                        <li>
                                            <div class="icon">
                                                <a href="#"><span class="icon-arrow-left"></span></a>
                                            </div>
                                            <p>Road Flight</p>
                                        </li>
                                        <li>
                                            <p>Air Flight</p>
                                            <div class="icon">
                                                <a href="#"><span class="icon-arrow-right"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Details End-->

        <!--CTA One Start-->
        <section class="cta-one cta-two">
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__bg-img"
                        style="background-image: url(assets/images/resources/cta-one-bg-img.jpg);"></div>
                    <div class="cta-one__content-box">
                        <div class="cta-one__icon">
                            <span class="icon-call"></span>
                            <div class="cta-one__shape-1">
                                <img src="{{ asset('assets/images/shapes/cta-one-shape-1.png') }}" alt="">
                            </div>
                        </div>
                        <h3 class="cta-one__title">Need any help?
                            <br> contact us!</h3>
                        <div class="cta-one__contact-box">
                            <div class="icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="content">
                                <p>Need help?</p>
                                <h3><a href="tel:3075550133">(307) 555-0133</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

@endsection

{{-- Specify footer type --}}
@section('footer-type', 'footer2')
{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/express_freight_solutions.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/express_freight_solutions.js') }}"></script>
@endsection
{{-- asset link end --}}