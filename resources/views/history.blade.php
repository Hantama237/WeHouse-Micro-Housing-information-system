@extends('master')
@section('content')



    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- PRELOADER -->
        <div class="preloader"></div>
        <!-- END / PRELOADER -->

        
        <!-- HEADER PAGE -->
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- END / LOGO -->
                    
                    <!-- NAVIGATION -->
                    <nav class="navigation awe-navigation" data-responsive="1200">
                        <ul class="menu-list">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index2.html">Home 2</a></li>
                                    <li><a href="index3.html">Menu hamburger</a></li>
                                    <li><a href="index-dark.html">Home 1 (Dark)</a></li>
                                    <li><a href="index2-dark.html">Home 2 (Dark)</a></li>
                                    <li><a href="index3-dark.html">Menu hamburger (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="destinations-list.html">Destinations</a>
                                <ul class="sub-menu">
                                    <li><a href="destinations-list.html">List</a></li>
                                    <li><a href="destinations-grid.html">Grid</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="destinations-trip.html">Detail</a>
                                        <ul class="sub-menu">
                                            <li><a href="destinations-trip.html">Trips in destination</a></li>
                                            <li><a href="destinations-hotel.html">Hotels in destination</a></li>
                                            <li><a href="destinations-attraction.html">Attraction in destination</a></li>
                                            <li><a href="destinations-flight.html">Flights in destination</a></li>
                                            <li><a href="destinations-train.html">Train in destination</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="destinations-list-dark.html">List (Dark)</a></li>
                                    <li><a href="destinations-grid-dark.html">Grid (Dark)</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="destinations-trip.html">Detail (Dark)</a>
                                        <ul class="sub-menu">
                                            <li><a href="destinations-trip-dark.html">Trips in destination</a></li>
                                            <li><a href="destinations-hotel-dark.html">Hotels in destination</a></li>
                                            <li><a href="destinations-attraction-dark.html">Attraction in destination</a></li>
                                            <li><a href="destinations-flight-dark.html">Flights in destination</a></li>
                                            <li><a href="destinations-train-dark.html">Train in destination</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="trip.html">Trips</a>
                                <ul class="sub-menu">
                                    <li><a href="trip.html">Trips</a></li>
                                    <li><a href="trip-detail.html">Trips Detail</a></li>
                                    <li><a href="trip-dark.html">Trips (Dark)</a></li>
                                    <li><a href="trip-detail-dark.html">Trips Detail (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="hotel.html">Hotel</a>
                                <ul class="sub-menu">
                                    <li><a href="hotel.html">Hotel</a></li>
                                    <li><a href="hotel-detail.html">Hotel Detail</a></li>
                                    <li><a href="hotel-dark.html">Hotel (Dark)</a></li>
                                    <li><a href="hotel-detail-dark.html">Hotel Detail (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children current-menu-parent">
                                <a href="flight.html">Flight</a>
                                <ul class="sub-menu">
                                    <li class="current-menu-item"><a href="flight.html">Flight</a></li>
                                    <li><a href="flight-detail.html">Flight Detail</a></li>
                                    <li><a href="flight-dark.html">Flight (Dark)</a></li>
                                    <li><a href="flight-detail-dark.html">Flight Detail (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="train.html">Train</a>
                                <ul class="sub-menu">
                                    <li><a href="train.html">Train</a></li>
                                    <li><a href="train-detail.html">Train Detail</a></li>
                                    <li><a href="train-dark.html">Train (Dark)</a></li>
                                    <li><a href="train-detail-dark.html">Train Detail (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="attraction.html">Attraction</a>
                                <ul class="sub-menu">
                                    <li><a href="attraction.html">Attraction</a></li>
                                    <li><a href="attraction-detail.html">Attraction Detail</a></li>
                                    <li><a href="attraction-dark.html">Attraction (Dark)</a></li>
                                    <li><a href="attraction-detail-dark.html">Attraction Detail (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                            <li><a href="single-post-dark.html">Single Post (Dark)</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="login.html">Log In</a>
                                        <ul class="sub-menu">
                                            <li><a href="login.html">Log In</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="login.html">Log In (Dark)</a></li>
                                            <li><a href="register.html">Register (Dark)</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="checkout-yourcart.html">Checkout</a>
                                        <ul class="sub-menu">
                                            <li><a href="checkout-yourcart.html">Your cart</a></li>
                                            <li><a href="checkout-customer.html">Customer</a></li>
                                            <li><a href="checkout-complete.html">Complete</a></li>
                                            <li><a href="checkout-yourcart-dark.html">Your cart (Dark)</a></li>
                                            <li><a href="checkout-customer-dark.html">Customer (Dark)</a></li>
                                            <li><a href="checkout-complete-dark.html">Complete (Dark)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shortcode.html">Shortcode</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html">Contact</a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">Light</a></li>
                                    <li><a href="contact-dark.html">Dark</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- END / NAVIGATION -->
                    
                    <!-- SEARCH BOX -->
                    <div class="search-box">
                        <span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>
                        <form class="form-search">
                            <div class="form-item">
                                <input type="text" value="Search &amp; hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END / SEARCH BOX -->


                    <!-- TOGGLE MENU RESPONSIVE -->
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                    <!-- END / TOGGLE MENU RESPONSIVE -->
                </div>
            </div>
        </header>
        <!-- END / HEADER PAGE -->

        <!-- HEADING PAGE -->
        <section class="awe-parallax category-heading-section-demo">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="category-heading-content category-heading-content__2 text-uppercase">
                    <!-- BREADCRUMB -->
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><span>Flight</span></li>
                        </ul>
                    </div>
                    <!-- BREADCRUMB -->
                    <div class="find">
                        <h2 class="text-center">Find Your Flight</h2>
                        <form>
                            <div class="form-group">
                                <div class="form-elements">
                                    <label>From</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>To</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-marker-1"></i>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Depart on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>
                                <div class="form-elements">
                                    <label>Return on</label>
                                    <div class="form-item">
                                        <i class="awe-icon awe-icon-calendar"></i>
                                        <input type="text" class="awe-calendar" value="Date">
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <input type="submit" value="Find My Flight">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / HEADING PAGE -->

        
        <section class="filter-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-top">
                            <select class="awe-select">
                                <option>Best Match</option>
                                <option>Best Rate</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-push-3">
                        <div class="filter-page__content">
                            <div class="filter-item-wrapper">
                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Lufthansa : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">15 MAr</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Qatar : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">15 MAr</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Cathay Pacific : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Qatar : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">15 MAr</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Cathay Pacific : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">15 MAr</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            </div>


                            <!-- PAGINATION -->
                            <div class="page__pagination">
                                <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
                                <span class="current">1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <!-- END / PAGINATION -->
                        </div>
                    </div>
                    <div class="col-md-3 col-md-pull-9">
                        <div class="page-sidebar">
                            <div class="sidebar-title">
                                <h2>Flight</h2>
                                <div class="clear-filter">
                                    <a href="#">Clear all</a>
                                </div>
                            </div>
                            <!-- WIDGET -->
                            <div class="widget widget_has_radio_checkbox_text">
                                <h3>Flight Type</h3>
                                <div class="widget_content">
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Oneway
                                    </label>
                                    <label>
                                        <input type="checkbox">
                                        <i class="awe-icon awe-icon-check"></i>
                                        Turn-around
                                    </label>
                                    <label class="from">
                                        From
                                        <span class="form-item db">
                                            <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="text">
                                        </span>
                                    </label>
                                    <label class="to">
                                        To
                                        <span class="form-item db">
                                            <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="text">
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!-- END / WIDGET -->

                            <!-- WIDGET -->
                            <div class="widget widget_price_filter">
                                <h3>Price Level</h3>
                                <div class="price-slider-wrapper">
                                    <div class="price-slider"></div>
                                    <div class="price_slider_amount">
                                        <div class="price_label">
                                            <span class="from"></span> - <span class="to"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END / WIDGET -->

                            <!-- WIDGET -->
                            <div class="widget widget_has_radio_checkbox">
                                <h3>Star Rating</h3>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            <span class="rating">
                                                Unrated
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- END / WIDGET -->

                            <!-- WIDGET -->
                            <div class="widget widget_has_radio_checkbox">
                                <h3>Distance</h3>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Near Airport
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Near Shopping District
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Near Attractions
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Near Traffic station
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- END / WIDGET -->

                            <!-- WIDGET -->
                            <div class="widget widget_has_radio_checkbox">
                                <h3>Service Include</h3>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Room service
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Laundry
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Meal at room
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Wifi &amp; internet
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Parking lot
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            TV and appliances
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Pool
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <i class="awe-icon awe-icon-check"></i>
                                            Gym and Spa
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- END / WIDGET -->

                            <!-- WIDGET -->
                            <div class="widget widget_product_tag_cloud">
                                <h3>Tags</h3>
                                <div class="tagcloud">
                                    <a href="#">Hotel</a>
                                    <a href="#">Motel</a>
                                    <a href="#">Hostel</a>
                                    <a href="#">Homestay</a>
                                </div>
                            </div>
                            <!-- END / WIDGET -->

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- FOOTER PAGE -->
        <footer id="footer-page">
            <div class="container">
                <div class="row">
                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_contact_info">
                            <div class="widget_background">
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                            </div>
                            <div class="logo">
                                <img src="images/logo-footer.png" alt="">
                            </div>
                            <div class="widget_content">
                                <p>25 California Avenue, Santa Monica, California. USA</p>
                                <p>+1-888-8765-1234</p>
                                <a href="#">contact@gofar.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-2">
                        <div class="widget widget_about_us">
                            <h3>About Us</h3>
                            <div class="widget_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dignissim dolor. Ut risus orci, aliquam sit amet semper eget, egestas aliquam felis.</p>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-2">
                        <div class="widget widget_categories">
                            <h3>Categiries</h3>
                            <ul>
                                <li><a href="#">Countries</a></li>
                                <li><a href="#">Regions</a></li>
                                <li><a href="#">Cities</a></li>
                                <li><a href="#">Districts</a></li>
                                <li><a href="#">Countries</a></li>
                                <li><a href="#">Airports</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Places of interest</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-2">
                        <div class="widget widget_recent_entries">
                            <h3>Recent Blog</h3>
                            <ul>
                                <li><a href="#">Countries</a></li>
                                <li><a href="#">Regions</a></li>
                                <li><a href="#">Cities</a></li>
                                <li><a href="#">Districts</a></li>
                                <li><a href="#">Countries</a></li>
                                <li><a href="#">Airports</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Places of interest</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_follow_us">
                            <div class="widget_content">
                                <p>For Special booking request, please call</p>
                                <span class="phone">099-099-000</span>
                                <div class="awe-social">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->
                </div>
                <div class="copyright">
                    <p>©2015 GOFAR travel™ All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- END / FOOTER PAGE -->

    </div>
    <!-- END / PAGE WRAP -->

    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/lib/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.owl.carousel.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3"></script>
    <script type="text/javascript" src="js/lib/md-map-extend.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/perfect-scrollbar.min.js"></script>
    <script type='text/javascript' src="js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

@endsection