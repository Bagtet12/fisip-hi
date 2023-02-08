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
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="480">
        <!-- Slide 1 -->
        <div class="slide kenburns" data-bg-image="homepages/creative/images/slider/1.png">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center">
                    <!-- Captions -->
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 bu-->
        <!-- Slide 2 -->
        <div class="slide  kenburns" data-bg-image="homepages/creative/images/slider/2.png">
            <div class="bg-overlay" ></div>
            <div class="container">
            </div>
            
        </div>
        <!-- end: Slide 2 -->
        <div class="slide  kenburns" data-bg-image="homepages/creative/images/slider/3.png">
            <div class="bg-overlay" ></div>
            <div class="container">
            </div>
        </div>
        <div class="slide  kenburns" data-bg-image="homepages/creative/images/slider/4.jpg">
            <div class="bg-overlay" ></div>
            <div class="container">
            </div>
        </div>
    </div>
    <!--end: Inspiro Slider -->
    <nav id="dotsMenu">
        <ul>
            <li><a href="#slider"><span>Home</span></a></li>
            <li><a href="#welcome"><span>Visi Misi</span></a></li>
            <li><a href="#section3"><span>What We Do</span></a></li>
            <li><a href="#section4"><span>Mhat We Do 2</span></a></li>
            <li><a href="#section5"><span>Lecture</span></a></li>
            {{-- <li><a href="#section6"><span>Clients</span></a></li> --}}
            <li><a href="#footer"><span>Contact</span></a></li>
        </ul>
    </nav>
    @endsection
    @section('content')
    <!-- WELCOME -->
    <section id="welcome" class="p-b-0">
        <div class="container">
            
            {{-- <div class="row" data-animate="fadeInUp">
                <div class="col-lg-12">
                    <img class="img-fluid" src="images/other/responsive-1.jpg" alt="Welcome to POLO">
                    <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                </div>
            </div> --}}
            <section class="background-grey" id="section5"> 
                <div class="container">
                    <div class="page-title">
                        <h2>Latest News</h2>
                    </div>
                    <br>
                    <div class="row team-members">
                        <div class="col-lg-4">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/6.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Alea Smith</h3>
                                    <span>Software Developer</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                    <div class="align-center">
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
                                    </div>
                                </div>
                                <a href="{{route('page-news')}}" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/7.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Ariol Doe</h3>
                                    <span>Software Developer</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                    <div class="align-center">
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
                                    </div>
                                </div>
                                <a href="{{route('page-news')}}" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/8.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Emma Ross</h3>
                                    <span>Software Developer</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                    <div class="align-center">
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
                                    </div>
                                </div>
                                <a href="{{route('page-news')}}" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-16">
                            <a href="{{route('news')}}" class="item-link" style="margin-left: 64%; float:right">Load More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <!--Team members -->
                    {{-- <div class="heading-text heading-line text-center">
                        <h4>Visiting Lecture</h4>
                    </div> --}}
                    {{-- <div class="row team-members team-members-circle m-b-30">
                        <div class="col-lg-3">
                            <div class="team-member">
                                <div class="team-image">
                                    <img src="images/team/6.jpg">
                                </div>
                                <div class="team-desc">
                                    <h3>Alea Smith</h3>
                                    <span>Software Developer</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                    <div class="align-center">
                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span></a>
                                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                                <i class="fab fa-twitter"></i>
                                                <span>Twitter</span></a>
                                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                                    <i class="fab fa-instagram"></i>
                                                    <span>Instagram</span></a>
                                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                                        <i class="icon-mail"></i>
                                                        <span>Mail</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="heading-text heading-line text-center">
                                        <h4>Visiting Lecture</h4>
                                    </div>
                                    <div class="row team-members team-members-circle m-b-30">
                                        <div class="col-lg-3">
                                            <div class="team-member">
                                                <div class="team-image">
                                                    <img src="images/team/6.jpg">
                                                </div>
                                                <div class="team-desc">
                                                    <h3>Alea Smith</h3>
                                                    <span>Software Developer</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                                    <div class="align-center">
                                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                                            <i class="fab fa-facebook-f"></i>
                                                            <span>Facebook</span></a>
                                                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                                                <i class="fab fa-twitter"></i>
                                                                <span>Twitter</span></a>
                                                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                                                    <i class="fab fa-instagram"></i>
                                                                    <span>Instagram</span></a>
                                                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                                                        <i class="icon-mail"></i>
                                                                        <span>Mail</span></a>
                                                                    </div>
                                                                </div>
                                                                <a href="{{route('page-news')}}" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="team-member">
                                                                <div class="team-image">
                                                                    <img src="images/team/6.jpg">
                                                                </div>
                                                                <div class="team-desc">
                                                                    <h3>Alea Smith</h3>
                                                                    <span>Software Developer</span>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                                                    <div class="align-center">
                                                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                                                            <i class="fab fa-facebook-f"></i>
                                                                            <span>Facebook</span></a>
                                                                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                                                                <i class="fab fa-twitter"></i>
                                                                                <span>Twitter</span></a>
                                                                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                                                                    <i class="fab fa-instagram"></i>
                                                                                    <span>Instagram</span></a>
                                                                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                                                                        <i class="icon-mail"></i>
                                                                                        <span>Mail</span></a>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="{{route('page-news')}}" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="team-member">
                                                                                <div class="team-image">
                                                                                    <img src="images/team/6.jpg">
                                                                                </div>
                                                                                <div class="team-desc">
                                                                                    <h3>Alea Smith</h3>
                                                                                    <span>Software Developer</span>
                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                                                                    <div class="align-center">
                                                                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                                                                            <i class="fab fa-facebook-f"></i>
                                                                                            <span>Facebook</span></a>
                                                                                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                                                                                <i class="fab fa-twitter"></i>
                                                                                                <span>Twitter</span></a>
                                                                                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                                                                                    <i class="fab fa-instagram"></i>
                                                                                                    <span>Instagram</span></a>
                                                                                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                                                                                        <i class="icon-mail"></i>
                                                                                                        <span>Mail</span></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="{{route('page-news')}}" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-3">
                                                                                            <div class="team-member">
                                                                                                <div class="team-image">
                                                                                                    <img src="images/team/6.jpg">
                                                                                                </div>
                                                                                                <div class="team-desc">
                                                                                                    <h3>Alea Smith</h3>
                                                                                                    <span>Software Developer</span>
                                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                                                                                    <div class="align-center">
                                                                                                        <a class="btn btn-xs btn-slide btn-light" href="#">
                                                                                                            <i class="fab fa-facebook-f"></i>
                                                                                                            <span>Facebook</span></a>
                                                                                                            <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                                                                                                <i class="fab fa-twitter"></i>
                                                                                                                <span>Twitter</span></a>
                                                                                                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                                                                                                    <i class="fab fa-instagram"></i>
                                                                                                                    <span>Instagram</span></a>
                                                                                                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                                                                                                        <i class="icon-mail"></i>
                                                                                                                        <span>Mail</span></a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <a href="{{route('page-news')}}" class="item-link" style="">Read More <i class="fa fa-arrow-right"></i></a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-16">
                                                                                                            <a href="{{route('news')}}" class="item-link" style="margin-left: 64%; float:right">Load More <i class="fa fa-arrow-right"></i></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    
                                                                                                    <!--END: Team members style 1-->
                                                                                                </div>
                                                                                            </section>
                                                                                        </div>
                                                                                    </section>
                                                                                    <!-- end: WELCOME -->
                                                                                    @endsection
                                                                                    