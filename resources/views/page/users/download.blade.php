@extends('template.template')
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
                                    <li><a href="{{route('staff')}}">Lecture & Staff</a>
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
                            <li class="dropdown"><a href="#">Publication And Research</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Book</a>
                                    </li>
                                    <li><a href="#">Article/Proceeding</a>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">News</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('publication-research')}}">Student</a>
                                        </li>
                                        <li><a href="{{route('testimony')}}">Lecturer</a>
                                        </li>
                                        <li><a href="{{route('press-release')}}">Press Release</a>
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
                            <h2 class="text-light">Guide Book</h2>
                            {{-- <h4 class="m-b-20 text-light">Set your goals high, and don't stop till you get there.</h4>
                            <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                            <!-- end: Captions -->
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
                            <h2>Guide Book</h2>
                            {{-- <h4 class="m-b-20">Set your goals high, and don't stop till you get there.</h4>
                            <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                            <!-- end: Captions -->
                        </div>
                    </div>
    
                </div>
                <!-- end: Slide 2 -->
            </div>
            <!--end: Inspiro Slider -->
@endsection
@section('content')
<section class="page-content">
    <div class="container">
        <h2>Academic Guidebook</h2>
        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="portfolio-page-grid-gallery.html">
                            <h2>Title</h2>
                            <span></span>
                            <h3></h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="portfolio-page-grid-gallery.html">
                            <h2>title</h2>
                            <span></span>
                            <h3></h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <h2>Department Guidebook</h2>
        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="portfolio-page-grid-gallery.html">
                            <h2>Title</h2>
                            <span></span>
                            <h3></h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <a href="portfolio-page-grid-gallery.html">
                            <h2>title</h2>
                            <span></span>
                            <h3></h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- @section('content')
            <!-- PRACTICE AREAS -->
            <section id="section2" class="p-t-100">
                <div class="container">
                    {{-- <div class="heading-text heading-section text-center">
                        <h2>Reference</h2>
                        <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <div class="icon-box effect medium square color">
                                <h3>Academic Handbook</h3>
                                <div class="icon"> <a href="#"><i class="fa fa-book"></i></a></div>
                                <p><a href=""> Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                    cursumus.</p></a>
                                    <div class="icon"> <a href="#"><i class="fa fa-boock"></i></a></div>
                                <p><a href=""> Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                    cursumus.</p></a>
                                    <div class="icon"> <a href="#"><i class="fa fa-book"></i></a></div>
                                <p><a href=""> Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                    cursumus.</p></a>
                                    <div class="icon"> <a href="#"><i class="fa fa-book"></i></a></div>
                                <p><a href=""> Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                    cursumus.</p></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- end: PRACTICE AREAS -->
{{-- @endsection  --}}