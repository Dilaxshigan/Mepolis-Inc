@extends('layouts.app')
@section('title','')
@section('main-content')

        <!--Banner One Start-->
        <section class="banner-one">
            <div class="banner-one__shape-1 float-bob-y" style="background-image: url(assets/images/shapes/banner-one-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="banner-one__left wow fadeInLeft" data-wow-delay="300ms">
                            <div class="banner-one__sub-title-box">
                                <div class="banner-one__sub-title-icon">
                                    <img src="{{ asset('assets/images/icon/banner-one-sub-title-icon.png') }}" alt="">
                                </div>
                                <h5 class="banner-one__sub-title">Mepolis Inc</h5>
                            </div>
                            <h4 class="banner-one__title">Fast And Safety<br>  World Wide Service <span>
                                <h5 style="color:aliceblue"> Efficient & Reliable <br>
                                Global Logistics Solutions<br>
                                Mepolis Inc. delivers logistics solutions that prioritize<br> safety, reliability, and efficiency to ensure your
                                <br> business needs are met worldwide.</h5></span></h4>
                            <div class="banner-one__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn banner-one__btn">Calculate Package<span></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Add the right side image here -->
                    <div class="col-xl-5">
                        <div class="banner-one__right">
                            <img src="{{ asset('assets/images/resources/banner-one-img-2.jpg') }}" alt="Right Banner Image" class="img-fluid rounded-shadow">
                        </div>
                    </div>
                    
                </div>
            </div>    
        </section>
        
        
        <!--Banner One End-->
      <!--Counter Two Start-->
      <section class="about-company">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Image Section -->
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('assets/images/resources/counter-two-img-1.jpg') }}" alt="About Company" class="img-fluid">
                        </div>
                    </div>
                    <!-- Text and Counter Section -->
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="section-title">Digital & Trusted Transport Logistic Company</h2>
                            <p class="about-text">
                                Mepolis Inc. is dedicated to providing seamless, technology-driven logistics solutions that meet 
                                the evolving demands of the modern business world. With a focus on efficiency, safety, and 
                                reliability, we ensure your goods reach their destination on time and in perfect condition. Our 
                                innovative approach combines digital expertise with exceptional service, making us a trusted 
                                partner for all your transportation needs.
                            </p>
                            <ul class="about-list">
                                <li><span class="icon-check"></span> Dynamic Dispatching and Scheduling</li>
                                <li><span class="icon-check"></span> Vehicle Health Monitoring</li>
                            </ul>
                            <a href="#" class="btn btn-orange">Read More</a>
                        </div>
                        <br>
                        <!-- Counter Section -->
                        <ul class="counter-two__count-list list-unstyled">
                            <!-- Counter Item 1 -->
                            <li>
                                <div class="counter-two__count-list-single">
                                    <div class="counter-two__icon-and-count">
                                        <div class="counter-two__count count-box">
                                            <h3 class="count-text" data-stop="100" data-speed="1500">00</h3>
                                            <span>+</span>
                                        </div>
                                        <div class="counter-two__icon">
                                            <span class="icon-fragile"></span>
                                        </div>
                                    </div>
                                    <p class="counter-two__count-text">Happy Customers</p>
                                </div>
                            </li>
                            <!-- Counter Item 2 -->
                            <li>
                                <div class="counter-two__count-list-single">
                                    <div class="counter-two__icon-and-count">
                                        <div class="counter-two__count count-box">
                                            <h3 class="count-text" data-stop="20" data-speed="1500">00</h3>
                                            <span>k</span><span>+</span>
                                        </div>
                                        <div class="counter-two__icon">
                                            <span class="icon-conveyor-1"></span>
                                        </div>
                                    </div>
                                    <p class="counter-two__count-text">Shipments Completed</p>
                                </div>
                            </li>
                            <!-- Counter Item 3 -->
                            <li>
                                <div class="counter-two__count-list-single">
                                    <div class="counter-two__icon-and-count">
                                        <div class="counter-two__count count-box">
                                            <h3 class="count-text" data-stop="200" data-speed="1500">00</h3>
                                            <span>+</span>
                                        </div>
                                        <div class="counter-two__icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                    </div>
                                    <p class="counter-two__count-text">Years of Experience</p>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>

        <!--Services Two Start-->
        <section class="services-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">LATEST SERVICE</span>
                    </div>
                    <h2 class="section-title__title">Your supply chain partner<br>for success</h2>
                </div>
                <div class="row">
                    <!-- Air Freight Service -->
                    <div class="col-xl-3 col-lg-3 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <i class="fas fa-plane service-icon"></i> <!-- Air Freight Icon -->
                            </div>
                            <h3 class="services-two__title"><a href="{{ route('air_transport') }}">Air Freight</a></h3>
                            <p class="services-two__text">Reliable air cargo, delivered swiftly across the globe with our advanced air freight solutions.</p>
                        </div>
                    </div>
                    <!-- Ocean Freight Service -->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <i class="fas fa-ship service-icon"></i> <!-- Ocean Freight Icon -->
                            </div>
                            <h3 class="services-two__title"><a href="{{ route('ocean_transport') }}">Ocean Freight</a></h3>
                            <p class="services-two__text">Cost-effective, worldwide ocean delivery for large shipments, ensuring timely arrival.</p>
                        </div>
                    </div>
                    <!-- Rail Freight Service -->
                    <div class="col-xl-3 col-lg-3 wow fadeInRight" data-wow-delay="300ms">
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <i class="fas fa-train service-icon"></i> <!-- Rail Freight Icon -->
                            </div>
                            <h3 class="services-two__title"><a href="{{ route('train_transport') }}">Rail Container</a></h3>
                            <p class="services-two__text">Reliable containerized rail shipping for long-distance and heavy cargo transport.</p>
                        </div>
                    </div>
                    <!-- Road Transport Service -->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <i class="fas fa-truck service-icon"></i> <!-- Road Transport Icon -->
                            </div>
                            <h3 class="services-two__title"><a href="{{ route('services') }}">Road Transport</a></h3>
                            <p class="services-two__text">Efficient, reliable road freight across regions ensuring timely delivery of goods.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Counter Two End-->
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

        <section class="faq-one">
            <div class="faq-one__bg-color" style="min-height: 100%; background-color: #525b61; padding: 20px 0;"></div>
            <div class="container">
                <div class="row">
                    <!-- FAQ Section on the Left -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__left">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">Do You Have Any Questions?</h2>
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
                                        <img src="{{ asset('assets/images/testimonial/testimonial-3.jpg') }}" alt="Customer Jhon Smith">
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
        
        
</section>
<!-- FAQ Section End -->

<!-- Blog Section Start -->

<!-- Blog Section End -->

        <!--Blog Two End-->

        <!--Google Map Start-->
        <section class="google-map-one">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.6766549689053!2d-79.70276578414156!3d43.71442397911832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3dce053b8ff5%3A0x9afca434c6e249c3!2s394%20Orenda%20Rd%2C%20Brampton%2C%20ON%20L6T%201G9%2C%20Canada!5e0!3m2!1sen!2sca!4v1698929768123!5m2!1sen!2sca"
            class="google-map__one" allowfullscreen></iframe>
        

        </section>
        <!--Google Map End-->
@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/index2.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/index2.js') }}"></script>
@endsection
{{-- asset link end --}}