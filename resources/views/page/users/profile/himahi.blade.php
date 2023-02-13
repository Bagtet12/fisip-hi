@extends('template.template')
@section('hover')
            <!-- Inspiro Slider -->
            <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
                <!-- Slide 1 -->
                <div class="slide kenburns" data-bg-image="homepages/creative/images/slider/1.png">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="slide-captions text-center">
                            <!-- Captions -->
                            <font size="5""><h1 class="text-light">Himahi</h1></font>
                            <!-- end: Captions -->
                        </div>
                    </div>
                </div>
                <!-- end: Slide 1 bu-->
                <!-- Slide 2 -->
                <div class="slide slide-dark kenburns" data-bg-image="homepages/creative/images/slider/2.png">
                    <div class="bg-overlay" data-style="1"></div>
                    <div class="container">
                        <div class="slide-captions text-dark text-center">
                            <!-- Captions -->
                            <font size="5"><h1 class="text-dark">Himahi</h1></font>
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
                    <!-- Sidebar-->
                    <div class="sidebar sticky-sidebar col-lg-3">
                    </div>
                    <!-- end: Sidebar-->
                    <!-- post content -->
                    <div class="content col-lg-6">
                        <!-- Blog -->
                        <div id="blog">
                            <!-- Post item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="team-image">
                                        <a href="#">
                                            <img alt="" src="images/blog/12.jpg">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h1 style="text-align: center">Himahi</h1>
                                        <h2 style="text-align: justify">The International Relations Student Association (HIMAHI) the University of Jember is an intra-organization that gathers students in the realm of International Relations major, Faculty of Social and Political Sciences, University of Jember. This organization was formed as a forum to develop all the potential possessed by International Relations students both academically and non-academically. Currently, HIMAHI has a core board, 5 (five) divisions, and 1 (one) bureau.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="team-image">
                                        <a href="#">
                                            <img alt="" src="images/blog/12.jpg">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h1 style="text-align: center">Structure Organization</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Blog -->
                    </div>
                    <!-- end: post content -->
                    
                </div>
            </div>
        </section>
        <!-- end: Content -->   
@endsection