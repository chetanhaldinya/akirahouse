@extends('front.layouts.base')
@section('content')
    <!-- Slider Section Start -->
    <section class="main-slider-area bgc-black-with-lighting rel z-1">
        <div class="main-slider-active">
            <div class="slider-item">
                <div class="container">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-xl-3">
                            <div class="slider-content">
                                <span class="sub-title"><i class="fal fa-arrow-right"></i> Welcome to Qomfort</span>
                                <h1>Enjoy Vacations With <span>Luxury Hotel</span></h1>
                                <a href="room-grid.html" class="theme-btn">Explore Our Rooms <i
                                        class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="slider-image">
                                <img src="{{asset("front/assets/images/slider/slide-1.jpg")}}" alt="Slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="container">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-xl-3">
                            <div class="slider-content">
                                <span class="sub-title"><i class="fal fa-arrow-right"></i> Welcome to Qomfort</span>
                                <h1>Enjoy Vacations With <span>Luxury Hotel</span></h1>
                                <a href="room-grid.html" class="theme-btn">Explore Our Rooms <i
                                        class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="slider-image">
                                <img src="{{asset("front/assets/images/slider/slide-2.jpg")}}" alt="Slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="container">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-xl-3">
                            <div class="slider-content">
                                <span class="sub-title"><i class="fal fa-arrow-right"></i> Welcome to Qomfort</span>
                                <h1>Enjoy Vacations With <span>Luxury Hotel</span></h1>
                                <a href="room-grid.html" class="theme-btn">Explore Our Rooms <i
                                        class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="slider-image">
                                <img src="{{asset("front/assets/images/slider/slide-3.jpg")}}" alt="Slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="container">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-xl-3">
                            <div class="slider-content">
                                <span class="sub-title"><i class="fal fa-arrow-right"></i> Welcome to Qomfort</span>
                                <h1>Enjoy Vacations With <span>Luxury Hotel</span></h1>
                                <a href="room-grid.html" class="theme-btn">Explore Our Rooms <i
                                        class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="slider-image">
                                <img src="{{asset("front/assets/images/slider/slide-4.jpg")}}" alt="Slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="main-slider-dots"></div>
                </div>
            </div>
        </div>
        <div class="slider-shapes">
            <img class="shape circle-half" src="{{asset("front/assets/images/shapes/slider-circle-half.png")}}" alt="Shape">
            <img class="shape circle" src="{{asset("front/assets/images/shapes/slider-circle.png")}}" alt="Shape">
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Slider Section End -->


    <!-- About Area start -->
    <section class="about-area pt-130 rpt-100 rel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-part rmb-55">
                        <div class="top-part">
                            <img src="{{asset("front/assets/images/about/about1.jpg")}}" alt="About">
                            <div class="icon wow fadeInLeft delay-0-2s"><i class="flaticon-hotel"></i></div>
                        </div>
                        <div class="bottom-part">
                            <a href="https://www.youtube.com/watch?v=9Y7ma241N8k"
                                class="mfp-iframe video-play-text wow fadeInRight delay-0-2s">
                                <i class="fal fa-play"></i>
                                <span><b>Watch Latest</b><br> <i>Videos</i></span>
                            </a>
                            <img src="{{asset("front/assets/images/about/about2.jpg")}}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-part">
                        <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">About Company</span>
                            <h2>World Class Luxury Hotel & Restaurant Near City</h2>
                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by
                                the charms of pleasure of the moment</p>
                        </div>
                        <div class="feature-list wow fadeInUp delay-0-3s">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="flaticon-check-mark"></i>
                                </div>
                                <div class="content">
                                    <h5>Trusted Partners</h5>
                                    <p>Sed ut perspiciatis omniste natus voluptatem accus</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="flaticon-check-mark"></i>
                                </div>
                                <div class="content">
                                    <h5>Luxury Services</h5>
                                    <p>Quis autem voluptate velise molestiae conse rem</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-author wow fadeInUp delay-0-4s">
                            <div class="author">
                                <img src="{{asset("front/assets/images/about/about-author.jpg")}}" alt="Author">
                            </div>
                            <div class="description">
                                <h5>Robert L. Robinson</h5>
                                <span>CEO & Founder</span>
                            </div>
                            <div class="signature">
                                <img src="{{asset("front/assets/images/about/signature.png")}}" alt="Signature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines for-bg-white">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- About Area end -->


    <!-- Rooms Area start -->
    <section class="rooms-area pt-130 rpt-100 pb-100 rpb-70 rel z-2">
        <div class="container">
            <div class="row justify-content-between align-items-center pb-20">
                <div class="col-xl-5 col-lg-7">
                    <div class="section-title mb-40 wow fadeInLeft delay-0-2s">
                        <h2>Take A Look Our Luxury Rooms and Hotel</h2>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="theme-btn mb-40 wow fadeInRight delay-0-2s" href="room-grid.html">Explore Rooms <i
                            class="fal fa-angle-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="room-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room1.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">Luxury</a>
                        </div>
                        <div class="content">
                            <h4><a href="room-details.html">Look Our Luxury Rooms</a></h4>
                            <ul class="blog-meta">
                                <li>
                                    <i class="far fa-bed-alt"></i>
                                    <a href="#">Adults : 5</a>
                                </li>
                                <li>
                                    <i class="far fa-drafting-compass"></i>
                                    <a href="#">Size : 59ft</a>
                                </li>
                            </ul>
                            <p>At vero eos et accusamus et iustonis simos ducimus blanditiis praesentium tatum</p>
                            <div class="price">Price <span>$59</span>/per night</div>
                        </div>
                        <a class="theme-btn style-two" href="contact.html">Book Now <i
                                class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room2.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">Classic</a>
                        </div>
                        <div class="content">
                            <h4><a href="room-details.html">Look Our Classic Rooms</a></h4>
                            <ul class="blog-meta">
                                <li>
                                    <i class="far fa-bed-alt"></i>
                                    <a href="#">Adults : 5</a>
                                </li>
                                <li>
                                    <i class="far fa-drafting-compass"></i>
                                    <a href="#">Size : 59ft</a>
                                </li>
                            </ul>
                            <p>At vero eos et accusamus et iustonis simos ducimus blanditiis praesentium tatum</p>
                            <div class="price">Price <span>$53</span>/per night</div>
                        </div>
                        <a class="theme-btn style-two" href="contact.html">Book Now <i
                                class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room3.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">Couple</a>
                        </div>
                        <div class="content">
                            <h4><a href="room-details.html">Look Our Couple Rooms</a></h4>
                            <ul class="blog-meta">
                                <li>
                                    <i class="far fa-bed-alt"></i>
                                    <a href="#">Adults : 5</a>
                                </li>
                                <li>
                                    <i class="far fa-drafting-compass"></i>
                                    <a href="#">Size : 59ft</a>
                                </li>
                            </ul>
                            <p>At vero eos et accusamus et iustonis simos ducimus blanditiis praesentium tatum</p>
                            <div class="price">Price <span>$84</span>/per night</div>
                        </div>
                        <a class="theme-btn style-two" href="contact.html">Book Now <i
                                class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines for-bg-white">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Rooms Area end -->


    <div class="for-bg-and-shapes rel z-1">
        <!-- Counter Section Start -->
        <div class="counter-area pb-110 rpb-80 rel z-1">
            <div class="container">
                <div class="row gap-70">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-2s">
                            <span class="count-text" data-speed="3000" data-stop="49">0</span>
                            <span class="counter-title">Projects complete</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-3s">
                            <span class="count-text" data-speed="3000" data-stop="305">0</span>
                            <span class="counter-title">Luxury Rooms</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-4s">
                            <span class="count-text" data-speed="3000" data-stop="68">0</span>
                            <span class="counter-title">Beaches</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-5s">
                            <span class="count-text" data-speed="3000" data-stop="654">0</span>
                            <span class="counter-title">Regular Guests</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->


        <!-- Features Section Start -->
        <section class="features-area pb-65 rpb-35 rel z-1">
            <div class="container">
                <div class="row text-white">
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-2s">
                            <div class="icon">
                                <i class="flaticon-stationary-bike"></i>
                            </div>
                            <div class="content">
                                <h4><a href="room-details.html">Fitness Center</a></h4>
                                <p>At vero eos accusamus eustonis simos duc blanditiis praesente tatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-4s">
                            <div class="icon">
                                <i class="flaticon-jacuzzi"></i>
                            </div>
                            <div class="content">
                                <h4><a href="room-details.html">Jacuzzi</a></h4>
                                <p>Libero tempore cum soluta to eligende optio cumque impedit quo minus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-6s">
                            <div class="icon">
                                <i class="flaticon-swim"></i>
                            </div>
                            <div class="content">
                                <h4><a href="room-details.html">Swimming Pool</a></h4>
                                <p>Blinded by desirec that cannot foresies the pain and trouble bounde</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-2s">
                            <div class="icon">
                                <i class="flaticon-relax"></i>
                            </div>
                            <div class="content">
                                <h4><a href="room-details.html">SPA Treatments</a></h4>
                                <p>At vero eos accusamus eustonis simos duc blanditiis praesente tatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-4s">
                            <div class="icon">
                                <i class="flaticon-restaurant"></i>
                            </div>
                            <div class="content">
                                <h4><a href="room-details.html">Food & Restaurants</a></h4>
                                <p>At vero eos accusamus eustonis simos duc blanditiis praesente tatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-6s">
                            <div class="icon">
                                <i class="flaticon-restaurant"></i>
                            </div>
                            <div class="content">
                                <h4><a href="room-details.html">Transportation</a></h4>
                                <p>At vero eos accusamus eustonis simos duc blanditiis praesente tatum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <div class="bg-color-and-shapes bgc-black">
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
            </div>
            <div class="wave-shapes"></div>
            <div class="wave-shapes-two"></div>
        </div>
    </div>


    <!-- Hotel Area start -->
    <section class="hotel-area py-130 rpy-100 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center mb-60 rmb-40 wow fadeInUp delay-0-2s">
                        <h2>Explore Luxury Hotel & Suites Are People Choosing</h2>
                    </div>
                </div>
            </div>
            <div class="hotel-carousel-active">
                <div class="hotel-item wow fadeInUp delay-0-2s">
                    <div class="content">
                        <div class="top">
                            <h3><a href="room-details.html">Superior Room</a></h3>
                            <p>Vero accusamus eustonis simose duc blanditiis praesente tatum</p>
                        </div>

                        <div class="bottom">
                            <div class="price">From <span>$185</span>/per night</div>
                            <a class="theme-btn style-two" href="room-details.html">Details <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{asset("front/assets/images/hotel/hotel1.jpg")}}" alt="Hotel">
                    </div>
                </div>
                <div class="hotel-item wow fadeInUp delay-0-4s">
                    <div class="content">
                        <div class="top">
                            <h3><a href="room-details.html">Deluxe Suite</a></h3>
                            <p>Eos accusamus eustonis simose duc blanditiis praesente tatum</p>
                        </div>

                        <div class="bottom">
                            <div class="price">From <span>$173</span>/per night</div>
                            <a class="theme-btn style-two" href="room-details.html">Details <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{asset("front/assets/images/hotel/hotel2.jpg")}}" alt="Hotel">
                    </div>
                </div>
                <div class="hotel-item wow fadeInUp delay-0-2s">
                    <div class="content">
                        <div class="top">
                            <h3><a href="room-details.html">Superior Room</a></h3>
                            <p>Vero accusamus eustonis simose duc blanditiis praesente tatum</p>
                        </div>

                        <div class="bottom">
                            <div class="price">From <span>$185</span>/per night</div>
                            <a class="theme-btn style-two" href="room-details.html">Details <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{asset("front/assets/images/hotel/hotel1.jpg")}}" alt="Hotel">
                    </div>
                </div>
                <div class="hotel-item wow fadeInUp delay-0-2s">
                    <div class="content">
                        <div class="top">
                            <h3><a href="room-details.html">Deluxe Suite</a></h3>
                            <p>Eos accusamus eustonis simose duc blanditiis praesente tatum</p>
                        </div>

                        <div class="bottom">
                            <div class="price">From <span>$173</span>/per night</div>
                            <a class="theme-btn style-two" href="room-details.html">Details <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{asset("front/assets/images/hotel/hotel2.jpg")}}" alt="Hotel">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines for-bg-white">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Hotel Area end -->


    <!-- Video Area start -->
    <div class="video-area">
        <div class="container-fluid gap-wide">
            <div class="video-part wow fadeInUp delay-0-2s">
                <img src="{{asset("front/assets/images/background/video-bg.jpg")}}" alt="Video">
                <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play" tabindex="-1"><i
                        class="fas fa-play"></i></a>
            </div>
        </div>
    </div>
    <!-- Video Area end -->


    <!-- Food Drink Area start -->
    <section class="food-drink-area pt-130 rpt-100 pb-160 rpb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="food-drink-content rmb-55">
                        <div class="section-title mb-40 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Food & Drink</span>
                            <h2>Quality Food & Drink Your Trip Are Enjoyable</h2>
                            <p>Sed ut perspiciatis unde omniste natus voluptatem accusantiume doloremque laudantium, totam
                                rem aperiam inventore</p>
                        </div>
                        <div class="feature-list">
                            <div class="feature-item wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <i class="flaticon-check-mark"></i>
                                </div>
                                <div class="content">
                                    <h5>Free breakfast, tea & coffee</h5>
                                    <p>To take a trivial example, which undertakes laborious ways</p>
                                </div>
                            </div>
                            <div class="feature-item wow fadeInUp delay-0-3s">
                                <div class="icon">
                                    <i class="flaticon-check-mark"></i>
                                </div>
                                <div class="content">
                                    <h5>Quality Foods & kitchen</h5>
                                    <p>Sed ut perspiciatis omniste natus voluptatem accusan</p>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="theme-btn style-two mt-25 wow fadeInUp delay-0-4s">Learn More Hotel <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="food-drink-image rel wow fadeInUp delay-0-4s">
                        <img src="{{asset("front/assets/images/food/food-restaurent.jpg")}}" alt="Food Restaurent">
                        <div class="popular-clients">
                            <span>Popular Client</span>
                            <img src="{{asset("front/assets/images/food/popular-client1.jpg")}}" alt="Client">
                            <img src="{{asset("front/assets/images/food/popular-client2.jpg")}}" alt="Client">
                            <img src="{{asset("front/assets/images/food/popular-client3.jpg")}}" alt="Client">
                            <img src="{{asset("front/assets/images/food/popular-client4.jpg")}}" alt="Client">
                            <img src="{{asset("front/assets/images/food/popular-client5.jpg")}}" alt="Client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Drink Area end -->


    <!-- Testimonials Area start -->
    <section class="testimonials-area py-130 rpy-100 rel z-1 bg-color-and-shapes bgc-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 wow fadeInLeft delay-0-2s">
                    <div class="booking-search rmb-55 rel bg-white">
                        <div class="section-title">
                            <span class="sub-title mb-5">Food & Drink</span>
                            <h3>Find & Booked Your Seats</h3>
                        </div>
                        <form action="#" name="booking-form" method="post">
                            <div class="form-group">
                                <input type="text" id="check-in" name="check-in" class="form-control"
                                    value="" placeholder="Check In" onfocus="(this.type='date')" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="check-out" name="check-out" class="form-control"
                                    value="" placeholder="Check Out" onfocus="(this.type='date')" required>
                            </div>
                            <div class="form-group clearfix">
                                <select name="adults" id="adults">
                                    <option value="default" selected="">Adults</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                </select>
                            </div>
                            <div class="form-group clearfix">
                                <select name="children" id="children">
                                    <option value="default" selected="">Children</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                </select>
                            </div>
                            <div class="form-group pt-30 mb-0">
                                <button type="submit" class="theme-btn">Search Now <i
                                        class="far fa-angle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-right text-white wow fadeInRight delay-0-2s">
                        <div class="section-title mb-65 rmb-45">
                            <span class="sub-title mb-15">Our Testimonials</span>
                            <h2>What Our Customer Say Us</h2>
                        </div>
                        <div class="testimonial-part">
                            <div class="testimonial-active">
                                <div class="testimonial-item">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores qua molestias excepturi sint
                                        occaecati cupiditate non provident similique sunt in culpa qui officia deserunte</p>
                                    <div class="testi-author">
                                        <img src="{{asset("front/assets/images/testimonials/testi-thumb1.jpg")}}" alt="Testi Thumb">
                                        <div class="testi-des">
                                            <h5>Diane C. Valentine</h5>
                                            <span>CEO & Founder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <p>Corrupti quos dolores qua molestias excepturi sint occaecati cupiditate non provident
                                        similique sunt in culpa qui officia deserunte At vero eos et accusamus et iusto odio
                                        dignissimos ducimus blanditiis praesentium voluptatum deleniti atque</p>
                                    <div class="testi-author">
                                        <img src="{{asset("front/assets/images/testimonials/testi-thumb2.jpg")}}" alt="Testi Thumb">
                                        <div class="testi-des">
                                            <h5>Michael A. Braun</h5>
                                            <span>UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <p>Voluptatum deleniti atque corrupti quos dolores qua molestias excepturi sint
                                        occaecati At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis
                                        praesentium cupiditate non provident similique sunt in culpa qui officia deserunte
                                    </p>
                                    <div class="testi-author">
                                        <img src="{{asset("front/assets/images/testimonials/testi-thumb3.jpg")}}" alt="Testi Thumb">
                                        <div class="testi-des">
                                            <h5>James V. Decastro</h5>
                                            <span>Senior Marketer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <p>Similique sunt in culpa qui officia deserunte At vero eos et accusamus et iusto odio
                                        dignissimos ducimus blanditiis praesentium voluptatum deleniti atque corrupti quos
                                        dolores qua molestias excepturi sint occaecati cupiditate non provident</p>
                                    <div class="testi-author">
                                        <img src="{{asset("front/assets/images/testimonials/testi-thumb4.jpg")}}" alt="Testi Thumb">
                                        <div class="testi-des">
                                            <h5>Michael A. Braun</h5>
                                            <span>Apps Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores qua molestias excepturi sint
                                        occaecati cupiditate non provident similique sunt in culpa qui officia deserunte</p>
                                    <div class="testi-author">
                                        <img src="{{asset("front/assets/images/testimonials/testi-thumb3.jpg")}}" alt="Testi Thumb">
                                        <div class="testi-des">
                                            <h5>Diane C. Valentine</h5>
                                            <span>CEO & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-thums">
                                <div class="testi-thumb-item">
                                    <img src="{{asset("front/assets/images/testimonials/testi-thumb1.jpg")}}" alt="Testi Thumb">
                                </div>
                                <div class="testi-thumb-item">
                                    <img src="{{asset("front/assets/images/testimonials/testi-thumb2.jpg")}}" alt="Testi Thumb">
                                </div>
                                <div class="testi-thumb-item">
                                    <img src="{{asset("front/assets/images/testimonials/testi-thumb3.jpg")}}" alt="Testi Thumb">
                                </div>
                                <div class="testi-thumb-item">
                                    <img src="{{asset("front/assets/images/testimonials/testi-thumb4.jpg")}}" alt="Testi Thumb">
                                </div>
                                <div class="testi-thumb-item">
                                    <img src="{{asset("front/assets/images/testimonials/testi-thumb3.jpg")}}" alt="Testi Thumb">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-dots"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
        <div class="wave-shapes"></div>
        <div class="wave-shapes-two"></div>
    </section>
    <!-- Testimonials Area end -->


    <!-- Blog Area start -->
    <section class="blog-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center mb-70 rmb-50 wow fadeInUp delay-0-2s">
                        <h2>Stay With Us & Get More Updates Latest News & Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog1.jpg")}}" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Knowing Business & Priorities</a></h4>
                            <ul class="blog-meta">
                                <li>
                                    <i class="far fa-user"></i>
                                    <a href="#">Diann W. Gaddis</a>
                                </li>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <a href="#">25 June 2023</a>
                                </li>
                            </ul>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="read-more" href="blog-details.html">Read More <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-3s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog2.jpg")}}" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Be Considered in Decisions</a></h4>
                            <ul class="blog-meta">
                                <li>
                                    <i class="far fa-user"></i>
                                    <a href="#">Diann W. Gaddis</a>
                                </li>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <a href="#">25 June 2023</a>
                                </li>
                            </ul>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="read-more" href="blog-details.html">Read More <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog3.jpg")}}" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Making Business Ideas Planned</a></h4>
                            <ul class="blog-meta">
                                <li>
                                    <i class="far fa-user"></i>
                                    <a href="#">Diann W. Gaddis</a>
                                </li>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <a href="#">25 June 2023</a>
                                </li>
                            </ul>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="read-more" href="blog-details.html">Read More <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines for-bg-white">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Blog Area end -->
@endsection
