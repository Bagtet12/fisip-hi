@extends('template.template')
<<<<<<< HEAD:resources/views/page/users/news/press-release.blade.php
@section('hover')
            <!-- Inspiro Slider -->
            <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
                <!-- Slide 1 -->
                <div class="slide kenburns" data-bg-image="homepages/creative/images/slider/1.jpg">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="slide-captions text-center">
                            <!-- Captions -->
                            <h2 class="text-light">Student</h2>
                            {{-- <h4 class="m-b-20 text-light">Set your goals high, and don't stop till you get there.</h4>
                            <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                            <!-- end: Captions -->
                        </div>
                    </div>
=======
@section('header')
<!-- Header -->
<header id="header" data-transparent="true" class="dark">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo"> <a href="{{route('home')}}"><span class="logo-default">Logo</span><span class="logo-dark">Logo</span></a> </div>
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
                                    <li><a href="">Introduction</a>
                                    </li>
                                    <li><a href="{{route('lecture')}}">Lecture & Staff</a>
                                    </li>
                                    <li class="dropdown-submenu"><a href="{{route('structure-organization')}}">Student Corner</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Himahi</a>
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
                            <li class="dropdown"><a href="{{route('academic')}}">Publication And Research</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('publication-research')}}">Book</a>
                                    </li>
                                    <li><a href="{{route('testimony')}}">Article/Proceeding</a>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('news')}}">News</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('publication-research')}}">Student</a>
                                        </li>
                                        <li><a href="{{route('testimony')}}">Lecturer</a>
                                        </li>
                                        <li><a href="{{route('testimony')}}">Press Release</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('testimony')}}">Testimony</a></li>
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
    @endsection
    @section('hover')
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
        <div class="slide kenburns" data-bg-image="homepages/creative/images/slider/1.jpg">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center">
                    <!-- Captions -->
                    <h2 class="text-light">Student</h2>
                    {{-- <h4 class="m-b-20 text-light">Set your goals high, and don't stop till you get there.</h4>
                    <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                    <!-- end: Captions -->
>>>>>>> master:resources/views/page/users/academic/publication-research.blade.php
                </div>
            </div>
        </div>
        <!-- end: Slide 1 bu-->
        <!-- Slide 2 -->
        <div class="slide slide-dark kenburns" data-bg-image="homepages/creative/images/slider/2.jpg">
            <div class="bg-overlay" data-style="1"></div>
            <div class="container">
                <div class="slide-captions text-dark text-center">
                    <!-- Captions -->
                    <h2>Student</h2>
                    {{-- <h4 class="m-b-20">Set your goals high, and don't stop till you get there.</h4>
                    <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                    <!-- end: Captions -->
                </div>
            </div>
            
        </div>
        <!-- end: Slide 2 -->
    </div>
    <!--end: Inspiro Slider -->
    <nav id="dotsMenu">
        <ul>
            <li><a href="#slider"><span>Home</span></a></li>
            <li><a href="#section2"><span>Academic</span></a></li>
            {{-- <li><a href="#section3"><span>Process</span></a></li>
            <li><a href="#section4"><span>Mission</span></a></li>
            <li><a href="#section5"><span>Blog</span></a></li>
            <li><a href="#section6"><span>Clients</span></a></li> --}}
            <li><a href="#footer"><span>Contact me</span></a></li>
        </ul>
    </nav>
    @endsection
    @section('content')
    <section class="page-content">
        <div class="container">
            <!-- Portfolio -->
            <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                <!-- portfolio item -->
                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                        </div>
                        {{-- <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h2>Description</h2>
                                <span></span>
                                <h3>Adress</h3>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <!-- end: portfolio item -->
                <!-- portfolio item -->
                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h2>Judul</h2>
                                <span>Tanggal</span>
                                <h3>Berita</h3>
                            </a>
                        </div>
                    </div>
                    <a href="{{route('page-news')}}" class="item-link" style="margin-left: 80%">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- end: portfolio item -->
            </div>
            <!-- Portfolio -->
            <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                <!-- portfolio item -->
                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                        </div>
                        {{-- <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h2>Description</h2>
                                <span></span>
                                <h3>Adress</h3>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <!-- end: portfolio item -->
                <!-- portfolio item -->
                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h2>Judul</h2>
                                <span>Tanggal</span>
                                <h3>Berita</h3>
                            </a>
                        </div>
                    </div>
                    <a href="{{route('page-news')}}" class="item-link" style="margin-left: 80%">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- end: portfolio item -->
            </div>
            <!-- Portfolio -->
            <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                <!-- portfolio item -->
                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                        </div>
                        {{-- <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h2>Description</h2>
                                <span></span>
                                <h3>Adress</h3>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <!-- end: portfolio item -->
                <!-- portfolio item -->
                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h2>Judul</h2>
                                <span>Tanggal</span>
                                <h3>Berita</h3>
                            </a>
                        </div>
                    </div>
                    <a href="{{route('page-news')}}" class="item-link" style="margin-left: 80%">Read More <i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- end: portfolio item -->
            </div>
        </div>
    </section>
    @endsection