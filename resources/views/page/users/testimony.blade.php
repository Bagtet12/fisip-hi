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
                            <font size="5""><h1 class="text-light">Testimony</h1></font>
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
                            <font size="5"><h1 class="text-dark">Testimony</h1></font>
                            <!-- end: Captions -->
                        </div>
                    </div>
    
                </div>
                <!-- end: Slide 2 -->
            </div>
            <!--end: Inspiro Slider -->
@endsection
@section('content')
        <!-- Content -->
        <section id="page-content" class="sidebar-both">
            <div class="container">
                <div class="row">
                    <!-- Sidebar-->
                    <div class="sidebar sticky-sidebar">
                    </div>
                    <!-- end: Sidebar-->
                    <!-- post content -->
                    <div class="content">
                        <!-- Blog -->
                        <div id="blog">
                            <!-- Post item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="team-image">
                                        <a href="#">
                                            <img alt="" src="images/testimony/irak_abdullah.jpg" style="width: 500px; margin-left: 310px">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h1 style="text-align: left">Abdullah Abdul Kholiq - Iraq</h1>
                                        <hr>
                                        <h2 style="text-align: right; font-size: 25px; line-height: 32px">تعتبر العلاقات الدوليه واحده من التخصصات الجميله والي يحب الطالب الذي يحلم ان يصبح دبلوماسيا دراستها وكما هو الحال بالنسبه لي، اما العلاقات الدوليه في الجامعة الحكوميه في مدينة جمبر تعتبر واحده من افضل تخصصات العلاقات الدوليه الموجوده في اندونيسيا من ناحية جودة الطلاب وجودة الاساتذه والدكاتره الموجودين هنا بالنسبه لي فأنا لم اندم ابدا اني درست هنا لأنها ساعدتني على تطوير اللغه الاندونيسيه ايضا كوني طالب اجنبي وساعدتني على التكيف ايضا مع اجواء هذه البلاد."</h2>
                                        <br>
                                        <h2 style="text-align: justify; font-size: 25px; line-height: 32px">“I feel I am a lucky guy since I got into International Relations especially in University of Jember which is always in the 15 universities in Indonesia and International Relations University of Jemberj is always in the top 3 among the country so it’s really a good place to study everything in there. And for the lectures we have a lot of them that I can not mention one by one but I can say from my experience that we have the most helpful lectures that any college student can dream of.”</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Blog -->
                    </div>
                    <!-- end: post content -->
                    
                </div>
            </div>
        </section>
        <!-- end: Content -->   
@endsection