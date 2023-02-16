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
                            <h2 class="text-light">Press Release</h2>
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
                            <h2>Press Release</h2>
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
                                                        <a href="#"><img src="images/press release/14 april 2022.jpg" alt="" style="width: 420px; height: 280px; margin-left: 35px"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: portfolio item -->
                                            <!-- portfolio item -->
                                            <div class="portfolio-item no-overlay img-zoom ct-photography ct-marketing ct-media">
                                                <div class="portfolio-item-wrap">
                                                    <div class="portfolio-description">
                                                            <h2 style="text-align: justify; font-size: 23px; ">International Relations University of Jember Prepares FIBAA International Accreditation</h2>
                                                            <h2 style="font-size: 20px">Date  : <span style="color: blue; font-size: 20px">April 14, 2022</span> </h2>
                                                            <h3 style="text-align: justify; line-height: 23px">International Relations University of Jember is preparing to apply for international accreditation at the Foundation for International Business Administration Accreditation (FIBAA). This preparation was carried out in order to improve the quality of the study program and achieve the 8th point Indikator Kinerja Utama (IKU).</h3>
                                                            <br>
                                                            <h3 style="text-align: justify; line-height: 23px">Therefore, on 14-17 April 2022, UNEJ's International Relations held preparation for FIBAA international accreditation with the title "Kualitas Pengelolaan Program Studi Ilmu Hubungan Internasional Melalui Focus Group Discussion (FGD) Penyusunan Self Evaluation Report (SER) untuk Akreditasi Internasional” in Banyuwangi. This meeting was attended by lecturers from the International Relations University of Jember and the dean of the Faculty of Social and Political Sciences University of Jember.</h3>
                                                            <br>
                                                            <h3 style="text-align: justify; line-height: 23px">This preparation produces a Self-Assessment Report (SER) document which will be submitted in July 2022. A visitation will also be held in April 2023 to support the success of this international accreditation application.</h3>
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