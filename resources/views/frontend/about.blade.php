@extends('layouts.frontend')

@section('title') About @endsection

@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    About Us
                </h1>
                <p class="text-white link-nav"><a href="{{ route('index') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> About Us</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start about-video Area -->
<section class="about-video-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 about-video-left">
                <h6 class="text-uppercase">Brand new app to blow your mind</h6>
                <h1>
                    We’ve made a life <br>
                    that will change you
                </h1>
                <p>
                    <span>We are here to listen from you deliver exellence</span>
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a class="primary-btn" href="#">Get Started Now</a>
            </div>
            <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="{{ asset('frontend/img/play-btn.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- End about-video Area -->

<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left no-padding">
                <img class="mx-auto d-block img-fluid" src="{{ asset('frontend/img/about-img.png')}}" alt="">
            </div>
            <div class="col-lg-6 home-about-right no-padding">
                <h1>Globally Connected <br>
                by Large Network</h1>
                <h5>
                    We are here to listen from you deliver exellence
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
                <a class="primary-btn text-uppercase" href="#">Get Details</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

<!-- Start brand Area -->
<section class="brand-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l1.png')}}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l2.png')}}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l3.png')}}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l4.png')}}" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="{{ asset('frontend/img/l5.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End brand Area -->

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css' )}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/hexagons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
@endsection

@section('js')
    <script src="{{ asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('frontend/js/easing.min.js')}}"></script>
    <script src="{{ asset('frontend/js/hoverIntent.js')}}"></script>
    <script src="{{ asset('frontend/js/superfish.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/hexagons.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/js/mail-script.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>
@endsection
