<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Hubungan Internasional Universitas Jember</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-fullwidth="true">
        </header>
        <!-- end: Header -->
        <!-- Page title -->
        <section id="page-title">
            <div class="container">
                <div class="page-title">
                    <h1>User login</h1>
                    <span>User login page</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Pages</a>
                        </li>
                        <li class="active"><a href="#">User login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- Section -->
        <section>
            <div class="container-fluid d-flex flex-column">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 mx-auto">
                        <div class="mb-5 text-center">
                            <h6 class="h3 mb-1">Login</h6>
                            <p class="text-muted mb-0">Sign in to your account to continue.</p>
                        </div><span class="clearfix"></span>
                        <form action="/login/post" method="POST" class="form-validate">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required="">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password">Password</label>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="password" placeholder="Enter password" type="password" required="">
                                    <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                </div>
                            </div>
                            <div class="mt-4"><button type="submit" class="btn btn-primary btn-block btn-primary">Sign in</button></div>
                        </form>
                        <div class="mt-4 text-center"><small>Not registered?</small> <a href="page-user-register.html" class="small fw-bold">Create account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Polo HTML5 Template</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br> All rights reserved. Copyright © 2021. INSPIRO.</p>
                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Updates</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Customers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Pages</div>
                                        <ul class="list">
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2021 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="https://www.inspiro-media.com" target="_blank" rel="noopener"> INSPIRO</a> </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>

</html>