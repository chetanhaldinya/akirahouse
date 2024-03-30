@extends('front.layouts.base')
@section('content')
<div class="share-icons">
    {{-- <a target="_blank" href="" class="btn share-button" data-share="facebook"><i class="fab fa-facebook"></i></a> --}}
    <a target="_blank" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello%20there!%20Please share your rental page_contents qutations" class="btn share-button" data-share="whatsapp"><i class="fab fa-whatsapp"></i></a>
    <a target="_blank" href="https://www.instagram.com/akirahomess" class="btn share-button" data-share="instagram"><i class="fab fa-instagram"></i></a>
</div>
<section class="page-banner-area pt-195 rpt-135 pb-190 rpb-125 rel z-1 bgs-cover bgc-black text-center" style="background-image: url({{ asset('front/assets/images/bg-header-banner.jpg') }})">
    <div class="container">
        <div class="banner-inner text-white rpb-25">
            <h1 class="page-title wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">{{ isset($page_content->title) ? $page_content->title : 'Na' }}</h1>
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
    <section class="page_contents-area py-130 rpy-100 rel z-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page_contents-content rmb-55">
                        <div class="section-title wow fadeInUp delay-0-2s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <h2>Description</h2>
                        </div>
                        {!! isset($page_content->content) ? $page_content->content : 'Na' !!}
                       
                       
                       
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
