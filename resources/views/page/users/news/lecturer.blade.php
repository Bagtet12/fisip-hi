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
                            <h2 class="text-light">Lecture</h2>
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
                            <h2>Lecture</h2>
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
                                        <!-- Portfolio -->
                                        <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                                            <!-- portfolio item -->
                                            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-image">
                                                        <a href="#"><img src="images/lecturer/12 october 2021.jpg" alt="" style="width: 420px; margin-left: 35px"></a>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-image">
                                                        <a href="#"><img src="images/lecturer/12 october 2021_2.png" alt="" style="width: 420px; height: 145px;;margin-left: 35px"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: portfolio item -->
                                            <!-- portfolio item -->
                                            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-description">
                                                            <h2 style="text-align: justify; font-size: 23px; ">Introducing Indonesian Gastrodiplomacy: <p style="font-size: 22px">Dr. Agus enlivens the 37th AJI Frontier Seminar in Japan</p> </h2>
                                                            <h2 style="font-size: 20px">Date  : <span style="color: blue; font-size: 20px">October 12, 2021</span> </h2>
                                                            <h3 style="text-align: justify; line-height: 23px">International Relations lecturer of Jember University, Dr. Agus Trihartono, attended the 37th AJI Frontier Seminar in Japan with the theme "Indonesia's Gastrodiplomacy in the Making: A Preliminary Study". </h3>
                                                            <br>
                                                            <h3 style="text-align: justify; line-height: 23px">Dr. Agus explained that gastrodiplomacy is a country's strategy to improve its branding and image by optimizing its national culinary potential. He pointed out that there are already several Asian countries that have successfully used this strategy. Unfortunately, Indonesia has yet to fully optimize its culinary diversity despite the fact that Indonesia is one of the largest exporters of coffee and spices in Asia.</h3>
                                                            <br>
                                                            <h3 style="text-align: justify; line-height: 23px">During the seminar, Dr. Agus mentioned the "Indonesia Spices Up the World" program planned by President Joko Widodo. The target of this program is to expand Indonesia's restaurant network in the world and increase spice exports. This indicates that Indonesia's Gastrodiplomacy also emphasizes economic development, not limited to cultural promotion. The presentation attracted high curiosity from the participants.</h3>
                                                            <br>
                                                    </div>
                                                </div>
                                                <a href="{{route('page-news')}}" class="item-link" style="margin-left: 80%; ">Read More <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                            <!-- end: portfolio item -->
                                        </div>
        </div>
    </section>
@endsection