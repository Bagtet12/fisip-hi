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
                            <h2 class="text-light">Facility</h2>
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
                            <h2>Facility</h2>
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
                <h2>Regional Political Studies Laboratory (Lembaga Kajian Politik Kawasan (LKPK))</h2>
                            <!-- Portfolio -->
                            <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                                <!-- portfolio item -->
                                <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-slider">
                                            <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                                <a href="#"><img src="images/facility/lkpk1.jpeg" alt=""></a>
                                                <a href="#"><img src="images/facility/lkpk2.jpeg" alt=""></a>
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
                                                <h2 style="text-align: justify; font-size: 25px">Regional Political Studies Laboratory is one of the laboratories in the Department of International Relations. The activities of this laboratory include book reviews, organizing guest lectures, regional political studies, and research colloquiums for international relations students. In addition, the laboratory is also used as a place for students to work on course assignments and final projects. </h2>
                                                <span></span>
                                                <h3>Adress :<span style="color: blue; font-size: 18px">Room 02, 1st floor, IsDB Building</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                            </div>
                        </div>
            <div class="container">
                <h2>Centre for Diplomacy</h2>
                            <!-- Portfolio -->
                            <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                                <!-- portfolio item -->
                                <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-slider">
                                            <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                                <a href="#"><img src="images/facility/cfd1.jpeg" alt=""></a>
                                                <a href="#"><img src="images/facility/cfd2.jpeg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-description">
                                                <h2 style="text-align: justify; font-size: 25px">The presence of the Centre for Diplomacy Studies is not only to equip students with theories of diplomacy in the classroom but also to make students aware of technical matters related to diplomacy. In the Centre for Diplomacy, international relations students will learn several important practices in diplomacy including, Model United Nations (MUN), table manners, protocol, and legal drafting.</h2>
                                                <span></span>
                                                <h3>Adress :<span style="color: blue; font-size: 18px">Room 01, 2nd floor, IsDB Building</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                            </div>
                        </div>
            <div class="container">
                <h2>Centre for Global Trade</h2>
                            <!-- Portfolio -->
                            <div id="portfolio" class="grid-layout portfolio-2-columns" data-margin="20">
                                <!-- portfolio item -->
                                <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-slider">
                                            <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                                <a href="#"><img src="images/facility/cgt1.jpeg" alt=""></a>
                                                <a href="#"><img src="images/facility/cgt2.jpeg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                                <!-- portfolio item -->
                                <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                    <div class="portfolio-item-wrap">
                                        <div class="portfolio-description">
                                                <h2 style="text-align: justify; font-size: 25px">The Centre for Global Trade is a study and training center related to global trade in the Department of International Relations, University of Jember. The main function of the Centre for Global Trade as a means to practice or apply the theory of International Political Economy. Activities within the scope of management of the Centre for Global Trade include research cooperation, scientific discussions, simulations</h2>
                                                <span></span>
                                                <h3>Adress :<span style="color: blue; font-size: 18px">Room 04, 2nd floor, IsDB Building</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: portfolio item -->
                            </div>
                        </div>
        </section>
@endsection