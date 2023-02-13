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
                                <h1 class="text-light">Profile</h1>
                                <h4 class="m-b-20 text-light">Hubungan Internasional</h4>
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
                                <h1>Profile</h1>
                                <h4 class="m-b-20">Hubungan Internasional</h4>
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
            <!-- ABOUT ME -->
            <section id="easy-fast" class="text-light p-b-40" style="background-color:#973735;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="100">
                            <div class="heading-text heading-section">
                                <h1 class="text-medium">Vision And Mission</h1>
                            </div>
                        </div>
    
                        <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="300"><h3>Vision</h3><hr>
                            <br><span style="text-align: justify">To become an excellent study program in the development of International Relations with knowledge of a global business and industrial agriculture perspective.</span></div>
    
                        <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600"><h3>Mission</h3><hr>
                            <br><span>Developing an academic culture in the organization of education and teaching that is participatory, critical, innovative, and constructive.
                            </span>
                            <br> 
                            <h3>
                            Developing knowledge in the field of International Relations based on ethical, objective, and professional values in line with global dynamics.
                            </h3>
                            <br>
                            Producing and disseminating Tridharma in the field of International Relations in national and international scope.
                            <span>
                            <br>
                            Building networks with stakeholders in the fields of education and research.
                            </span>
                        </div>
    
                    </div>
                </div>
            </section>
            <!-- end: ABOUT ME -->    
@endsection
@section('content2')
             <!-- PROCESS -->
             <section class="box-fancy text-light" style="background-image:url(images/pattern-icons/5.png);">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="row">
                        <h1 style="text-align: center" class="text-lg text-uppercase">Introduction</h1>
                        <div class="col-lg-12 text-center" data-animate="fadeInUp" data-animate-delay="400">
                            <h3 class="text-bold" style="font-size: 30px">Welcome to the Department of International Relations
                                University of Jember!</h3>
                                <br>
                                <h4 style="text-align: justify">
                                    The Department of International Relations encourages students to understand the complexities of international relations such as diplomacy, cooperation and conflict, human security, international political economy, media and global political communication, and regional studies. More specifically, the Department of International Relations develops the study of International Gastrodiplomacy and Agribusiness as the uniqueness of the study program and as support for the realization of the University's vision.
                                </h4>
                                <br>
                                <h4 style="text-align: justify">
                                    We are committed to improving hard and soft skills that are useful for their future. We accomplish this by involving students in research and community service that can enhance their knowledge and skills. To that end, the Department of International Relations at the University of Jember develops the Political and Regional Studies Laboratory, the Diplomacy Laboratory, and the Export-Import and Customs Laboratory (international economic practicum).
                                </h4>
                                <br>
                                <h4 style="text-align: justify">
                                    We provide information about the International Relations major at the University of Jember on this website. However, if you need further information, please contact us.
                                </h4>
                                <br>
                                <h4 style="text-align: justify">
                                    Best regards,
                                </h4>
                                <h4 style="text-align: justify">
                                    Head of Department of International Relations, University of Jember
                                </h4>
                        </div>
                        <div class="col-lg-4 text-center" data-animate="fadeInUp" data-animate-delay="600">
                        </div>
                    </div>
                </div>
            </section>
            <!-- end: PROCESS -->
@endsection