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
                            <h2 class="text-light">Article</h2>
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
                            <h2>Article</h2>
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
        <h2 style="text-align: center">Academic Guidebook</h2>
        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <div class="team-image">
                            <a href="#">
                                <img alt="" src="images/book cover/03 gastrodiplomasi.jpeg" style="width: 150px; margin-left: 20px">
                            </a>
                        </div>
                        <a href="portfolio-page-grid-gallery.html">
                            <h2>Title</h2>
                            <h3>Penulis</h3>
                            <h4>Tahun</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-description">
                <div class="team-image">
                    <a href="#">
                        <img alt="" src="images/book cover/03 gastrodiplomasi.jpeg" style="width: 150px; margin-left: 20px">
                    </a>
                </div>
                <a href="portfolio-page-grid-gallery.html">
                    <h2>Title</h2>
                    <h3>Penulis</h3>
                    <h4>Tahun</h4>
                </a>
            </div>
        </div>
        <h2 style="text-align: center">Department Guidebook</h2>
        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                    </div>
                    <div class="portfolio-description">
                        <div class="team-image">
                            <a href="#">
                                <img alt="" src="images/book cover/03 gastrodiplomasi.jpeg" style="width: 150px; margin-left: 20px">
                            </a>
                        </div>
                        <a href="portfolio-page-grid-gallery.html">
                            <h2>Title</h2>
                            <h3>Penulis</h3>
                            <h4>Tahun</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-description">
                <div class="team-image">
                    <a href="#">
                        <img alt="" src="images/book cover/03 gastrodiplomasi.jpeg" style="width: 150px; margin-left: 20px">
                    </a>
                </div>
                <a href="portfolio-page-grid-gallery.html">
                    <h2>Title</h2>
                    <h3>Penulis</h3>
                    <h4>Tahun</h4>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection