@extends('layouts.app')
@section('title','')
@section('main-content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('index2') }}">Home</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="about-one about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">About Us</span>
                                </div>
                                <h2 class="section-title__title">The Best Transport &
                                     <br>Logistic Company</h2>
                            </div>
                            <p class="about-one__text">Mepolis Inc is a leading transport and logistics company dedicated to delivering excellence in global supply chain solutions. With a commitment to efficiency and reliability, we offer tailored services across freight, warehousing, and distribution. Our advanced technology ensures seamless tracking and real-time updates for every shipment. At Mepolis Inc, customer satisfaction is at the core of our operations, driving innovation in logistics. Trust us to move your world, one delivery at a time.</p>
                            <div class="about-one__list-box">
                                <div class="about-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/about-one-shape-1.png') }}" alt="">
                                </div>
                                <ul class="about-one__list list-unstyled">
                                    <li>
                                        <div class="about-one__icon">
                                            <span class="icon-conveyor-1"></span>
                                        </div>
                                        <h3>Delivering successthe <br> through logistics</h3>
                                    </li>
                                    <li>
                                        <div class="about-one__icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <h3>Logistics expertise for your<br> competitive </h3>
                                    </li>
                                    <li>
                                        <div class="about-one__icon">
                                            <span class="icon-fragile"></span>
                                        </div>
                                        <h3>Streamliningm supply chain<br> processes</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn about-one__btn">Read more<span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right wow fadeInRight" data-wow-delay="300ms">
                            <div class="about-one__img-box">
                                <div class="about-one__img-1">
                                    <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}"  style="width:330px;height: 650px;">
                                </div>
                                <div class="about-one__img-2">
                                    <img src="{{ asset('assets/images/resources/about-one-img-2.jpg') }}"  style="width:330px;height: 550px;">
                                </div>
                                <div class="about-one__trusted-box">
                                    <div class="about-one__trust-icon">
                                        <span class="icon-ionic-ios-people"></span>
                                    </div>
                                    
                                    <div class="about-one__trust-content">
                                        <div class="about-one__trust-count count-box">
                                            <br>
                                            <h3 class="count-text" data-stop="6" data-speed="1500">00</h3>
                                            <span>k</span>
                                            <span class="about-one__trust-plus">+</span>
                                        </div>
                                        <p class="about-one__trust-text">Trusted Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-one">
            <div class="faq-one__bg-color" style="min-height: 100%; background-color: #082d3e; padding: 20px 0;"></div>
            <div class="container">
                <div class="row">
                    <!-- FAQ Section on the Left -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">FAQ</span>
                                </div>
                                <h2 class="section-title__title">Do You Have Any<br> Questions?</h2>
                            </div>
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>How can I pay for your logistics services?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Mepolis Inc. accepts various payment methods, including credit cards, bank transfers, and online payment platforms, offering flexibility and convenience for our clients.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How can I track my shipments?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>You can track your shipments in real-time using our online tracking system. Simply enter your tracking number on our website to get live updates on your shipment's status.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Can I specify a delivery date when ordering?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Yes, you can request a specific delivery date during the booking process. We strive to accommodate your schedule while ensuring timely and efficient delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Any advice for a first-time shipper?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>For first-time shippers, we recommend:</p>
                                            <ul>
                                                <li>Using clear and durable labels.</li>
                                                <li>Preparing accurate documentation to avoid delays.</li>
                                                <li>Taking advantage of our tracking system for peace of mind throughout the process.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Image Section on the Right -->
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('assets/images/resources/counter-two-img-1.jpg') }}" alt="About Company" class="img-fluid" style="border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Testimonials</span>
                    </div>
                    <h2 class="section-title__title">What Our Customers Say</h2>
                </div>
                <div class="testimonial-two__inner">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                        "slidesPerView": 1, 
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next1",
                            "prevEl": ".swiper-button-prev1"
                        },
                        "autoplay": { "delay": 5000 },
                        "breakpoints": {
                            "768": { "slidesPerView": 1 },
                            "992": { "slidesPerView": 1 },
                            "1200": { "slidesPerView": 1 }
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <!--Testimonial Single Start-->
                            <div class="swiper-slide">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <h3 class="testimonial-two__client-name">Helen Wilmore</h3>
                                    <p class="testimonial-two__sub-title">Cargo Transport</p>
                                    <p class="testimonial-two__text">Excellent, timely service! Reliable cargo transport, exceeded our expectations.</p>
                                    <div class="testimonial-two__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}" alt="Customer Helen Wilmore">
                                    </div>
                                    <div class="testimonial-two__ratting">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star last-icon"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Single End-->
                            
                            <!--Testimonial Single Start-->
                            <div class="swiper-slide">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <h3 class="testimonial-two__client-name">Jhon Smith</h3>
                                    <p class="testimonial-two__sub-title">Air Freight Services</p>
                                    <p class="testimonial-two__text">Efficient, fast delivery! Air freight services met all expectations.</p>
                                    <div class="testimonial-two__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}" alt="Customer Jhon Smith">
                                    </div>
                                    <div class="testimonial-two__ratting">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star last-icon"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Single End-->
        
                            <!--Testimonial Single Start-->
                            <div class="swiper-slide">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <h3 class="testimonial-two__client-name">Rebecca Tylor</h3>
                                    <p class="testimonial-two__sub-title">Road Transport</p>
                                    <p class="testimonial-two__text">Reliable, on-time delivery! Road transport exceeded our expectations.</p>
                                    <div class="testimonial-two__client-img">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-3.jpg') }}" alt="Customer Rebecca Tylor">
                                    </div>
                                    <div class="testimonial-two__ratting">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star last-icon"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial Single End-->
                        </div>
                    </div>
                    <div class="testimonial-two__nav">
                        <div class="swiper-button-next1">
                            <i class="icon-angle-right"></i>
                        </div>
                        <div class="swiper-button-prev1">
                            <i class="icon-angle-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/about.js') }}"></script>
@endsection
{{-- asset link end --}}