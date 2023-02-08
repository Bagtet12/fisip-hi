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
                                    <li><a href="{{route('structure-organization')}}"">Structure Organisation</a>
                                    </li>
                                    <li><a href="{{route('facillitas')}}">Facilitas</a>
                                    </li>
                                    <li><a href="{{route('lecture')}}">Lecture</a>
                                    </li>
                                    <li><a href="{{route('staff')}}">Staff</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{route('academic')}}">Academic</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('publication-research')}}">Publication And Research</a>
                                    </li>
                                    <li><a href="{{route('testimony')}}">Testimony</a>
                                    </ul>
                                </li>
                                {{-- <li><a href="index.html">Academic</a></li> --}}
                                <li><a href="{{route('news')}}">News</a></li>
                                {{-- <li><a href="index.html">Publication And Research</a></li> --}}
                                {{-- <li><a href="index.html">Testimony</a></li> --}}
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
                                <h1 class="text-light">Berita</h1>
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
                                <h1>Berita</h1>
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
            <!-- Content -->
            <section id="page-content" class="sidebar-both">
                <div class="container">
                    <div class="row">
                        {{-- <!-- Sidebar-->
                        <div class="sidebar col-lg-3">
                            <!-- Twitter widget -->
                            <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                                <h4 class="widget-title">Recent Tweets</h4>
                            </div>
                            <!-- end: Twitter widget-->
                            <!--widget tags -->
                            <div class="widget  widget-tags">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tags">
                                    <a href="#">Design</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Digital</a>
                                    <a href="#">Branding</a>
                                    <a href="#">HTML</a>
                                    <a href="#">Clean</a>
                                    <a href="#">Peace</a>
                                    <a href="#">Love</a>
                                    <a href="#">CSS3</a>
                                    <a href="#">jQuery</a>
                                </div>
                            </div>
                            <!--end: widget tags -->
                        </div>
                        <!-- end: Sidebar--> --}}
                        <!-- Content -->
                        <div class="content col-lg-9">
                            <!-- Portfolio -->
                            <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                                <!-- portfolio item -->
                                <div class="portfolio-item light-bg no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-slider">
                                            <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                                <a href="#"><img src="images/portfolio/64.jpg" alt=""></a>
                                                <a href="#"><img src="images/portfolio/70.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-description">
                                            <br>
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <br>
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3><a href="">Towel World</a></h3>
                                                <p>Graphics</p>
                                                <a href="#" class="item-link" style="margin-left: 64%">Read More <i class="fa fa-arrow-right" style="size: 1ch"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item light-bg no-overlay img-zoom ct-photography ct-marketing ct-media">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-image">
                                            <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                                        </div>
                                        <div class="portfolio-description">
                                            <br>
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <br>
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3>Paper Pouch</h3>
                                                <p>Branding / Graphics</p>
                                                <a href="#" class="item-link" style="margin-left: 64%">Read More <i class="fa fa-arrow-right" style="size: 1ch"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item light-bg no-overlay img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-image">
                                            <a href="#"><img src="images/portfolio/65.jpg" alt=""></a>
                                        </div>
                                        <div class="portfolio-description">
                                            <br>
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <br>
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3>Towel World</h3>
                                                <p>Graphics</p>
                                                <a href="#" class="item-link" style="margin-left: 64%">Read More <i class="fa fa-arrow-right" style="size: 1ch"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item light-bg no-overlay img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-image">
                                            <a href="#"><img src="images/portfolio/66.jpg" alt=""></a>
                                        </div>
                                        <div class="portfolio-description">
                                            <br>
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <br>
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3>Last Iceland Sunshine</h3>
                                                <p>Graphics</p>
                                                <a href="#" class="item-link" style="margin-left: 64%">Read More <i class="fa fa-arrow-right" style="size: 1ch"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item light-bg no-overlay img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-image">
                                            <a href="#"><img src="images/portfolio/67.jpg" alt=""></a>
                                        </div>
                                        <div class="portfolio-description">
                                            <br>
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <br>
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3>Towel World</h3>
                                                <p>Graphics</p>
                                                <a href="#" class="item-link" style="margin-left: 64%">Read More <i class="fa fa-arrow-right" style="size: 1ch"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item light-bg no-overlay ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-slider">
                                            <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                                <a href="#"><img src="images/portfolio/68.jpg" alt=""></a>
                                                <a href="#"><img src="images/portfolio/71.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-description">
                                            <br>
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <br>
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3>Towel World</h3>
                                                <p>Graphics</p>
                                                <a href="#" class="item-link" style="margin-left: 64%">Read More <i class="fa fa-arrow-right" style="size: 1ch"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item light-bg no-overlay img-zoom ct-photography ct-marketing ct-media">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-image">
                                            <a href="#"><img src="images/portfolio/69.jpg" alt=""></a>
                                        </div>
                                        <div class="portfolio-description">
                                            <br>
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <br>
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3>Luxury Wine</h3>
                                                <p>Graphics / Branding</p>
                                                <a href="#" class="item-link" style="margin-left: 64%">Read More <i class="fa fa-arrow-right" style="size: 1ch"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item light-bg no-overlay img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-image">
                                            <a href="#"><img src="images/portfolio/70.jpg" alt=""></a>
                                        </div>
                                        <div class="portfolio-description">
                                            <br>
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                            <br>
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3>Last Iceland Sunshine</h3>
                                                <p>Graphics</p>
                                                <a href="#" class="item-link" style="margin-left: 64%">Read More <i class="fa fa-arrow-right" style="size: 1ch"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                            </div>
                            <!-- end: Portfolio -->
                        </div>
                        <!-- end: Content -->
                        <!-- Sidebar-->
                        <div class="sidebar col-lg-3">
                            <!--widget newsletter-->
                            <div class="widget  widget-newsletter">
                                <form class="widget-subscribe-form" novalidate action="include/subscribe-form.php" role="form" method="post">
                                    <h4 class="widget-title">Search Here</h4>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="search" name="search">
                                        <span class="input-group-btn">
                                            <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"><i class="icon-search"></i></button>
                                        </span> 
                                    </div>
                                </form>
                                 <!--Tabs with Posts-->
                            <div class="widget">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="images/blog/thumbnail/5.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">A true story, that never been told!</a>
                                            <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="images/blog/thumbnail/6.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Beautiful nature, and rare feathers!</a>
                                            <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="images/blog/thumbnail/7.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#">Lorem ipsum dolor sit amet</a>
                                            <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End: Tabs with Posts-->
                            </div>
                            <!--end: widget newsletter-->
                            <!-- Video -->
                            <div class="widget">
                                <h4 class="widget-title">Video</h4>
                                <iframe src="https://player.vimeo.com/video/56962340" width="500"></iframe>
                            </div>
                            <!-- end: Video -->
                        </div>
                        <!-- end: Sidebar-->
                    </div>
                </div>
            </section>
            <!-- end: Content -->
@endsection
