<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/hi-logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Hubungan International Universitas Jember</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
{{-- @yield('header') --}}
        <!-- Header -->
        
<header id="header" data-transparent="true" class="dark">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="#" class="logo" data-dark-logo="images/hi-logo-removebg.png">
                    <img src="images/hi-logo-removebg.png" alt="Polo Logo">
                </a>
            </div>
            <!--End: Logo-->
            <!-- Search -->
            <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div>
            <!-- end: search -->
            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>      
                        <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>    
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="dropdown"><a href="{{route('profile')}}">Profile</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('profile-introduction')}}">Introduction</a>
                                    </li>
                                    <li><a href="{{route('profile-lecture-staff')}}">Lecture & Staff</a>
                                    </li>
                                    <li class="dropdown-submenu"><a href="{{route('profile-student-corner')}}">Student Corner</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('profile-student-corner-himahi')}}">Himahi</a>
                                            </li>
                                            <li><a href="#">Activities</a>
                                            </li>
                                            <li><a href="#">Student's Achievment Submission</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('facillitas')}}">Facilitas</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('academic')}}">Academic</a></li>
                            <li class="dropdown"><a href="#">Publication And Research</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Book</a>
                                    </li>
                                    <li><a href="#">Article/Proceeding</a>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('news')}}">News</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('news-student')}}">Student</a>
                                        </li>
                                        <li><a href="{{route('news-lecturer')}}">Lecturer</a>
                                        </li>
                                        <li><a href="{{route('news-press-release')}}">Press Release</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Testimony</a></li>
                                <li><a href="{{route('download')}}">Download</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->
            </div>
        </div>
    </header>
    <!-- end: Header -->
@yield('hover')

@yield('content')

@yield('content2')

@yield('content3')

@yield('content4')

        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">

                                <div class="widget-title">Contact</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br> All rights reserved. Copyright © 2021. INSPIRO.</p>
                                {{-- <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a> --}}
                            </div>
                            <div class="col-lg-12 m-b-30">
                                <h4>We are social</h4>
                                <div class="social-icons social-icons-light social-icons-colored-hover">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li class="social-skype"><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li class="social-behance"><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li class="social-flickr"><a href="#"><i class="fab fa-flickr"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Updates</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Customers</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Pages</div>
                                        <ul class="list">
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">Copyright &copy; 2023 Hubungan International Universitas Jember</div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!--Template functions-->
    <script src="{{ asset('js/functions.js') }}"></script>

</body>

</html>