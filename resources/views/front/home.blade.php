@extends('front.layouts.base')
@section('content')
    <!-- Slider Section Start -->
    <section class="main-slider-area bgc-black-with-lighting rel z-1">
        <div class="main-slider-active">
            @foreach ($banners as $banner)
                <div class="slider-item">
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                            <div class="col-xl-3">
                                <div class="slider-content">
                                    <span class="sub-title"><i class="fal fa-arrow-right"></i> Welcome to Akirahomes</span>
                                    <h1>Enjoy Vacations With <span>Luxury Flat </span></h1>
                                    <a href="{{route('front.room')}}" class="theme-btn">Explore Our Rooms <i
                                            class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="slider-image">
                                    <img style="max-height:600px;" src="{{ $banner->image }}" alt="Slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="main-slider-dots"></div>
                </div>
            </div>
        </div>
        <div class="slider-shapes">
            <img class="shape circle-half" src="{{ asset('front/assets/images/shapes/slider-circle-half.png') }}"
                alt="Shape">
            <img class="shape circle" src="{{ asset('front/assets/images/shapes/slider-circle.png') }}" alt="Shape">
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <div class="share-icons">
        {{-- <a target="_blank" href="" class="btn share-button" data-share="facebook"><i class="fab fa-facebook"></i></a> --}}
        <a target="_blank" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello%20there!%20Please share your rental flats qutations" class="btn share-button" data-share="whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a target="_blank" href="https://www.instagram.com/akirahomess" class="btn share-button" data-share="instagram"><i class="fab fa-instagram"></i></a>
    </div>
    
    <!-- Hotel Area start -->
    <section class="hotel-area py-130 rpy-100 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center mb-60 rmb-40 wow fadeInUp delay-0-2s">
                        <h2>Explore Luxury Flats & Rooms Are People Choosing</h2>
                    </div>
                </div>
            </div>
            <div class="hotel-carousel-active">
                @foreach ($flats as $flat)
                    <div class="hotel-item wow fadeInUp delay-0-2s">
                        <div class="content">
                            <div class="top">
                                <h3><a
                                        href="{{ route('front.flat_detail', $flat->slug) }}">{{ isset($flat->title) ? $flat->title : 'na' }}</a>
                                </h3>
                                <p>{{ isset($flat->short_description) ? setStringLength($flat->short_description, 80) : 'Na' }}
                                </p>
                            </div>
                            <div class="bottom">
                                <div class="price">From
                                    <span>{{ currencyIcon() }}{{ isset($flat->amount) ? $flat->amount : '5000' }}</span>/per
                                    night
                                </div>
                                <div class="d-flex justify-content-between"></div>
                                <a class="theme-btn style-two"
                                    href="{{ route('front.flat_detail', $flat->slug) }}">Details <i
                                        class="fal fa-angle-right"></i></a>
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello there! I want detail of your flat {{$flat->title}},  which is located  {{isset($flat->location)? $flat->location:'Jaipur'}}. Please share qutation of this flat." style="color:#fff; background: #ab6034; font-size: 30px;" class="m-2 btn share-button theme-btn style-two" data-share="whatsapp"><i style="font-size: 30px;" class="fab fa-whatsapp"></i></a>

                            </div>
                        </div>
                        <div class="image">
                            <img src="{{ $flat->image }}" alt="Flat">
                        </div>
                    </div>
                @endforeach
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
    <!-- Rooms Area start -->
    <section class="rooms-area pt-130 rpt-100 pb-100 rpb-70 rel z-2">
        <div class="container">
            <div class="row justify-content-between align-items-center pb-20">
                <div class="col-xl-5 col-lg-7">
                    <div class="section-title mb-40 wow fadeInLeft delay-0-2s">
                        <h2>Take A Look Our Luxury Rooms and Flats</h2>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="theme-btn mb-40 wow fadeInRight delay-0-2s" href="{{ route('front.room') }}">Explore Rooms <i
                            class="fal fa-angle-right"></i></a>
                </div>
            </div>
            <div class="row">
                @foreach ($flats as $flat)
                    <div class="col-xl-4 col-md-6">
                        <div class="room-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ $flat->image }}" alt="Room">
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('front.flat_detail', $flat->slug) }}">Look Our Luxury Rooms</a></h4>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="far fa-bed-alt"></i>
                                        <a href="#">Guests :
                                            {{ isset($flat->max_guest) ? $flat->max_guest : '1' }}</a>
                                    </li>
                                    <li>
                                        <i class="far fa-drafting-compass"></i>
                                        <a href="#">Size : {{ isset($flat->size) ? $flat->size : 'Na' }}</a>
                                    </li>
                                </ul>
                                <p>{{ isset($flat->short_description) ? setStringLength($flat->short_description, 80) : 'Na' }}
                                </p>
                                <div class="price">Price
                                    <span>{{ currencyIcon() }}{{ isset($flat->amount) ? $flat->amount : '5000' }}</span>/per
                                    night
                                </div>
                            </div>
                            <div class="d-flex">
                                <a style="color:#fff; background: #ab6034" class="m-2 theme-btn style-two" href="{{route('front.flat_detail', $flat->slug)}}">Details <i
                                        class="fal fa-angle-right"></i></a>
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello there! I want detail of your flat {{$flat->title}},  which is located  {{isset($flat->location)? $flat->location:'Jaipur'}}. Please share qutation of this flat." style="color:#fff; background: #ab6034" class="m-2 btn share-button theme-btn style-two" data-share="whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

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


    
        <!-- Counter Section Start -->
        <section class="hotel-area py-130 rpy-100 rel z-1"  style="padding-top: 0;">
            <div class="container">
                
                <div class="hotel-carousel-active">
                    <div class="hotel-item wow fadeInUp delay-0-2s">
                        <div class="content" style="width:100%; padding: 20px;">
                            <div class="top counter-item counter-text-wrap wow fadeInUp delay-0-3s" style="margin-bottom: 0px;">
                                <h3 class="count-text" data-speed="3000" data-stop="55">0</h3>
                                <span class="counter-title">Flats</span>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
                {{-- <div class="hotel-carousel-active"> --}}
                    <div class="hotel-item wow fadeInUp delay-0-2s">
                        <div class="content" style="width:100%; padding: 20px;">
                            <div class="top counter-item counter-text-wrap wow fadeInUp delay-0-3s" style="margin-bottom: 0px;">
                                <h3 class="count-text" data-speed="3000" data-stop="500">0</h3>
                                <span class="counter-title">Luxury Rooms</span>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
                {{-- <div class="hotel-carousel-active"> --}}
                    <div class="hotel-item wow fadeInUp delay-0-2s">
                        <div class="content" style="width:100%; padding: 20px;">
                            <div class="top counter-item counter-text-wrap wow fadeInUp delay-0-3s" style="margin-bottom: 0px;">
                                <h3 class="count-text" data-speed="80" data-stop="68">0</h3>
                                <span class="counter-title">Villas</span>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
                {{-- <div class="hotel-carousel-active"> --}}
                    <div class="hotel-item wow fadeInUp delay-0-2s">
                        <div class="content" style="width:100%; padding: 20px;">
                            <div class="top counter-item counter-text-wrap wow fadeInUp delay-0-3s" style="margin-bottom: 0px;">
                                <h3 class="count-text" data-speed="3000" data-stop="999">0</h3>
                                <span class="counter-title">Regular Guests</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Section End -->
        <section class="about-area-three pb-130 rpb-95 rel">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content-three rmb-55 wow fadeInLeft delay-0-2s animated" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">About Company</span>
                                <h2>World Class Luxury Hotel &amp; Restaurant Near City</h2>
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                            </div>
                            <a href="about.html" class="theme-btn">Learn More Us <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-three-right wow fadeInRight delay-0-2s animated" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="counter-item-two counter-text-wrap counted">
                                <span class="count-text" data-speed="3000" data-stop="698">698</span>
                                <div class="content">
                                    <h4>Regular Clients</h4>
                                    <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain</p>
                                </div>
                            </div>
                            <div class="counter-item-two counter-text-wrap counted">
                                <span class="count-text" data-speed="3000" data-stop="785">785</span>
                                <div class="content">
                                    <h4>Luxury Rooms</h4>
                                    <p>Nam libero tempore cum soluta nobis est eligeoptioy cumque nihil impedit quo minus quod maxime</p>
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
        <div class="for-bg-and-shapes rel z-1">

        <!-- Features Section Start -->
        <section class="features-area pb-65 rpb-35 rel z-1" style="margin-bottom: 20px">
            <div class="container">
                <div class="row text-white">
                    <div class="col-xl-6 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-2s">
                            <div class="icon">
                                <i class="flaticon-jacuzzi"></i>
                            </div>
                            <div class="content">
                                <h4><a href="javascript::void();">Wifi</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-4s">
                            <div class="icon">
                                <i class="flaticon-jacuzzi"></i>
                            </div>
                            <div class="content">
                                <h4><a href="javascript::void();">Well Cleaning</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="feature-item style-two wow fadeInUp delay-0-6s">
                            <div class="icon">
                                <i class="flaticon-swim"></i>
                            </div>
                            <div class="content">
                                <h4><a href="javascript::void();">Swimming Pool</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->

        <div class="bg-color-and-shapes bgc-black" style="height: 122%;">
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






    <!-- Video Area start -->
    <div class="video-area">
        <div class="container-fluid gap-wide">
            <div class="video-part wow fadeInUp delay-0-2s">
                <img src="{{ asset('front/assets/images/home/banner_youtube.png') }}" alt="Video">
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
                            <h2>World Class Luxury Flats & Rooms Near City</h2>
                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by
                                the charms of pleasure of the moment</p>
                        </div>
                        <div class="feature-list">
                            <div class="feature-item wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <i class="flaticon-check-mark"></i>
                                </div>
                                <div class="content">
                                    <h5>Trusted Partners</h5>
                                    <p>Sed ut perspiciatis omniste natus voluptatem accus</p>
                                </div>
                            </div>
                            <div class="feature-item wow fadeInUp delay-0-3s">
                                <div class="icon">
                                    <i class="flaticon-check-mark"></i>
                                </div>
                                <div class="content">
                                    <h5>Luxury Services</h5>
                                    <p>Quis autem voluptate velise molestiae conse rem</p>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="theme-btn style-two mt-25 wow fadeInUp delay-0-4s">Read More <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="food-drink-image rel wow fadeInUp delay-0-4s">
                        <img src="{{ asset('front/assets/images/home/client_flat.png') }}" alt="Flat">
                        <div class="popular-clients">
                            <span>Popular Client</span>
                            @foreach ($testimonials as $testimonial)
                                <img src="{{ $testimonial->image }}" alt="Client">
                            @endforeach
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
                {{-- <div class="col-lg-5 wow fadeInLeft delay-0-2s">
                    <div class="booking-search rmb-55 rel bg-white">
                        <div class="section-title">
                            <span class="sub-title mb-5">Search Flats</span>
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
                                    <option value="default" selected="">Guests</option>
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
                </div> --}}
                <div class="col-lg-7">
                    <div class="testimonial-right text-white wow fadeInRight delay-0-2s">
                        <div class="section-title mb-65 rmb-45">
                            <span class="sub-title mb-15">Our Testimonials</span>
                            <h2>What Our Customer Say Us</h2>
                        </div>
                        <div class="testimonial-part">
                            <div class="testimonial-active">
                                @foreach ($testimonials as $testimonial)
                                    <div class="testimonial-item">
                                        <p>{{ isset($testimonial->content) ? $testimonial->content : 'Na' }}</p>
                                        <div class="testi-author">
                                            <img style="max-width: 55px; max-height: 55px;"
                                                src="{{ $testimonial->image }}" alt="Testi Thumb">
                                            <div class="testi-des">
                                                <h5>{{ isset($testimonial->name) ? $testimonial->name : 'Na' }}</h5>
                                                <span>{{ isset($testimonial->designation) ? $testimonial->designation : 'Na' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="testimonial-thums">
                                @foreach ($testimonials as $testimonial)
                                    <div class="testi-thumb-item">
                                        <img style="max-width: 55px; max-height: 55px;" src="{{ $testimonial->image }}"
                                            alt="Testi Thumb">
                                    </div>
                                @endforeach
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
    {{-- <section class="blog-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
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
                            <img src="{{ asset('front/assets/images/blog/blog1.jpg') }}" alt="Blog">
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
                            <img src="{{ asset('front/assets/images/blog/blog2.jpg') }}" alt="Blog">
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
                            <img src="{{ asset('front/assets/images/blog/blog3.jpg') }}" alt="Blog">
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
    <!-- Blog Area end --> --}}
@endsection
