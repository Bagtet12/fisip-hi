@extends('template.template')
@section('hover')
            <!-- Inspiro Slider -->
            <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
                <!-- Slide 1 -->
                <div class="slide kenburns" data-bg-image="homepages/creative/images/slider/1.jpg">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="slide-captions text-center">
                            <!-- Captions -->
                            <font size="5""><h1 class="text-light">Himahi</h1></font>
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
                            <font size="5"><h1 class="text-dark">Himahi</h1></font>
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
                                        <h1 style="text-align: center">Deskripsi</h1>
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