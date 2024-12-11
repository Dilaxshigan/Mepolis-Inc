<footer class="site-footer-two">
            <div class="site-footer-two__shape-1">
                <img src="{{ asset('assets/images/resources/logo-1.png') }}" alt="" width="50" height="30">
            </div>
            <div class="container">
                <!-- Top Section -->
                <div class="site-footer-two__top">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="site-footer-two__top-left">
                                <h3 class="site-footer-two__top-title">LOOKING FOR THE <span>Best Logistics</span>Transport Services?</h3>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="site-footer-two__top-right">
                                <form class="footer-widget-two__newsletter-form mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                                    <div class="footer-widget-two__newsletter-form-input-box">
                                        <input type="email" placeholder="Enter Your Email" name="EMAIL">
                                        <button type="submit" class="footer-widget-two__newsletter-btn thm-btn">
                                            Subscribe Now<span></span>
                                        </button>
                                    </div>
                                </form>
                                <div class="mc-form__response"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Middle Section -->
                <div class="site-footer-two__middle">
                    <div class="row">
                        <!-- About Section -->
                        <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget-two__column footer-widget-two__about">
                                <div class="footer-widget-two__logo">
                                    <a href="{{ route('index2') }}">
                                        <img src="assets/images/resources/logo-1.png" alt="" width="100" height="130">
                                    </a>
                                </div>
                                <p class="footer-widget-two__text">Mepolis Inc. provides reliable, efficient logistics for timely, safe deliveries.</p>
                                <div class="footer-widget-two__social">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-facebook-f"></span></a>
                                    <a href="#"><span class="icon-linkedin-in"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Section -->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget-two__services">
                                <div class="footer-widget-two__title-box">
                                    <h3 class="footer-widget-two__title">Quick Links</h3>
                                </div>
                                <ul class="footer-widget-two__services-list list-unstyled">
                                    <li><a href="{{ route('about') }}l"><span class="icon-angle-left"></span>About</a></li>
                                    <li><a href="{{ route('terms') }}"><span class="icon-angle-left"></span>Trams & Condition</a></li>
                                    <li><a href="{{ route('privacy_policy') }}"><span class="icon-angle-left"></span>Privacy Policy</a></li>
                                    <li><a href="{{ route('services') }}"><span class="icon-angle-left"></span>Our Services</a></li>
                                    <li><a href="{{ route('services') }}"><span class="icon-angle-left"></span>Road Transport</a></li>
                                    <li><a href="{{ route('air_transport') }}"><span class="icon-angle-left"></span>Air Freight</a></li>
                                    <li><a href="{{ route('train_transport') }}"><span class="icon-angle-left"></span>Railway Freight</a></li>
                                    <li><a href="{{ route('ocean_transport') }}"><span class="icon-angle-left"></span>Ocean Freight</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contact Section -->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget-two__column footer-widget-two__contact">
                                <div class="footer-widget-two__title-box">
                                    <h3 class="footer-widget-two__title">WE ARE AVAILABLE</h3>
                                </div>
                                <p>Mon-Sat: 07:00am to 07:00pm</p>
                                <div class="footer-widget-two__title-box">
                                    <h3 class="footer-widget-two__title">Contact</h3>
                                </div>
                                <ul class="footer-widget-two__contact-list list-unstyled">
                                    <li>
                                        <div class="icon"><span class="icon-envolop email-icon"></span></div>
                                        <p><a href="mailto:debra.holt@example.com">info@mepolisinc.com</a></p>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="icon-location location-icon"></span></div>
                                        <p>394 Orenda Rd, Brampton, ON L6T 1G9</p>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="icon-call call-icon"></span></div>
                                        <p>647-549-5656 <br>
                                          647-241-2255</p>
                                    </li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Bottom Section -->
                <div class="site-footer-two__bottom">
                    <div class="container">
                        <div class="site-footer-two__bottom-inner">
                            <p class="site-footer-two__bottom-text">© 2024 Translo, All Rights Reserved</p>
                            <p>Web Developed by Apexx private limited</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ route('index2') }}" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="150"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@onpoint.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-arrow-up"></i></a>