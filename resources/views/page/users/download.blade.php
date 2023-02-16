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