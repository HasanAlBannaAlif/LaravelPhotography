<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trapped in Lens</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{asset('/public/front')}}/css/style.css">
    <!-- <link rel="stylesheet" href="{{asset('/public/front')}}/css/responsive.css"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="{{route('/')}}">
                                <h2 class="icon text-white">Trapped In Lens</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{route('/')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('albums')}}">Albums</a></li>
{{--                                    <li><a href="{{route('blog')}}">blog</a></li>--}}
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->
@yield('body')
<!-- JS here -->
<!-- footer start -->
<footer class="footer">
    <div class="copy-right_text">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-8">
                    <p class="copy_right ">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Banna</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="col-xl-5 col-md-4">
                    <div class="socail_links">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

<script src="{{asset('/public/front')}}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{asset('/public/front')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('/public/front')}}/js/popper.min.js"></script>
<script src="{{asset('/public/front')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/public/front')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('/public/front')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('/public/front')}}/js/ajax-form.js"></script>
<script src="{{asset('/public/front')}}/js/waypoints.min.js"></script>
<script src="{{asset('/public/front')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('/public/front')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('/public/front')}}/js/scrollIt.js"></script>
<script src="{{asset('/public/front')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('/public/front')}}/js/wow.min.js"></script>
<script src="{{asset('/public/front')}}/js/nice-select.min.js"></script>
<script src="{{asset('/public/front')}}/js/jquery.slicknav.min.js"></script>
<script src="{{asset('/public/front')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/public/front')}}/js/plugins.js"></script>
<script src="{{asset('/public/front')}}/js/gijgo.min.js"></script>

<!--contact js-->
<script src="{{asset('/public/front')}}/js/contact.js"></script>
<script src="{{asset('/public/front')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('/public/front')}}/js/jquery.form.js"></script>
<script src="{{asset('/public/front')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('/public/front')}}/js/mail-script.js"></script>

<script src="{{asset('/public/front')}}/js/main.js"></script>
</body>

</html>
