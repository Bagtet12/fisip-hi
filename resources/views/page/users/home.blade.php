@extends('template.template')

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
                                                                                    