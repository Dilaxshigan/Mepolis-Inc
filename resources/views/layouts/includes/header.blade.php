<div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->




    <div class="page-wrapper">
        <header class="main-header-two">
            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="container">
                        <div class="main-menu-two__wrapper-inner">
                            <div class="main-menu-two__left">
                                <div class="main-menu-two__logo">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/images/resources/logo-1.png') }}" alt="" width="80" height="70">
                                      </a>
                                </div>
                                <div class="main-menu-two__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="{{ route('index2') }}">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('services') }}">Services</a>
                                            <ul>
                                                <li><a href="{{ route('services') }}">Road Transport</a></li>
                                                <li><a href="{{ route('air_transport') }}">Air Transport</a></li>
                                                <li><a href="{{ route('ocean_transport') }}">Ocean Transport</a></li>
                                                <li><a href="{{ route('train_transport') }}">Train Transport</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">About</a>
                                            <ul>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                                                <li><a href="{{ route('terms') }}">term & Condition</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('request') }}">Request A Quote</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->