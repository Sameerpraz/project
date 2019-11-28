
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-----Bootstrap link for Tabs and Pills----->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!------Ends Here------>
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Hamro Mart</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <i class="circle-preloader"></i>
    <img src="frontend/img/core-img/salad.png" alt="">
</div>

<!-- Search Wrapper -->
<div class="search-wrapper">
    <!-- Close Btn -->
    <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" method="post">
                    <input type="search" name="search" placeholder="Type any keywords...">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-between">
                <!-- Breaking News -->
                <div class="col-12 col-sm-6">
                    <div class="breaking-news">
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Hello|</a></li>
                                <li><a href="#">Welcome to Hamro Mart</a></li>
                                <li><a href="#">Explore your Product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Top Social Info -->
                <div class="col-12 col-sm-6">
                    <div class="top-social-info text-right">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="delicious-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="deliciousNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html" style="width: 82px; height: 72px;"><img src="frontend/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="blog-post.html">Blog Post</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="elements.html">Join with us</a></li>
                                        <li><a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="frontend/receipe-post.html">More Search</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('login')}}" class="fa fa-user">Join with us</a></li>
                            </ul>

                            <!-- Newsletter Form -->
                            <div class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(frontend/img/hamromart.jpg);">
    <div class="container h-100"> </div>
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-text text-center">
                    <h2>Hamro Mart</h2>
                </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<div class="receipe-post-area section-padding-80">

    <!-- Receipe Post Search -->
    <div class="receipe-post-search mb-80">
        <div class="container">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <select name="select1" id="select1">
                            <option value="1">Categories</option>
                            <option value="1">Electronic</option>
                            <option value="1">Vehicles</option>
                            <option value="1">Agriculture</option>
                            <option value="1">Construction</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <select name="select1" id="select2">
                            <option value="1">Sub-Categories</option>
                            <option value="1">Phone</option>
                            <option value="1">Laptop</option>
                            <option value="1">TV</option>
                            <option value="1">Speaker</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <input type="search" name="search" placeholder="Search Products">
                    </div>
                    <div class="col-12 col-lg-3 text-right">
                        <button type="submit" class="btn delicious-btn">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <h2>Media Slider Carousel BS3</h2>
        </div>
        <div class='row'>
            <div class='col-md-8'>
                <div class="carousel slide media-carousel" id="media">
                    <div class="carousel-inner">
                        <div class="item  active">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                                <div class="col-md-4">
                                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#media" class="right carousel-control">›</a>
                </div>
            </div>
        </div>
    </div>

    <!----- Featured ----->
{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            <h1 class="d-block text-primary">Featured</h1>--}}

{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="card" style="width: 18rem;">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Special title treatment</h5>--}}
{{--                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="card" style="width: 18rem;">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Special title treatment</h5>--}}
{{--                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="card" style="width: 18rem;">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Special title treatment</h5>--}}
{{--                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="card" style="width: 18rem;">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Special title treatment</h5>--}}
{{--                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--            --}}{{--<h5 class="card-title">Special title treatment</h5>--}}
{{--            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!------Module------>
    <br>
    <div class="container">
        <h2>Toggleable Pills</h2>
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item col-md-4">
                <a class="nav-link active" data-toggle="pill" href="#home">Food & Beverage</a>
            </li>
            <li class="nav-item col-md-4">
                <a class="nav-link" data-toggle="pill" href="#menu1">Fashion Wears</a>
            </li>
            <li class="nav-item col-md-4">
                <a class="nav-link" data-toggle="pill" href="#menu2">Electronics & Electrical</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <h3>Food & Beverage</h3>
                <br>
                <ul class="">
                    <li><a href="" style="color: #2e1cff">Milk and Dairy</a></li>
                    <li><a href="" style="color: #2e1cff">Bakery & Confectionery Products</a></li>
                    <li><a href="" style="color: #2e1cff">Dry Fruits & Nut</a></li>
                    <li><a href="" style="color: #2e1cff">Meat & Poultry Food </a></li>
                    <li><a href="" style="color: #2e1cff">Juices & soft Drinks</a></li>
                    <li><a href="" style="color: #2e1cff">Hard Drinks</a></li>
                </ul>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <h3>Electronics & Electrical</h3>
                <br>
                <ul class="" style="color: #0b97c4">
                    <li><a href="" >Milk and Dairy</a></li>
                    <li><a href="">Bakery & Confectionery Products</a></li>
                    <li><a href="">Dry Fruits & Nut</a></li>
                    <li><a href="">Meat & Poultry Food </a></li>
                    <li><a href="">Juices & soft Drinks</a></li>
                    <li><a href="">Hard Drinks</a></li>
                </ul>

            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <h3>Fashion Wears</h3>
                <br>
                <ul class="col-md-12">
                    <li><a href="" style="color: #2e1cff">Milk and Dairy</a></li>
                    <li><a href="">Bakery & Confectionery Products</a></li>
                    <li><a href="">Dry Fruits & Nut</a></li>
                    <li><a href="">Meat & Poultry Food </a></li>
                    <li><a href="">Juices & soft Drinks</a></li>
                    <li><a href="">Hard Drinks</a></li>
                </ul>

            </div>
        </div>
    </div>



     <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                <!-- Footer Social Info -->
                <div class="footer-social-info text-right">
                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <!-- Footer Logo -->
                <div class="footer-logo" style="width: 82px; height: 72px;">
                    <a href="index.html" ><img src="frontend/img/core-img/logo.png" alt=""></a>
                </div>
                <!-- Copywrite -->
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="frontend/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="frontend/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="frontend/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="frontend/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="frontend/js/active.js"></script>
</body>

</html>