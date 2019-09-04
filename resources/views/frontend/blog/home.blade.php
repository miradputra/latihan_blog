@extends('layouts.frontend')

@section('title') All Blog @endsection

@section('content')

<!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Blog Home
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('all.blog') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-home.html"> Blog Home</a></p>
                </div>
            </div>
        </div>
    </section>
<!-- End banner Area -->


    <!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
                                {{--  <div class="single-widget">
                                    <p></p>
                                    {{--  <ul id="filter" class="nav-menu">
                                        <li class="menu-has-children" style="color: black;" id="filter"><a href=""><h6>Dropdown</h6></a>
                                            <ul>
                                                <li><a href="elements.html">Elements</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                                <li class="menu-has-children"><a href="">Level 2</a>
                                                <ul>
                                                    <li><a href="#">Item 1</a></li>
                                                    <li><a href="#">Item 2</a></li>
                                                </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>  --}}
                            @foreach($artikel as $data)
                                <div class="single-post">
                                    <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$data->foto)}}" alt="" style="height: 312.667px; width: 670px">
                                    <ul class="tags">
                                        @foreach($data->tag as $t)
                                            <li><a href="/blog/tag/{{$t->slug}}">{{ $t->name }}, </a></li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('detail.blog', $data->slug) }}">
                                        <h1>
                                            {{ $data->judul }}
                                        </h1>
                                    </a>
                                        <p> {!! substr($data->konten, 1, 550).'. . .' !!} </p>
                                    <div class="bottom-meta">
                                        <div class="user-details row align-items-center">
                                            <div class="comment-wrap col-lg-6">
                                                <ul>
                                                    <li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div class="social-wrap col-lg-6">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
						@include('frontend.blog.side')
					</div>
				</div>
			</section>
			<!-- End blog-posts Area -->

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/hexagons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">
    <style>
        #filter {
            background-color: rgba(0, 0, 0, 0);
            box-sizing: border-box;
            color: black;
            display: inline-block;
            font-family: "Poppins", sans-serif;
            font-size: 12px;
            font-weight: 400;
            line-height: 22.75px;
            list-style-image: none;
            list-style-position: outside;
            list-style-type: none;
            margin-bottom: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            outline-color: rgb(255, 255, 255);
            outline-style: none;
            outline-width: 0px;
            padding-bottom: 0px;
            padding-left: 8px;
            padding-right: 30px;
            padding-top: 0px;
            text-align: left;
            text-decoration: none;
            text-decoration-color: rgb(255, 255, 255);
            text-decoration-line: none;
            text-decoration-style: solid;
            text-transform: uppercase;
            transition-delay: 0s;
            transition-duration: 0.3s;
            transition-property: all;
            transition-timing-function: ease;
            white-space: nowrap;
        }
    </style>
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
