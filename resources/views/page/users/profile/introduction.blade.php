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
                            <font size="5""><h1 class="text-light">Introduction</h1></font>
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
                            <font size="5"><h1 class="text-dark">Introduction</h1></font>
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
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div id="blog" class="post-thumbnails">
                <!-- Post item-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="images/blog/12.jpg">
                            </a>
                        </div>
                        <div class="post-item-description">
                            {{-- <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span> --}}
                            <h2><a href="#">Kata Sambutan Bu Suyani
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
                <!-- Post item-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-item-description">
                            {{-- <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span> --}}
                            <h2><a href="#">History</a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="images/blog/12.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
            </div>
        </div>
    </section>
@endsection