@extends('layouts.front.app')

@section('style')
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/leaflet.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/leaflet.markercluster.default.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{ asset('public/front') }}/revolution//css/settings.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/revolution//css/layers.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/revolution//css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/menu.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('public/front') }}/css/styles.css">
    <link rel="stylesheet" id="color" href="{{ asset('public/front') }}/css/default.css">
@stop

@section('content')

    <!-- STAR HEADER SEARCH -->
    <section id="hero-area" class="parallax-searchs home17 overlay" data-stellar-background-ratio="0.5">
        <div class="hero-main">
            <div class="container">
                <div class="banner-inner-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-inner">
                                <h1 class="title text-center">Find Your Dream Home</h1>
                                <h5 class="sub-title text-center">We Have Over Million Properties For You</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="banner-search-wrap">
                                <ul class="nav nav-tabs rld-banner-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Buy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs_1">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="rld-single-input left-icon">
                                                        <input type="text" placeholder="Entry Landmark Location">
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-6 col-md-6">
                                                    <div class="rld-single-select">
                                                        <select class="select single-select">
                                                            <option value="1">Property Type</option>
                                                            <option value="2">Family House</option>
                                                            <option value="3">Apartment</option>
                                                            <option value="3">Condo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-4 col-md-4">
                                                    <div class="rld-single-select">
                                                        <select class="select single-select">
                                                            <option value="1">Any Bedrooms</option>
                                                            <option value="2">Room 1</option>
                                                            <option value="3">Room 2</option>
                                                            <option value="3">Room 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-4 col-md-4">
                                                    <div class="rld-single-select">
                                                        <select class="select single-select">
                                                            <option value="1">Any Price</option>
                                                            <option value="2">Price 1</option>
                                                            <option value="3">Price 2</option>
                                                            <option value="3">Price 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-4 col-md-4">
                                                    <a class="btn btn-yellow" href="#">SEARCH NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs_2">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-6">
                                                    <div class="rld-single-input left-icon">
                                                        <input type="text" placeholder="Entry Landmark Location">
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-6 col-md-6">
                                                    <div class="rld-single-select">
                                                        <select class="select single-select">
                                                            <option value="1">All Properties</option>
                                                            <option value="2">Properties 1</option>
                                                            <option value="3">Properties 2</option>
                                                            <option value="3">Properties 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-4 col-md-4">
                                                    <div class="rld-single-select">
                                                        <select class="select single-select">
                                                            <option value="1">Room</option>
                                                            <option value="2">Room 1</option>
                                                            <option value="3">Room 2</option>
                                                            <option value="3">Room 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-4 col-md-4">
                                                    <div class="rld-single-select">
                                                        <select class="select single-select">
                                                            <option value="1">Any Price</option>
                                                            <option value="2">Price 1</option>
                                                            <option value="3">Price 2</option>
                                                            <option value="3">Price 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-4 col-md-4">
                                                    <a class="btn btn-yellow" href="#">SEARCH NOW</a>
                                                </div>
                                            </div>
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
    <!-- END HEADER SEARCH -->

    <!-- START SECTION PROPERTIES FOR SALE -->
    <section class="recently portfolio bg-white-1 home18">
        <div class="container">
            <div class="sec-title">
                <h2><span>Properties </span>For Sale</h2>
                <p>Find your dream home from our Sale added properties.</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-1.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-2.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people landscapes no-pb pbp-3">
                            <div class="project-single no-mb mbp-3">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-3.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single no-mb">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-4.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single no-mb">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-5.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people landscapes no-pb pbp-3">
                            <div class="project-single no-mb">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-6.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-all">
            <a href="properties.html" class="btn btn-outline-light">View All</a>
        </div>
    </section>
    <!-- END SECTION PROPERTIES FOR SALE -->

    <!-- START SECTION PROPERTIES FOR RENT -->
    <section class="recently portfolio home18">
        <div class="container">
            <div class="sec-title">
                <h2><span>Properties </span>For Rent</h2>
                <p>Find your dream home from our Rent added properties.</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-1.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-2.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people landscapes no-pb pbp-3">
                            <div class="project-single no-mb mbp-3">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-3.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single no-mb">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-4.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single no-mb">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-5.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people landscapes no-pb pbp-3">
                            <div class="project-single no-mb">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="single-property.html">View Property</a><span class="category">Real Estate</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="#" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">Family Home</div>
                                            <img src="{{ asset('public/front') }}/images/feature-properties/fp-6.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="#">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="#">$ 230,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <a href="#">
                                            <i class="fa fa-user"></i> Jhon Doe
                                        </a>
                                        <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-all">
            <a href="properties.html" class="btn btn-outline-light">View All</a>
        </div>
    </section>
    <!-- END SECTION PROPERTIES FOR RENT -->

    <!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white-1 home18">
        <div class="container">
            <div class="sec-title">
                <h2><span>Why </span>Choose Us</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-4 col-md-6 col-xs-12 serv">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="{{ asset('public/front') }}/images/icons/icon-1.svg" alt="">
                            <h3>Wide Renge Of Properties</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{ asset('public/front') }}/images/icons/icon-2.svg" alt="">
                            <h3>Trusted by thousands</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="{{ asset('public/front') }}/images/icons/icon-3.svg" alt="">
                            <h3>24/7 support</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- END SECTION WHY CHOOSE US -->

    <!-- START SECTION TOP LOCATIONS -->
    <section class="visited-cities bg-white-2 home18">
        <div class="container">
            <div class="sec-title">
                <h2><span>Most Popular </span>Places</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-lg-6 col-md-6 pr-1">
                    <!-- Image Box -->
                    <a href="listing-details.html" class="img-box hover-effect">
                        <img src="{{ asset('public/front') }}/images/popular-places/7.jpg" class="img-responsive" alt="">
                        <!-- Badge -->
                        <div class="img-box-content visible">
                            <h4 class="mb-2">New York</h4>
                            <span>203 Properties</span>
                            <ul class="starts text-center mt-2">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 pr-1">
                    <!-- Image Box -->
                    <a href="listing-details.html" class="img-box hover-effect">
                        <img src="{{ asset('public/front') }}/images/popular-places/8.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4 class="mb-2">Los Angeles</h4>
                            <span>307 Properties</span>
                            <ul class="starts text-center mt-2">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 pr">
                    <!-- Image Box -->
                    <a href="listing-details.html" class="img-box hover-effect">
                        <img src="{{ asset('public/front') }}/images/popular-places/9.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4 class="mb-2">Miami </h4>
                            <span>409 Properties</span>
                            <ul class="starts text-center mt-2">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 pr-1">
                    <!-- Image Box -->
                    <a href="listing-details.html" class="img-box no-mb mi x3 hover-effect">
                        <img src="{{ asset('public/front') }}/images/popular-places/10.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4 class="mb-2">Chicago</h4>
                            <span>507 Properties</span>
                            <ul class="starts text-center mt-2">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 pr-1">
                    <!-- Image Box -->
                    <a href="listing-details.html" class="img-box no-mb mi x3 hover-effect">
                        <img src="{{ asset('public/front') }}/images/popular-places/11.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4 class="mb-2">San Francisco</h4>
                            <span>99 Properties</span>
                            <ul class="starts text-center mt-2">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 pr">
                    <!-- Image Box -->
                    <a href="listing-details.html" class="img-box san no-mb x3 hover-effect">
                        <img src="{{ asset('public/front') }}/images/popular-places/5.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4 class="mb-2">Detroit </h4>
                            <span>308 Properties</span>
                            <ul class="starts text-center mt-2">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half"></i>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TOP LOCATIONS -->

    <!-- START SECTION TESTIMONIALS -->
    <section class="h18 testimonials">
        <div class="container">
            <div class="sec-title">
                <h2><span>People</span> Says</h2>
                <p>There are many variations of lorem of Lorem Ipsum available for use a sit amet, consectetur
                    debits adipisicing lacus.</p>
            </div>
            <div class="owl-carousel style1">
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim
                            varius enim, tellus tincidunt tellus est sed</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('public/front') }}/images/testimonials/ts-1.jpg" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Lisa Smith</h2>
                            <span>New York City</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim
                            varius enim, tellus tincidunt tellus est sed</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('public/front') }}/images/testimonials/ts-2.jpg" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Jhon Morris</h2>
                            <span>Los Angeles</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim
                            varius enim, tellus tincidunt tellus est sed</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('public/front') }}/images/testimonials/ts-3.jpg" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Mary Deshaw</h2>
                            <span>Chicago</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim
                            varius enim, tellus tincidunt tellus est sed</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('public/front') }}/images/testimonials/ts-4.jpg" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Gary Steven</h2>
                            <span>Philadelphia</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim
                            varius enim, tellus tincidunt tellus est sed</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('public/front') }}/images/testimonials/ts-5.jpg" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Cristy Mayer</h2>
                            <span>San Francisco</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim
                            varius enim, tellus tincidunt tellus est sed</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('public/front') }}/images/testimonials/ts-6.jpg" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Ichiro Tasaka</h2>
                            <span>Houston</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIALS -->

    <!-- START SECTION BLOG -->
    <section class="blog-section bg-white-2 home18">
        <div class="container">
            <div class="sec-title">
                <h2><span>Tips & </span>Articles</h2>
                <p>Grow your appraisal and real estate career with tips.</p>
            </div>
            <div class="news-wrap">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="{{ asset('public/front') }}/images/blog/b-1.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>Explore The World</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">April 11, 2020 &nbsp;/</span>
                                    <ul class="action-list pl-0">
                                        <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span>
                                        </li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                        consectetur.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                        <p>By, Karl Smith</p>
                                        <img src="{{ asset('public/front') }}/images/testimonials/ts-6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="{{ asset('public/front') }}/images/blog/b-2.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>Find Good Places</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">May 20, 2020 &nbsp;/</span>
                                    <ul class="action-list pl-0">
                                        <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span>
                                        </li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                        consectetur.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                        <p>By, Lis Jhonson</p>
                                        <img src="{{ asset('public/front') }}/images/testimonials/ts-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item no-mb">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="{{ asset('public/front') }}/images/blog/b-3.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>All Places In Town</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">Jun 30, 2020 &nbsp;/</span>
                                    <ul class="action-list pl-0">
                                        <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span>
                                        </li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                        consectetur.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                        <p>By, Ted Willians</p>
                                        <img src="{{ asset('public/front') }}/images/testimonials/ts-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->

    <!-- STAR SECTION PARTNERS -->
    <div class="partners bg-white-1">
        <div class="container">
            <div class="owl-carousel style2">
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/11.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/12.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/13.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/14.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/15.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/16.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/17.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/11.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/12.jpg" alt=""></div>
                <div class="owl-item"><img src="{{ asset('public/front') }}/images/partners/13.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <!-- END SECTION PARTNERS -->

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

