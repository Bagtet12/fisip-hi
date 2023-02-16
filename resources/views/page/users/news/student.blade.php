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
                            <h2 class="text-light">Student</h2>
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
                            <h2>Student</h2>
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
                                                        <a href="#"><img src="images/students/13 october 2022_oytw.jpg" alt="" style="width: 420px; margin-left: 35px"></a>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-image">
                                                        <a href="#"><img src="images/students/13 october 2022_oytw 1.png" alt="" style="width: 420px; margin-left: 35px"></a>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-image">
                                                        <a href="#"><img src="images/students/20 december 2022_taiwan.jpg" alt="" style="width: 380px; margin-left: 42px"></a>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-image">
                                                        <a href="#"><img src="images/students/20 december 2022_taiwan 2.jpg" alt="" style="width: 382px; margin-left: 45px"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: portfolio item -->
                                            <!-- portfolio item -->
                                            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-description">
                                                        <a href="portfolio-page-grid-gallery.html">
                                                            <h2 style="text-align: justify; font-size: 30px">IR Student Represents UNEJ for Outstanding Youth for the World 2022</h2>
                                                            <h2 style="font-size: 25px">Date  : <span style="color: blue; font-size: 25px">October 13, 2022</span> </h2>
                                                            <h3 style="text-align: justify; line-height: 23px">Outstanding Youth for the World (OYTW) is an annual program organized by the Ministry of Foreign Affairs of the Republic of Indonesia. This program provides opportunities for Indonesia's outstanding young generation to play a direct role in public diplomacy to strengthen Indonesia's image abroad.</h3>
                                                            <br>
                                                            <h3 style="text-align: justify; line-height: 23px">This program is conducted every year with various target participants. This year, the Ministry of Foreign Affairs of the Republic of Indonesia collaborated with the Consulate General of the Republic of Indonesia in Ho Chi Minh City to bring 10 Indonesian students from various regions to Vietnam to carry out many activities. During their three-day visit (9-12 October 2022), OYTW participants had the opportunity to visit the University of Social Sciences and Humanities, Ao Dai Museum, youth organizations, and even GAMELOFT --the largest gaming office in Southeast Asia. </h3>
                                                            <br>
                                                            <h3 style="text-align: justify; line-height: 23px">Not only traveling around, OYTW participants got the chance to interact directly with the amazing people they met there so that they can gain new insights and experiences about many things. OYTW participants were also brought together with Indonesian Diaspora who have successful careers in HCMC.</h3>
                                                            <br>
                                                            <h3 style="text-align: justify; line-height: 23px">By always carrying the hashtag #inidiplomasi (this is diplomacy), this program does not only aim to increase Indonesia's status and prestige, but also prepare the nation's young talents to take part in the international world.</h3>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a href="{{route('page-news')}}" class="item-link" style="margin-left: 80%; ">Read More <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                            <!-- end: portfolio item -->
                                        </div>
        </div>
    </section>
@endsection