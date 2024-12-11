@extends('layouts.app')
@section('title','')
@section('main-content')

<div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Our Faq</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('index2') }}">Home</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>Our FAQ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--FAQ One Start-->
        <section class="faq-one faq-page">
            <div class="faq-one__bg-color"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">FAQ</span>
                                </div>
                                <h2 class="section-title__title">Do You Have Any
                                    <br> Question Please?</h2>
                            </div>
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion  active">
                                    <div class="accrodion-title">
                                        <h4>How can I track my shipment?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy
                                                the real ism dablea content of a page when looking at its layout </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>What is the average delivery time?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy
                                                the real ism dablea content of a page when looking at its layout </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Do you offer Smooth Running Supply?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy
                                                the real ism dablea content of a page when looking at its layout </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__right wow fadeInRight" data-wow-delay="300ms">
                            <h3 class="faq-one__from-title">Our One-Stop Car Repair Shop</h3>
                            <form class="contact-form-validated faq-one__form" action="assets/inc/sendemail.php"
                                method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="faq-one__input-box">
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="faq-one__input-box">
                                            <input type="email" name="email" placeholder="Your Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="faq-one__input-box">
                                            <input type="text" name="text" placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="faq-one__input-box">
                                            <div class="select-box">
                                                <select class="selectmenu wide">
                                                    <option selected="selected">Choose a Option</option>
                                                    <option>Type Of Service 01</option>
                                                    <option>Type Of Service 02</option>
                                                    <option>Type Of Service 03</option>
                                                    <option>Type Of Service 04</option>
                                                    <option>Type Of Service 05</option>
                                                    <option>Type Of Service 06</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="faq-one__input-box text-message-box">
                                            <textarea name="message" placeholder="Message here.."></textarea>
                                        </div>
                                    </div>
                                    <div class=" col-xl-12">
                                        <div class="faq-one__btn-box">
                                            <button type="submit" class="thm-btn faq-one__btn">Submit
                                                Now<span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ One End-->

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

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/FAQ.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/FAQ.js') }}"></script>
@endsection
{{-- asset link end --}}