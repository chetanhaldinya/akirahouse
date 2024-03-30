@extends('front.layouts.base')
@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-140 rpt-80 pb-240 rpb-150 rel z-1 bgs-cover bgc-black text-center"
        style="background-image: url({{ asset('front/assets/images/bg-header-banner.jpg') }})">
        <div class="container">
            <div class="banner-inner text-white rpb-25">
                <h1 class="page-title wow fadeInUp delay-0-2s">Our Flats</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">home</a></li>
                        <li class="breadcrumb-item active">Flats</li>
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

    <!-- Search Filter and Features Start -->
    {{-- <div class="search-and-features-area pb-50 rpb-20 rel z-1">
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
    <!-- Search Filter and Features End --> --}}
    <div class="share-icons">
        {{-- <a target="_blank" href="" class="btn share-button" data-share="facebook"><i class="fab fa-facebook"></i></a> --}}
        <a target="_blank" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello%20there!%20Please share your rental flats qutations" class="btn share-button" data-share="whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a target="_blank" href="https://www.instagram.com/akirahomess" class="btn share-button" data-share="instagram"><i class="fab fa-instagram"></i></a>
    </div>

    <!-- Rooms Area start -->
    <section class="rooms-grid-area pt-125 pb-25 rpb-95 rel z-2">
        <div class="container">
            <div class="row">
                @foreach ($flats as $flat)
                    <div class="col-xl-4 col-md-6">
                        <div class="room-item style-two wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ $flat->image }}" alt="{{isset($flat->title) ? $flat->title : 'Flat Image'}}">
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('front.flat_detail', $flat->slug) }}">{{isset($flat->title) ? setStringLength($flat->title, 12) : 'Na'}}</a></h4>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="far fa-bed-alt"></i>
                                        <a href="#">Adults : {{isset($flat->max_guest) ? $flat->max_guest : 'Na'}}</a>
                                    </li>
                                    <li>
                                        <i class="far fa-drafting-compass"></i>
                                        <a href="#">Size : {{isset($flat->size) ? $flat->size : 'Na'}}</a>
                                    </li>
                                </ul>
                                <p>{{isset($flat->short_description) ? setStringLength($flat->short_description,80) : 'Na'}}</p>
                                <div class="price">Price <span>{{ currencyIcon() }}{{ isset($flat->amount) ? $flat->amount : '5000' }}</span>/per night</div>
                            </div>
                            <a class="theme-btn" style="background-color: #ab6034;" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello there! I want detail of your flat {{$flat->title}},  which is located  {{isset($flat->location)? $flat->location:'Jaipur'}}. Please share qutation of this flat.">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <ul class="pagination pt-10 flex-wrap justify-content-center wow fadeInUp delay-0-2s">
               {{$flats->links()}}
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
