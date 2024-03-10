        <!-- main header -->
        <header class="main-header header-white">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container container-1720 clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="index.html"><img src="{{ $logo_img }}" style="width: 80px;"
                                        alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer clearfix me-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo my-15">
                                        <a href="index.html">
                                            <img src="{{ $logo_img }}" style="width: 80px;" alt="Logo"
                                            title="Logo">
                                        </a>
                                    </div>
                                    
                                    <li class="nav-item custom_navigation">
                                        <a class="nav-link" href="{{route('front.connect')}}" style="color: #fff;font-size: 20px;background: #ab6034c7;margin-right: 10px;border: 1px solid #ab6034;border-radius: 10px;border-style: outset;">List Your Property</a>
                                      </li>
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                        data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{route('front.home')}}">Home</a> </li>
                                        <li class=""><a href="{{route('front.room')}}">Rooms</a></li>
                                        {{-- <li class="dropdown"><a href="#">pages</a>
                                            <ul>
                                                <li><a href="{{route('front.about')}}">About us</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="faqs.html">faqs & help's</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li class=""><a href="{{route('front.blog')}}">blog</a> --}}
                                        </li>
                                        <li><a href="{{route('front.contact')}}">Contact</a></li>
                                        <li><a href="{{route('front.connect')}}">List Your Property</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        
                        <!-- Menu Button -->
                        <div class="menu-btns">
                            <a href="{{route('front.room')}}" class="theme-btn">Book Now <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->
