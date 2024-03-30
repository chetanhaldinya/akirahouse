
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="title" content="Best rental apartment and home stay in jaipur">
    <meta name="description" content="For a memorable stay, explore luxury, fully - furnished, rental apartments and home stays in Jaipur.
    ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="{{url()->current()}}" />
    <!-- Google tag (gtag.js) -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    @yield('title')
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ $favicon_img }}" type="image/x-icon">
    
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome-5.14.0.min.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.min.css')}}">
    <!-- Type Writer -->
    <link rel="stylesheet" href="{{asset('front/assets/css/jquery.animatedheadline.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.min.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <style>
        /* Fixed position for share icons */
        .share-icons {
            position: fixed;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            z-index: 999;
        }

        /* Style for the share icon buttons */
        .share-icons a {
            display: block;
            margin-bottom: 5px;
            font-size: 25px;
            color: #fff;
            text-align: center;
            background-color: #ab6034;
            padding: 10px;
            border-radius: 15%;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        /* Hover effect for the buttons */
        .share-icons a:hover {
            background-color: #f04347b5;
        }
        .btn.share-button{
            line-height: 0;
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SFG05B26MK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-SFG05B26MK');
    </script>
    @stack('styles')
</head>
<body class="home-one">
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
@include('front.layouts.header')
@yield('content')
@include('front.layouts.footer')
    </div>
    <!--End pagewrapper-->
    @stack('scripts')
    <!-- Jquery -->
    <script src="{{asset('front/assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
    <!-- Appear Js -->
    <script src="{{asset('front/assets/js/appear.min.js')}}"></script>
    <!-- Slick -->
    <script src="{{asset('front/assets/js/slick.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nice Select -->
    <script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- Image Loader -->
    <script src="{{asset('front/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Calendar -->
    <script src="{{asset('front/assets/js/calendar.global.min.js')}}"></script>
    <!-- Circle Progress -->
    <script src="{{asset('front/assets/js/circle-progress.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('front/assets/js/isotope.pkgd.min.js')}}"></script>
    <!--  WOW Animation -->
    <script src="{{asset('front/assets/js/wow.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('front/assets/js/script.js')}}"></script>
    @stack('styles')
</body>
</html>