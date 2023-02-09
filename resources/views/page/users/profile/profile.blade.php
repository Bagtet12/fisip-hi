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
                                <h1 class="text-medium">We Do Beautiful Websites!</h1>
                            </div>
                        </div>
    
                        <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="300">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis.
                            <br>
                            <br>Facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius.</div>
    
                        <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo.
                            <br>
                            <br>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volut.
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
                        <div class="col-lg-4 text-center" data-animate="fadeInUp" data-animate-delay="200">
                            <h1 class="text-lg text-uppercase">01.</h1>
                            <h3>CONCEPT</h3>
                            <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                                ipsum volutpat quis. </span>
                        </div>
    
                        <div class="col-lg-4 text-center" data-animate="fadeInUp" data-animate-delay="400">
                            <h1 class="text-lg text-uppercase">02.</h1>
                            <h3>DEVELOPMENT</h3>
                            <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                                ipsum volutpat quis.</span>
                        </div>
    
                        <div class="col-lg-4 text-center" data-animate="fadeInUp" data-animate-delay="600">
                            <h1 class="text-lg text-uppercase">03.</h1>
                            <h3>LAUNCH</h3>
                            <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                                ipsum volutpat quis.</span>
                        </div>
    
    
                    </div>
                </div>
            </section>
            <!-- end: PROCESS -->
@endsection