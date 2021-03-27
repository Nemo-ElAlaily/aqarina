<!-- Header Container
    ================================================== -->
<header id="header-container">
    <!-- Topbar -->
    <div class="header-top">
        <div class="container">
            <div class="top-info hidden-sm-down">
                <div class="call-header">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> (234) 0200 17813</p>
                </div>
                <div class="address-header">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> 95 South Park Ave, USA</p>
                </div>
                <div class="mail-header">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> info@findhouses.com</p>
                </div>
            </div>
            <div class="top-social hidden-sm-down">
                <div class="login-wrap">
                    <ul class="d-flex">
                        <li><a href="login.html"><i class="fa fa-user"></i> Login</a></li>
                        <li><a href="register.html"><i class="fa fa-sign-in"></i> Register</a></li>
                    </ul>
                </div>
                <div class="social-icons-header">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang"
                            data-toggle="dropdown" aria-haspopup="true">
                        <img src="{{ asset('public/front/images/' . LaravelLocalization::getCurrentLocale() . '.png' ) }}" alt="lang" /> {{ LaravelLocalization::getCurrentLocaleNative() }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <img src="{{ asset('public/front/images/' . $localeCode . '.png' ) }}" alt="{{ $properties['native'] }}" />
                                    {{ $properties['native'] }}
                                </a>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar / End -->
    <!-- Header -->
    <div id="header">
        <div class="container">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="index.html"><img src="{{ asset('public/front') }}/images/logo.svg" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a class="current" href="{{ route('front.index') }}">Home</a></li>
                        <li><a href="{{ route('front.properties.index') }}">Properties</a></li>
                        <li><a href="{{ route('front.agencies.index') }}">Agencies</a></li>
                        <li><a href="blogs.html">Blog</a></li>
                        <li><a href="contact-us.html">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side hidden-lg-down">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="submit-property.html" class="button border">Submit Property</a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<!-- Header Container / End -->
