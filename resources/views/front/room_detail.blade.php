@extends('front.layouts.base')
@section('content')
<div class="share-icons">
    {{-- <a target="_blank" href="" class="btn share-button" data-share="facebook"><i class="fab fa-facebook"></i></a> --}}
    <a target="_blank" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello%20there!%20Please share your rental flats qutations" class="btn share-button" data-share="whatsapp"><i class="fab fa-whatsapp"></i></a>
    <a target="_blank" href="https://www.instagram.com/akirahomess" class="btn share-button" data-share="instagram"><i class="fab fa-instagram"></i></a>
</div>
<section class="page-banner-area pt-195 rpt-135 pb-190 rpb-125 rel z-1 bgs-cover bgc-black text-center" style="background-image: url({{$flat->image}})">
    <div class="container">
        <div class="banner-inner text-white rpb-25">
            <h1 class="page-title wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">{{ isset($flat->title) ? $flat->title : 'Na' }}</h1>
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
    <section class="room-details-area py-130 rpy-100 rel z-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="room-details-content rmb-55">
                        <div class="section-title wow fadeInUp delay-0-2s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <h2>Description</h2>
                        </div>
                        <ul class="blog-meta wow fadeInUp delay-0-3s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <li>
                                <i class="far fa-drafting-compass"></i>
                                <a href="#">Size : {{ isset($flat->size) ? $flat->size : 'Na' }}</a>
                            </li>
                            <li>
                                <i class="far fa-bed-alt"></i>
                                <a href="#">Beds : {{ isset($flat->bed_room) ? $flat->bed_room : 'Na' }}</a>
                            </li>
                            <li>
                                <i class="far fa-bath"></i>
                                <a href="#">Bathrooms : {{ isset($flat->bath_room) ? $flat->bath_room : 'Na' }}</a>
                            </li>
                            <li>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </li>
                        </ul>
                        <div class="price mb-35">{{ currencyIcon() }}{{ isset($flat->amount) ? $flat->amount : '5000' }} Per
                            Night</div>
                        <p>{{ isset($flat->short_description) ? $flat->short_description : 'Na' }}</p>

                        <section class="main-slider-area">
                            <div class="main-slider-active">
                                @foreach ($flat->flat_images as $banner)
                                <div class="row">
                                            <div class="slider-image">
                                                <img style="min-height: 500px;" src="{{ $banner->image }}"
                                                    alt="Slider">
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
                        </section>
                        {!! isset($flat->long_description) ? $flat->long_description : 'Na' !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="room-details-sidebar bgc-lighter p-50 rp-40">
                        <a  href="https://api.whatsapp.com/send?phone=919057033777&text=Hello there! I want detail of your flat {{$flat->title}},  which is located  {{isset($flat->location)? $flat->location:'Jaipur'}}. Please share qutation of this flat.">
                        <button class="theme-btn w-100">Book Now<i class="fab fa-whatsapp"></i></button></a>
                        {{-- <form class="widget-search-filter wow fadeInUp delay-0-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="form-group">
                                <label for="checkin">Check In</label>
                                <input type="date" id="checkin" required="">
                            </div>
                            <div class="form-group">
                                <label for="checkout">Check Out</label>
                                <input type="date" id="checkout" required="">
                            </div>
                            <div class="form-group">
                                <label for="adults">Adults</label>
                                <select name="adults" id="adults" style="display: none;">
                                    <option value="adults1">1</option>
                                    <option value="adults2">2</option>
                                    <option value="adults3" selected="">3</option>
                                    <option value="adults3">4</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">3</span>
                                    <ul class="list">
                                        <li data-value="adults1" class="option">1</li>
                                        <li data-value="adults2" class="option">2</li>
                                        <li data-value="adults3" class="option selected">3</li>
                                        <li data-value="adults3" class="option">4</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="children">Children</label>
                                <select name="children" id="children" style="display: none;">
                                    <option value="children1">1</option>
                                    <option value="children2" selected="">2</option>
                                    <option value="children3">3</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">2</span>
                                    <ul class="list">
                                        <li data-value="children1" class="option">1</li>
                                        <li data-value="children2" class="option selected">2</li>
                                        <li data-value="children3" class="option">3</li>
                                    </ul>
                                </div>
                            </div>
                            <button class="theme-btn w-100">Check Availability <i class="far fa-angle-right"></i></button>
                        </form> --}}
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
@endsection
