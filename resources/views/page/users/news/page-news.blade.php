@extends('template.template')
@section('header')
        <!-- Header -->
        <header id="header" data-transparent="true" class="dark">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="index.html"><span class="logo-default">Logo</span><span class="logo-dark">Logo</span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Profile</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Structure Organisation</a>
                                            </li>
                                            <li><a href="#">Fasilitas</a>
                                            </li>
                                            <li><a href="#">Lecture</a>
                                            </li>
                                            <li><a href="#">Staff</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="index.html">Academic</a></li>
                                    <li><a href="index.html">News</a></li>
                                    <li><a href="index.html">Download</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
@endsection
@section('hover')
                <!-- Inspiro Slider -->
                <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
                    <!-- Slide 1 -->
                    <div class="slide kenburns" data-bg-image="homepages/creative/images/slider/1.jpg">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="slide-captions text-center">
                                <!-- Captions -->
                                <h1 class="text-light">Judul</h1>
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
                                <h1>Judul</h1>
                                {{-- <h4 class="m-b-20">Set your goals high, and don't stop till you get there.</h4>
                                <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                                <!-- end: Captions -->
                            </div>
                        </div>
        
                    </div>
                    <!-- end: Slide 2 -->
                </div>
                <!--end: Inspiro Slider -->    
@endsection
@section('content')
    <!-- FULL WIDTH PAGE -->
    <section>
        <div class="container">
            <h2>Hello World, this is a simple page!</h2>
            <p>The most happiest time of the day!. Pellentesque quis eros lobortis, vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ipsum turpis. Pellentesque venenatis, libero vel euismod lobortis, mi metus luctus
                augue, eget dapibus elit nisi eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iaculis adipiscing neque, non congue massa euismod quis. Etiam interdum dolor sit amet justo vulputate, non
                mollis velit venenatis. Morbi eu nunc nunc. Phasellus lacus magna, dapibus vitae pellentesque sit amet, venenatis ac purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec volutpat bibendum diam eget posuere. Pellentesque
                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam adipiscing pretium tortor, eget pretium nulla ullamcorper id. Nullam ac nunc at lectus elementum vestibulum sit amet vitae dui. Donec ut gravida
                lorem.</p>
            <p>Cras tristique turpis justo, eu consequat sem adipiscing ut. Donec posuere bibendum metus. Quisque gravida luctus volutpat. Mauris interdum, lectus in dapibus molestie, quam felis sollicitudin mauris, sit amet tempus velit lectus nec lorem.
                Nullam vel mollis neque. The most happiest time of the day!. Nullam vel enim dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed tincidunt accumsan massa id viverra. Sed sagittis, nisl sit
                amet imperdiet convallis, nunc tortor consequat tellus, vel molestie neque nulla non ligula. Proin tincidunt tellus ac porta volutpat. Cras mattis congue lacus id bibendum. Mauris ut sodales libero. Maecenas feugiat sit amet enim in
                accumsan.</p>
            <p>Cras dapibus arcu a neque laoreet condimentum. In in rhoncus leo. Sed mattis feugiat odio, sit amet pretium nisl egestas non. Suspendisse dui velit, congue ac lacus eget, semper tempor turpis. Nunc sapien enim, sagittis vitae purus in,
                lobortis pharetra elit. Praesent gravida est dictum enim iaculis, ut scelerisque sapien rutrum. Duis non augue nunc.The most happiest time of the day!. Pellentesque quis eros lobortis, vestibulum turpis ac, pulvinar odio. Praesent
                vulputate a elit ac mollis. In sit amet ipsum turpis. Pellentesque venenatis, libero vel euismod lobortis, mi metus luctus augue, eget dapibus elit nisi eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui
                gravida. Donec iaculis adipiscing neque, non congue massa euismod quis. Etiam interdum dolor sit amet justo vulputate, non mollis velit venenatis. Morbi eu nunc nunc. Phasellus lacus magna, dapibus vitae pellentesque sit amet, venenatis
                ac purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec volutpat bibendum diam eget posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam adipiscing pretium
                tortor, eget pretium nulla ullamcorper id. Nullam ac nunc at lectus elementum vestibulum sit amet vitae dui. Donec ut gravida lorem.</p>
            <p>Cras tristique turpis justo, eu consequat sem adipiscing ut. Donec posuere bibendum metus. Quisque gravida luctus volutpat. Mauris interdum, lectus in dapibus molestie, quam felis sollicitudin mauris, sit amet tempus velit lectus nec lorem.
                Nullam vel mollis neque. The most happiest time of the day!. Nullam vel enim dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed tincidunt accumsan massa id viverra. Sed sagittis, nisl sit
                amet imperdiet convallis, nunc tortor consequat tellus, vel molestie neque nulla non ligula. Proin tincidunt tellus ac porta volutpat. Cras mattis congue lacus id bibendum. Mauris ut sodales libero. Maecenas feugiat sit amet enim in
                accumsan. Nullam ut tempor eros. Donec faucibus, velit et imperdiet aliquam, lacus velit luctus urna, vitae porttitor orci libero id felis. Aliquam ut arcu id dui aliquam accumsan. Aliquam lobortis odio at diam rhoncus, ac sollicitudin
                nisi pretium. Maecenas metus urna, tincidunt ut tincidunt vel, volutpat in eros. Ut sagittis, purus eu placerat sollicitudin, orci justo hendrerit diam, in ultricies magna lectus id metus. Nunc consequat congue accumsan. Sed gravida,
                ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius. Vestibulum at arcu nec magna rhoncus condimentum id non erat.
                Morbi eu scelerisque enim, vitae tincidunt tellus. Nullam at malesuada lectus. Donec lacus magna, euismod eu lectus quis, varius hendrerit magna. Vivamus elementum tristique felis, sagittis cursus metus rutrum sed. In lacinia orci
                arcu, a interdum diam ornare nec.</p>
        </div>
    </section>
    <!-- end: FULL WIDTH PAGE -->
@endsection