@endsection


@section('script')
    <!-- ARCHIVES JS -->
    <script src="{{ asset('public/front') }}/js/jquery.min.js"></script>
    <script src="{{ asset('public/front') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('public/front') }}/js/tether.min.js"></script>
    <script src="{{ asset('public/front') }}/js/moment.js"></script>
    <script src="{{ asset('public/front') }}/js/transition.min.js"></script>
    <script src="{{ asset('public/front') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/front') }}/js/mmenu.min.js"></script>
    <script src="{{ asset('public/front') }}/js/mmenu.js"></script>
    <script src="{{ asset('public/front') }}/js/slick.min.js"></script>
    <script src="{{ asset('public/front') }}/js/slick3.js"></script>
    <script src="{{ asset('public/front') }}/js/fitvids.js"></script>
    <script src="{{ asset('public/front') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('public/front') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('public/front') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('public/front') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('public/front') }}/js/smooth-scroll.min.js"></script>
    <script src="{{ asset('public/front') }}/js/lightcase.js"></script>
    <script src="{{ asset('public/front') }}/js/owl.carousel.js"></script>
    <script src="{{ asset('public/front') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('public/front') }}/js/ajaxchimp.min.js"></script>
    <script src="{{ asset('public/front') }}/js/newsletter.js"></script>
    <script src="{{ asset('public/front') }}/js/jquery.form.js"></script>
    <script src="{{ asset('public/front') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('public/front') }}/js/forms-2.js"></script>
    <script src="{{ asset('public/front') }}/js/leaflet.js"></script>
    <script src="{{ asset('public/front') }}/js/leaflet-gesture-handling.min.js"></script>
    <script src="{{ asset('public/front') }}/js/leaflet-providers.js"></script>
    <script src="{{ asset('public/front') }}/js/leaflet.markercluster.js"></script>
    <script src="{{ asset('public/front') }}/js/map4.js"></script>
    <script src="{{ asset('public/front') }}/js/color-switcher.js"></script>

    <!-- Slider Revolution scripts -->
    <script src="{{ asset('public/front') }}/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('public/front') }}/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- MAIN JS -->
    <script src="{{ asset('public/front') }}/js/script.js"></script>
@stop
