@extends('front.layouts.base')
@section('content')
<div class="share-icons">
    {{-- <a target="_blank" href="" class="btn share-button" data-share="facebook"><i class="fab fa-facebook"></i></a> --}}
    <a target="_blank" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello%20there!%20Please share your rental flats qutations" class="btn share-button" data-share="whatsapp"><i class="fab fa-whatsapp"></i></a>
    <a target="_blank" href="https://www.instagram.com/akirahomess" class="btn share-button" data-share="instagram"><i class="fab fa-instagram"></i></a>
</div>
<section class="page-banner-area pt-195 rpt-135 pb-190 rpb-125 rel z-1 bgs-cover bgc-black text-center" style="background-image: url(https://buffer.com/cdn-cgi/image/w=1000,fit=contain,q=90,f=auto/library/content/images/size/w600/2023/10/free-images.jpg)">
    <div class="container">
        <div class="banner-inner text-white rpb-25">
            <!-- <h1 class="page-title wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">{{ isset($flat->title) ? $flat->title : 'Na' }}</h1> -->
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
                            <h2>{{isset($page_content->title) ? $page_content->title : 'Na'}}</h2>
                            
                        </div>
                        
                        <p>{!! isset($page_content->content) ? $page_content->content : 'Na' !!}</p>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="room-details-sidebar bgc-lighter p-50 rp-40">
                        <a  href="https://api.whatsapp.com/send?phone=919057033777&text=Hello there! I want detail of your flat. Please share qutation of this flat.">
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
