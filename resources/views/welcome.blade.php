<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IT Training Center</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/color-01.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >
        <div class="mainmenu">
            <h1 style="margin-top: 10px;float:left;padding:20px">ITTC</h1>
            <div class="menu">
            @if (Route::has('login'))
                <div class=" ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" style="font-size:17px; padding:10px" class="text-sm text-gray-700 ">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="font-size:17px; padding:10px" class="ml-4 text-sm text-gray-700 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        </div>
        <div class="antialiased">
            @extends('slider')
        </div>
        <!--slider end-->
        <!--developer area start-->
        @section('content')
        <!--package area start-->
        <div class="package">
            <div class="package-title">
                <p>Store, Share or Publish</p>
                <p>Your photos, videos, music and doc</p>
            </div>
            <div class="container">
                <div class="col-md-5 video-text">
                    <h1>*Store, Share or Publish</h1>
                    <p>(1)Store, Share  or Publish Store, Share or Publish Store, Share or Publish </p>
                    <p>(2)Your photos, videos, music and doc</p>
                </div>
                <div class="col-md-7">
                    {{-- <iframe class="embed-responsive-item" src=" assets/video/jquery.wmv" allowfullscreen></iframe> --}}
                    {{-- <video src="https://www.youtube.com/watch?v=23IjqXrb_eI" alt=""  class="img-package"></video> --}}
                    {{-- <video width="600" height="500" preload="auto" autoplay="true">
                        <source src=" video/jquery.mp4" type="video/mp4">
                    </video> --}}
                    <video  width="600" height="500" controls>
                        <source src="video/jquery.mp4" type="video/mp4" >
                    </video>
                </div>
            </div>
        </div>
        <div class="title">
            <p>Store, Share or Publish</p>
            <p>Your photos, videos, music and doc</p>
        </div>
        <div class="container">
            <div class="card-deck">
                <div class="card ">
                    <div class="card-body text-center">
                        <img src="assets/images/logo.jpg" alt="" class="img-card">
                        <p class="card-text"> The  card</p>
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-body text-center">
                        <img src="assets/images/logo.jpg" alt=""  class="img-card">
                        <p class="card-text">The  card</p>
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-body text-center">
                        <img src="assets/images/logo.jpg" alt=""  class="img-card">
                        <p class="card-text"> The  card</p>
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-body text-center">
                        <img src="assets/images/logo.jpg" alt=""  class="img-card">
                        <p class="card-text">The  card</p>
                        <button type="button" class="btn btn-success">BUY NOW</button>
                    </div>
                </div>
            </div>
        </div>
        <!--package area end-->
                <div id="particles-js">
                    <div class="developer-area">
                        <div class="container">
                            <div class="col-md-12 col-sm-12">
                                <div class="title">
                                    <p>Developed By</p>
                                </div>
                                <div class="detail">
                                  <div class="row">
                                    <div class="col-md-5 dev1">
                                        <img src="{{asset('assets/img/me.JPG')}}"  class="img-responsive">
                                        <p>Khadijatunnasha Munny</p>
                                        <h4>khadijatunnashamunny@gmail.com</h4>
                                        <h5>01723788168</h5>
                                    </div>
                                    <div class="col-md-5 dev2">
                                        <img src="{{asset('assets/img/me.JPG')}}"  class="img-responsive">
                                        <p>Arina Alamgir</p>
                                        <h4>Arinaalamgir@gmail.com</h4>
                                        <h5>01892777934</h5>
                                    </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="msg">
        </div>
        <!--main area-->
        <main id="main" class="main-site left-sidebar">
            <div class="container">
                <div class="row">
                    <div class=" main-content-area">
                        <div class="wrap-contacts ">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="contact-box contact-form">
                                    <h2 class="box-title">Leave a Message</h2>
                                    <form action="#" method="get" name="frm-contact">
                                        <label for="name">Name<span>*</span></label>
                                        <input type="text" value="" id="name" name="name" >

                                        <label for="email">Email<span>*</span></label>
                                        <input type="text" value="" id="email" name="email" >

                                        <label for="phone">Number Phone</label>
                                        <input type="text" value="" id="phone" name="phone" >

                                        <label for="comment">Comment</label>
                                        <textarea name="comment" id="comment"></textarea>

                                        <input type="submit" name="ok" value="Submit" >
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="contact-box contact-info">
                                    <div class="wrap-map">
                                        <div class="mercado-google-maps"
                                             id="az-google-maps57341d9e51968"
                                             data-hue=""
                                             data-lightness="1"
                                             data-map-style="2"
                                             data-saturation="-100"
                                             data-modify-coloring="false"
                                             data-title_maps="Kute themes"
                                             data-phone="088-465 9965 02"
                                             data-email="khadijatunnashamunny@gmail.com"
                                             data-address="Z115 TP. Thai Nguyen"
                                             data-longitude="88.358230"
                                             data-latitude="25.860264"
                                             data-pin-icon=""
                                             data-zoom="16"
                                             data-map-type="ROADMAP"
                                             data-map-height="263">
                                        </div>
                                    </div>
                                    <h2 class="box-title">Contact Detail</h2>
                                    <div class="wrap-icon-box">

                                        <div class="icon-box-item">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <div class="right-info">
                                                <b>Email</b>
                                                <p>Support1@Mercado.com</p>
                                            </div>
                                        </div>
                                        <div class="icon-box-item">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div class="right-info">
                                                <b>Phone</b>
                                                <p>0123-465-789-111</p>
                                            </div>
                                        </div>
                                        <div class="icon-box-item">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <div class="right-info">
                                                <b>Mail Office</b>
                                                <p>Sed ut perspiciatis unde omnis<br />Street Name, Los Angeles</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div><!--end row-->
            </div><!--end container-->
        </main>
        <!--main area-->
        <!--footer area-->
        <footer id="footer">
            <div class="wrap-footer-content footer-style-1">
                <div class="wrap-function-info">
                    <div class="container">
                        <ul>
                            <li class="fc-info-item">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Free Shipping</h4>
                                </div>
                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-recycle" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Guarantee</h4>
                                </div>
                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Safe Payment</h4>
                                </div>
                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-life-ring" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Online Suport</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End function info-->
                <div class="main-footer-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Contact Details</h3>
                                    <div class="item-content">
                                        <div class="wrap-contact-detail">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <p class="contact-txt">45 Grand Central Terminal New York,NY 1017 United State USA</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    <p class="contact-txt">Contact@yourcompany.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Hot Line</h3>
                                    <div class="item-content">
                                        <div class="wrap-hotline-footer">
                                            <span class="desc">Call Us toll Free</span>
                                            <b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item footer-item-second">
                                    <h3 class="item-header">Sign up for newsletter</h3>
                                    <div class="item-content">
                                        <div class="wrap-newletter-footer">
                                            <form action="#" class="frm-newletter" id="frm-newletter">
                                                <input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
                                                <button class="btn-submit">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                                <div class="row">
                                    <div class="wrap-footer-item twin-item">
                                        <h3 class="item-header">My Account</h3>
                                        <div class="item-content">
                                            <div class="wrap-vertical-nav">
                                                <ul>
                                                    <li class="menu-item"><a href="#" class="link-term">My Account</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Brands</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-footer-item twin-item">
                                        <h3 class="item-header">Infomation</h3>
                                        <div class="item-content">
                                            <div class="wrap-vertical-nav">
                                                <ul>
                                                    <li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Returns</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Order History</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">We Using Safe Payments:</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item wrap-gallery">
                                            <img src="assets/images/payment.png" style="max-width: 260px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Social network</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item social-network">
                                            <ul>
                                                <li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Dowload App</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item apps-list">
                                            <ul>
                                                <li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="assets/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
                                                <li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="assets/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="coppy-right-box">
                    <div class="container">
                        <div class="coppy-right-item item-left">
                            <p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
                        </div>
                        <div class="coppy-right-item item-right">
                            <div class="wrap-nav horizontal-nav">
                                <ul>
                                    <li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
                                    <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
                                    <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
                                    <li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
        <script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/chosen.jquery.min.js"></script>
        <script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/js/functions.js"></script>
        <script type="text/javascript" src="assets/particles.js"></script>
        <script type="text/javascript" src="assets/app.js"></script>
        <!--footer area-->
        @endsection
    </body>
</html>
