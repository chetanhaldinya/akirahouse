@extends('front.layouts.base')
@section('content')
     <!-- Page Banner Start -->
     <section class="page-banner-area pt-140 rpt-80 pb-240 rpb-150 rel z-1 bgs-cover bgc-black text-center" style="background-image: url({{asset("front/assets/images/background/banner.jpg")}})">
        <div class="container">
            <div class="banner-inner text-white rpb-25">
                <h1 class="page-title wow fadeInUp delay-0-2s">Room Grid</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item active">Room Grid</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="bg-lines">
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
        </div>
    </section>
    <!-- Page Banner End -->
    
    
    <!-- Search Filter and Features Start -->
    <div class="search-and-features-area pb-50 rpb-20 rel z-1">
        <div class="container container-1550">
            <div class="search-filter-inner rel z-2">
                <div class="section-title text-white mb-20 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-5">Booking Your Seat</span>
                    <h3>Find & Booked Your Seats</h3>
                </div>
                <div class="filter-item wow fadeInUp delay-0-3s">
                    <input type="text" onfocus="(this.type='date')" placeholder="Check In">
                </div>
                <div class="filter-item wow fadeInUp delay-0-4s">
                    <input type="text" onfocus="(this.type='date')" placeholder="Check Out">
                </div>
                <div class="filter-item wow fadeInUp delay-0-5s">
                    <select name="adults" id="adults">
                        <option value="adults">Adults</option>
                        <option value="adults1">1</option>
                        <option value="adults2">2</option>
                        <option value="adults3">3</option>
                    </select>
                </div>
                <div class="filter-item wow fadeInUp delay-0-6s">
                    <select name="children" id="children">
                        <option value="children">Children</option>
                        <option value="children1">1</option>
                        <option value="children2">2</option>
                        <option value="children3">3</option>
                    </select>
                </div>
                <button class="theme-btn style-two wow fadeInUp delay-0-7s">Search Now <i class="far fa-angle-right"></i></button>
            </div>
        </div>
        <div class="bg-lines for-bg-white">
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
        </div>
    </div>
    <!-- Search Filter and Features End -->
    
    
    <!-- Rooms Area start -->
    <section class="rooms-grid-area pb-125 rpb-95 rel z-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-2s">
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
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room2.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">Classic</a>
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
                            <div class="price">Price <span>$53</span>/per night</div>
                        </div>
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room3.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">Couple</a>
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
                            <div class="price">Price <span>$84</span>/per night</div>
                        </div>
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room4.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">couple</a>
                        </div>
                        <div class="content">
                            <h4><a href="room-details.html">Modern Couple Rooms</a></h4>
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
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room5.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">family</a>
                        </div>
                        <div class="content">
                            <h4><a href="room-details.html">Classic Family Rooms</a></h4>
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
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room6.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">single</a>
                        </div>
                        <div class="content">
                            <h4><a href="room-details.html">Modern SIngle Rooms</a></h4>
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
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room7.jpg")}}" alt="Room">
                            <a class="category" href="room-grid.html">Luxury</a>
                        </div>
                        <div class="content">
                            <h4><a href="room-details.html">Classic Luxury Rooms</a></h4>
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
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room8.jpg")}}" alt="Room">
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
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="room-item style-two wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="{{asset("front/assets/images/rooms/room9.jpg")}}" alt="Room">
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
                        <a class="theme-btn" href="contact.html">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <ul class="pagination pt-10 flex-wrap justify-content-center wow fadeInUp delay-0-2s">
                <li class="page-item disabled">
                    <span class="page-link"><i class="far fa-arrow-left"></i></span>
                </li>
                <li class="page-item active">
                    <span class="page-link">
                        1
                        <span class="sr-only">(current)</span>
                    </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="far fa-arrow-right"></i></a>
                </li>
            </ul>
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
@endsection
