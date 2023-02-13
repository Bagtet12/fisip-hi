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
                            <h2 class="text-light">Facility</h2>
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
                            <h2>Facility</h2>
                            {{-- <h4 class="m-b-20">Set your goals high, and don't stop till you get there.</h4>
                            <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                            <!-- end: Captions -->
                        </div>
                    </div>
    
                </div>
                <!-- end: Slide 2 -->
            </div>
            <!--end: Inspiro Slider -->
            <nav id="dotsMenu">
                <ul>
                    <li><a href="#slider"><span>Home</span></a></li>
                    <li><a href="#section2"><span>Academic</span></a></li>
                    {{-- <li><a href="#section3"><span>Process</span></a></li>
                    <li><a href="#section4"><span>Mission</span></a></li>
                    <li><a href="#section5"><span>Blog</span></a></li>
                    <li><a href="#section6"><span>Clients</span></a></li> --}}
                    <li><a href="#footer"><span>Contact me</span></a></li>
                </ul>
            </nav>
@endsection
@section('content')
        <section class="page-content">
            <div class="container">
                <h2>Lembaga Kajian Politik dan Kawasan</h2>
                            <!-- Portfolio -->
                            <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                                <!-- portfolio item -->
                                <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-slider">
                                            <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                                <a href="#"><img src="images/portfolio/64.jpg" alt=""></a>
                                                {{-- <a href="#"><img src="images/portfolio/70.jpg" alt=""></a> --}}
                                            </div>
                                        </div>
                                        {{-- <div class="portfolio-description">
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h3>Adress</h3>
                                                <span></span>
                                                <h4>Description</h4>
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-description">
                                            <a href="portfolio-page-grid-gallery.html">
                                                <h2>Description</h2>
                                                <span></span>
                                                <h3>Adress</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                            </div>
                        </div>
                        <div class="container">
                            <h2>Center Of Diplomacy</h2>
                                        <!-- Portfolio -->
                                        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                                            <!-- portfolio item -->
                                            <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-slider">
                                                        <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                                            <a href="#"><img src="images/portfolio/64.jpg" alt=""></a>
                                                            <a href="#"><img src="images/portfolio/70.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="portfolio-description">
                                                        <a href="portfolio-page-grid-gallery.html">
                                                            <h3>Adress</h3>
                                                            <span></span>
                                                            <h4>Deskripsi</h4>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <!-- end: portfolio item -->
                                            <!-- portfolio item -->
                                            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                                <div class="portfolio-item-wrap">
                                                    {{-- <div class="portfolio-image">
                                                        <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                                                    </div> --}}
                                                    <div class="portfolio-description">
                                                        <a href="portfolio-page-grid-gallery.html">
                                                            <h2>Description</h2>
                                                            <span></span>
                                                            <h3>Adress</h3>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: portfolio item -->
                                        </div>
                                    </div>
                                    <div class="container">
                                        <h2>Center Of Global Trade</h2>
                                                    <!-- Portfolio -->
                                                    <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                                                        <!-- portfolio item -->
                                                        <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                                                            <div class="portfolio-item-wrap">
                                                                <div class="portfolio-slider">
                                                                    <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                                                        <a href="#"><img src="images/portfolio/64.jpg" alt=""></a>
                                                                        <a href="#"><img src="images/portfolio/70.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="portfolio-description">
                                                                    <a href="portfolio-page-grid-gallery.html">
                                                                        <h3>Towel World</h3>
                                                                        <span>Graphics</span>
                                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                                                                    </a>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                        <!-- end: portfolio item -->
                                                        <!-- portfolio item -->
                                                        <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                                            <div class="portfolio-item-wrap">
                                                                {{-- <div class="portfolio-image">
                                                                    <a href="#"><img src="images/portfolio/60.jpg" alt=""></a>
                                                                </div> --}}
                                                                <div class="portfolio-description">
                                                                    <a href="portfolio-page-grid-gallery.html">
                                                                        <h2>Description</h2>
                                                                        <span></span>
                                                                        <h3>Address</h3>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end: portfolio item -->
                                                    </div>
                                                </div>
        </section>
@endsection