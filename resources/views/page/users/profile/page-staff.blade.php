@extends('template.template')
@section('header')
            <!-- Header -->
            <header id="header" class="header-always-fixed">
                <div class="header-inner">
                    <div class="container">
                        <!--Logo-->
                        <div id="logo">
                            <a href="index.html">
                                <span class="logo-default">POLO</span>
                                <span class="logo-dark">POLO</span>
                            </a>
                        </div>
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
                                <li>
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
@section('content')
            <!-- SECTION FULLSCREEN -->
            <section class="profile-content">
                <div class="profile-image" style="background-image:url(images/about/1.jpg)">
                    <div class="profile-name">
                        <h3>Anastasia Doe</h3>
                    </div>
                </div>
                <div class="profile-bio">
                    <h3>Anastasia Doe</h3>
                    <span>Professiona Developer</span>
                    <br />
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <hr class="space">
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <hr class="space">
                    <div class="m-t-60">
                        <div class="p-progress-bar-container title-up small extra-small color">
                            <div class="p-progress-bar" data-percent="100" data-delay="100" data-type="%">
                                <div class="progress-title">HTML5</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small extra-small color">
                            <div class="p-progress-bar" data-percent="94" data-delay="200" data-type="%">
                                <div class="progress-title">CSS3</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small extra-small color">
                            <div class="p-progress-bar" data-percent="78" data-delay="300" data-type="%">
                                <div class="progress-title">JQUERY</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small extra-small color">
                            <div class="p-progress-bar" data-percent="65" data-delay="400" data-type="%">
                                <div class="progress-title">MYSQL</div>
                            </div>
                        </div>
                    </div>
                    <hr class="space">
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!.
                        Fusce id mi diam, non ornare orci. Pellentesque ipsum erat,
                        <br>
                        <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                        ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </p>
                    <hr class="space">
                    <div class="profile-bio-footer">
                        <div class="text-center"> &copy; 2021 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.INSPIRO</div>
                    </div>
                </div>
            </section>
            <!-- end: SECTION FULLSCREEN -->
@endsection