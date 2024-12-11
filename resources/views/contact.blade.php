@extends('layouts.app')
@section('title','')
@section('main-content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('index2') }}">Home</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="contact-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Contact Us</span>
                </div>
                <h2 class="section-title__title">Get in Touch With Us</h2>
            </div>
            <div class="contact-one__inner">
                <ul class="contact-one__contact-list list-unstyled">
                    <!-- Phone Details -->
                    <li>
                        <div class="icon">
                            <span class="icon-call"></span>
                        </div>
                        <div class="content">
                            <h3>Call Us Toll Free</h3>
                            <p>Phone number: <a href="tel:6475495656">647-549-5656</a></p>
                        </div>
                    </li>
                    <!-- Address Details -->
                    <li>
                        <div class="icon">
                            <span class="icon-location location-icon"></span>
                        </div>
                        <div class="content">
                            <h3>Canada Office</h3>
                            <p>394 Orenda Rd, Brampton, ON L6T 1G9</p>
                        </div>
                    </li>
                    <!-- Email Details -->
                    <li>
                        <div class="icon">
                            <span class="icon-envolop email-icon"></span>
                        </div>
                        <div class="content">
                            <h3>Email Us</h3>
                            <p><a href="mailto:info@mepolisinc.com">Info@mepolisinc.com</a></p>
                        </div>
                    </li>
                    <!-- Opening Hours -->
                    <li>
                        <div class="icon">
                            <span class="icon-clock"></span>
                        </div>
                        <div class="content">
                            <h3>Opening Time</h3>
                            <p>Mon-Sat: 07:00am to 07:30pm</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <!--Contact One End-->

    <!--Contact Two Start-->
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="contact-two__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Contact</span>
                            </div>
                            <h2 class="section-title__title">Feel Free To Write Us</h2>
                        </div>
                        <form class="contact-form-validated contact-two__form" action="assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="email" name="email" placeholder="E-mail" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="contact-two__input-box">
                                        <input type="text" name="text" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-two__input-box text-message-box">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xl-12">
                                    <div class="contact-two__btn-box">
                                        <button type="submit" class="thm-btn contact-two__btn">Submit
                                            Now<span></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="contact-two__right">
                        <div class="contact-two__img">
                            <img src="{{ asset('assets/images/resources/contact-two-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
        <section class="google-map-one">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.6766549689053!2d-79.70276578414156!3d43.71442397911832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3dce053b8ff5%3A0x9afca434c6e249c3!2s394%20Orenda%20Rd%2C%20Brampton%2C%20ON%20L6T%201G9%2C%20Canada!5e0!3m2!1sen!2sca!4v1698929768123!5m2!1sen!2sca"
            class="google-map__one" allowfullscreen></iframe>
        

        </section>
        <!--Google Map End-->

@endsection

{{-- Specify footer type --}}
@section('footer-type', 'footer2')
{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/contact.js') }}"></script>
@endsection
{{-- asset link end --}}