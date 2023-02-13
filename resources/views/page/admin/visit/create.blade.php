@extends('template.template')
@section('header')
<!-- Header -->
<header id="header" data-transparent="true" class="dark">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo"> <a href="{{route('home')}}"><span class="logo-default">Logo</span><span class="logo-dark">Logo</span></a> </div>
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
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="dropdown"><a href="{{route('profile')}}">Profile</a>
                                <ul class="dropdown-menu">
                                    <li><a href="">Introduction</a>
                                    </li>
                                    <li><a href="{{route('lecture')}}">Lecture & Staff</a>
                                    </li>
                                    <li class="dropdown-submenu"><a href="{{route('structure-organization')}}">Student Corner</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Himahi</a>
                                            </li>
                                            <li><a href="#">Activities</a>
                                            </li>
                                            <li><a href="#">Student's Achievment Submission</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('facillitas')}}">Facilitas</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('academic')}}">Academic</a></li>
                            <li class="dropdown"><a href="{{route('academic')}}">Publication And Research</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('publication-research')}}">Book</a>
                                    </li>
                                    <li><a href="{{route('testimony')}}">Article/Proceeding</a>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('news')}}">News</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('publication-research')}}">Student</a>
                                        </li>
                                        <li><a href="{{route('testimony')}}">Lecturer</a>
                                        </li>
                                        <li><a href="{{route('testimony')}}">Press Release</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('testimony')}}">Testimony</a></li>
                                <li><a href="{{route('download')}}">Download</a></li>
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
        <div class="slide kenburns" data-bg-image="{{ asset('homepages/creative/images/slider/1.jpg') }}">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center">
                    <!-- Captions -->
                    <h2 class="text-light">Create Visiting Lecture Data</h2>
                    {{-- <h4 class="m-b-20 text-light">Set your goals high, and don't stop till you get there.</h4>
                    <div><a href="#" class="btn btn-danger">Explore more</a></div> --}}
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
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
            <div class="row">
                <h3>Form Create Data</h3>
                <form action="{{ route('visit.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">Lecturer Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="name" value="Insert Lecturer Name" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">University</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="university" value="Insert University Name" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Picture</label>
                        <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Picture of Activity</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-3 offset-md-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    @endsection