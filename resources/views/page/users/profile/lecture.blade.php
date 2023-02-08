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
                            <font size="5""><h1 class="text-light">Visiting Lecture</h1></font>
                            {{-- <h4 class="m-b-20 text-light">Set your goals high, and don't stop till you get there.</h4> --}}
                            {{-- <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
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
                            <font size="5"><h1 class="text-dark">Visiting Lecture</h1></font>
                            {{-- <h4 class="m-b-20">Set your goals high, and don't stop till you get there.</h4> --}}
                            {{-- <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                            <!-- end: Captions -->
                        </div>
                    </div>
    
                </div>
                <!-- end: Slide 2 -->
            </div>
            <!--end: Inspiro Slider -->
@endsection
@section('content')
            <!-- TEAM -->
            <section id="page-content" class="sidebar-booth">
            
                <div class="container">
                    <div class="row team-members team-members-circle m-b-30">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/6.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Alea Smith</h3>
                                    <span>University Of Jember</span>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p> --}}
                                    {{-- <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div> --}}
                                </div>
                                <a href="#" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/7.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Ariol Doe</h3>
                                    <span>University Of Jember</span>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p> --}}
                                    {{-- <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div> --}}
                                </div>
                                <a href="#" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/8.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Emma Ross</h3>
                                    <span>University Of Jember</span>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p> --}}
                                    {{-- <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div> --}}
                                </div>
                                <a href="#" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/9.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Victor Loda</h3>
                                    <span>University Of Jember</span>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p> --}}
                                    {{-- <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div> --}}
                                </div>
                                <a href="#" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end: TEAM -->
@endsection