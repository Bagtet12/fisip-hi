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
                                <img alt="" src="images/introduction/Bu Suyani.jpg" style="width: 400px; margin-left: 70px">
                        </div>
                        <div class="post-item-description">
                            <h2 style="font-size: 30px">Kata Sambutan Bu Suyani</h2>
                            <hr>
                            <h2 style="font-size: 20px; text-align: justify; line-height: 30px">Welcome to the Department of International Relations
                                University of Jember!
                            </h2>
                            <br>
                            <h2 style="text-align: justify; line-height: 30px">The Department of International Relations encourages students to understand the complexities of international relations such as diplomacy, cooperation and conflict, human security, international political economy, media and global political communication, and regional studies. More specifically, the Department of International Relations develops the study of International Gastrodiplomacy and Agribusiness as the uniqueness of the study program and as support for the realization of the University's vision.</h2>
                            <br>
                            <h2 style="text-align: justify; line-height: 30px">We are committed to improving hard and soft skills that are useful for their future. We accomplish this by involving students in research and community service that can enhance their knowledge and skills. To that end, the Department of International Relations at the University of Jember develops the Political and Regional Studies Laboratory, the Diplomacy Laboratory, and the Export-Import and Customs Laboratory (international economic practicum).</h2>
                            <br>
                            <h2 style="text-align: justify; line-height: 30px">We provide information about the International Relations major at the University of Jember on this website. However, if you need further information, please contact us.</h2>
                            <br>
                            <h2>Best regards,</h2>
                            <br>
                            <h2>Head of Department of International Relations, University of Jember</h2>
                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
                <!-- Post item-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-item-description">
                            <h2 style="font-size: 30px">History</h2>
                            <hr>
                            <h2 style="text-align: justify; line-height: 30px">The Undergraduate Study Program in International Relations at Jember University was established based on the Decree of the Minister of Higher Education and Science of the Republic of Indonesia Number 151 of 1964 concerning the establishment of a Public University in Jember dated 10 November 1964. The decree was signed by Minister dr. Sjarif Thajeb.</h2>
                        </div>
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="images/introduction/history.jpg" style="width: 400px; margin-left: 100px">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
                <br>
                <div class="heading-text heading-section text-center">
                    <h2>Organization Structure</h2>
                </div>
                <div class="row team-members">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/introduction/bu suyani.jpg">
                            </div>
                            <div class="team-desc">
                                <h3>Suyani Indriastuti, Ph.D.</h3>
                                <h3 style="margin-top: 17px">HEAD OF DEPARTMENT</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/introduction/bu sri.jpg" style="width: 248px">
                            </div>
                            <div class="team-desc">
                                <h3>Dra. Sri Yuniati, M.Si</h3>
                                <h3 style="margin-top: 18px">DEPARTMENT SECRETARY</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/introduction/bu adhining.jpg" style="width: 261px">
                            </div>
                            <div class="team-desc">
                                <h3>Adhiningasih Prabhawati, S.Sos., M.Si</h3>
                                <h3>HEAD OF LABORATORY</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/introduction/pak bagus.jpg" style="width: 251px">
                            </div>
                            <div class="team-desc">
                                <h3>Drs. Bagus Sigit Sunarko, M.Si., Ph.D.</h3>
                                <h3>QUALITY ASSURANCE UNIT</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection