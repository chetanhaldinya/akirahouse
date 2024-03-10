@extends('front.layouts.base')
@section('content')
     <!-- Page Blog Start -->
     <section class="page-banner-area pt-170 rpt-110 pb-190 rpb-125 rel z-1 bgs-cover bgc-black text-center" style="background-image: url({{asset("front/assets/images/background/banner-two.jpg")}})">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">Blog Grid</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item active">Blog Grid</li>
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
    <!-- Page Blog End -->
    
    <div class="share-icons">
        {{-- <a target="_blank" href="" class="btn share-button" data-share="facebook"><i class="fab fa-facebook"></i></a> --}}
        <a target="_blank" href="https://api.whatsapp.com/send?phone=919057033777&text=Hello%20there!%20Please share your rental flats qutations" class="btn share-button" data-share="whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a target="_blank" href="https://www.instagram.com/akirahomess" class="btn share-button" data-share="instagram"><i class="fab fa-instagram"></i></a>
    </div>
    <!-- Blog List Start -->
    <section class="blog-page-area py-130 rpy-100 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog1.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Knowing Business &amp; Priorities</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-3s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog2.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Considered Making Decisions</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-4s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog3.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Making Business Ideas Planned</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog7.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Knowing Business &amp; Priorities</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-3s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog8.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Considered Making Decisions</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-4s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog9.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Making Business Ideas Planned</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog10.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Knowing Business &amp; Priorities</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-3s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog11.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Considered Making Decisions</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-grid-item wow fadeInUp delay-0-4s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="image">
                            <img src="{{asset("front/assets/images/blog/blog12.jpg")}}" alt="Blog">
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
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Making Business Ideas Planned</a></h4>
                            <p>Perspiciatis omniste voluptate accusantiume doloremque laudantium, totam aperiam</p>
                            <a class="theme-btn" href="blog-details.html">Read More <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination flex-wrap justify-content-center wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
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
    <!-- Blog List End -->

@endsection
