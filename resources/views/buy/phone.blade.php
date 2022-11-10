<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Product list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .product-grid3 {
    font-family: Roboto, sans-serif;
    text-align: center;
    position: relative;
    z-index: 1
}

.product-grid3:before {
    content: "";
    height: 81%;
    width: 100%;
    background: #fff;
    border: 1px solid rgba(0, 0, 0, .1);
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .5s ease 0s
}

.product-grid3:hover:before {
    opacity: 1;
    height: 100%
}

.product-grid3 .product-image3 {
    position: relative
}

.product-grid3 .product-image3 a {
    display: block
}

.product-grid3 .product-image3 img {
    width: 100%;
    height: auto
}

.product-grid3 .pic-1 {
    opacity: 1;
    transition: all .5s ease-out 0s
}

.product-grid3:hover .pic-1 {
    opacity: 0
}

.product-grid3 .pic-2 {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: all .5s ease-out 0s
}

.product-grid3:hover .pic-2 {
    opacity: 1
}

.product-grid3 .social {
    width: 120px;
    padding: 0;
    margin: 0 auto;
    list-style: none;
    opacity: 0;
    position: absolute;
    right: 0;
    left: 0;
    bottom: -23px;
    transform: scale(0);
    transition: all .3s ease 0s
}

.product-grid3:hover .social {
    opacity: 1;
    transform: scale(1)
}

.product-grid3:hover .product-discount-label,
.product-grid3:hover .product-new-label,
.product-grid3:hover .title {
    opacity: 0
}

.product-grid3 .social li {
    display: inline-block
}

.product-grid3 .social li a {
    color: #3aee3a;
    background: #fff;
    font-size: 18px;
    line-height: 50px;
    width: 50px;
    height: 50px;
    border: 1px solid rgba(0, 0, 0, .1);
    border-radius: 50%;
    margin: 0 2px;
    display: block;
    transition: all .3s ease 0s
}

.product-grid3 .social li a:hover {
    background: #3aee3a;
    color: #fff
}

.product-grid3 .product-discount-label,
.product-grid3 .product-new-label {
    background-color: #e67e22;
    color: #fff;
    font-size: 17px;
    padding: 2px 10px;
    position: absolute;
    right: 10px;
    top: 10px;
    transition: all .3s
}

.product-grid3 .product-content {
    z-index: -1;
    padding: 15px;
    text-align: left
}

.product-grid3 .title {
    font-size: 14px;
    text-transform: capitalize;
    margin: 0 0 7px;
    transition: all .3s ease 0s
}

.product-grid3 .title a {
    color: #414141
}

.product-grid3 .price {
    color: #000;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-right: 2px;
    display: inline-block
}

.product-grid3 .price span {
    color: #909090;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0;
    text-decoration: line-through;
    text-align: left;
    display: inline-block;
    margin-top: -2px
}

.product-grid3 .rating {
    padding: 0;
    margin: -22px 0 0;
    list-style: none;
    text-align: right;
    display: block
}

.product-grid3 .rating li {
    color: #ffd200;
    font-size: 13px;
    display: inline-block
}

.product-grid3 .rating li.disable {
    color: #dcdcdc
}

@media only screen and (max-width:1200px) {
    .product-grid3 .rating {
        margin: 0
    }
}

@media only screen and (max-width:990px) {
    .product-grid3 {
        margin-bottom: 30px
    }
    .product-grid3 .rating {
        margin: -22px 0 0
    }
}

@media only screen and (max-width:359px) {
    .product-grid3 .rating {
        margin: 0
    }
}

body {
    font-family: "Open Sans", sans-serif;
    color: #444444;
}

a {
    color: #2edb4b;
    text-decoration: none;
}

a:hover {
    color: #2edb4b;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Raleway", sans-serif;
}
/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/

.back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #2487ce;
    width: 40px;
    height: 40px;
    border-radius: 4px;
    transition: all 0.4s;
}

.back-to-top i {
    font-size: 28px;
    color: #fff;
    line-height: 0;
}

.back-to-top:hover {
    background: #3e9bdd;
    color: #fff;
}

.back-to-top.active {
    visibility: visible;
    opacity: 1;
}
/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/

#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #fff;
}

#preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #2487ce;
    border-top-color: #fff;
    border-bottom-color: #fff;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1s linear infinite;
    animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-preloader {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/

@media screen and (max-width: 768px) {
    [data-aos-delay] {
        transition-delay: 0 !important;
    }
}
/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

#header {
    transition: all 0.5s;
    background: #fff;
    z-index: 997;
    padding: 15px 0;
    border-bottom: 1px solid #e6f2fb;
}

#header.header-scrolled {
    border-color: #fff;
    box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
}

#header .logo {
    font-size: 28px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 300;
    letter-spacing: 0.5px;
    font-family: "Poppins", sans-serif;
}

#header .logo a {
    color: #16507b;
}

#header .logo img {
    max-height: 40px;
}

@media (max-width: 992px) {
    #header .logo {
        font-size: 28px;
    }
}
/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation
*/

.navbar {
    padding: 0;
}

.navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
}

.navbar li {
    position: relative;
}

.navbar a,
.navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0 10px 30px;
    font-size: 14px;
    color: #16507b;
    white-space: nowrap;
    transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
    color: #2edb4b;
    ;
}

.navbar .getstarted,
.navbar .getstarted:focus {
    background: #24ce4f;
    padding: 8px 20px;
    margin-left: 30px;
    border-radius: 4px;
    color: #fff;
}

.navbar .getstarted:hover,
.navbar .getstarted:focus:hover {
    color: #fff;
    background: #2edb4b;
    ;
}

.navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 14px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
    border-radius: 4px;
}

.navbar .dropdown ul li {
    min-width: 200px;
}

.navbar .dropdown ul a {
    padding: 10px 20px;
    text-transform: none;
}

.navbar .dropdown ul a i {
    font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
    color: #2edb4b;
    ;
}

.navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
}

.navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
}

@media (max-width: 1366px) {
    .navbar .dropdown .dropdown ul {
        left: -90%;
    }
    .navbar .dropdown .dropdown:hover>ul {
        left: -100%;
    }
}
/**
* Mobile Navigation
*/

.mobile-nav-toggle {
    color: #124265;
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
    transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
    color: #fff;
}

@media (max-width: 991px) {
    .mobile-nav-toggle {
        display: block;
    }
    .navbar ul {
        display: none;
    }
}

.navbar-mobile {
    position: fixed;
    overflow: hidden;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgba(10, 38, 58, 0.9);
    transition: 0.3s;
    z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
}

.navbar-mobile ul {
    display: block;
    position: absolute;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    padding: 10px 0;
    background-color: #fff;
    overflow-y: auto;
    transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
    padding: 10px 20px;
    font-size: 15px;
    color: #124265;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
    color: #2edb4b;
    ;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
    margin: 15px;
}

.navbar-mobile .dropdown ul {
    position: static;
    display: none;
    margin: 10px 20px;
    padding: 10px 0;
    z-index: 99;
    opacity: 1;
    visibility: visible;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
    min-width: 200px;
}

.navbar-mobile .dropdown ul a {
    padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
    font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
    color: #2edb4b;
    ;
}

.navbar-mobile .dropdown>.dropdown-active {
    display: block;
}
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    @extends('header')
    <!-- End Header -->
    <div class="container" >
        <h3 class="h3">Product list </h3>
        <div class="row" style="margin-top: 4rem;">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                            <img class="pic-2" src="https://static.toiimg.com/thumb/resizemode-4,msid-77635713,width-720/77635713.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Samsung note 20 ultra </a></h3>
                        <div class="price">
                            89,000rs
                            <span><del>1,00,000rs</del></span>
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                            <img class="pic-2" src="https://static.toiimg.com/thumb/resizemode-4,msid-77635713,width-720/77635713.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Product name </a></h3>
                        <div class="price">
                            $price
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                            <img class="pic-2" src="https://static.toiimg.com/thumb/resizemode-4,msid-77635713,width-720/77635713.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Samsung note 20 ultra </a></h3>
                        <div class="price">
                            89,000rs
                            <span><del>1,00,000rs</del></span>
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                            <img class="pic-2" src="https://static.toiimg.com/thumb/resizemode-4,msid-77635713,width-720/77635713.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Product name </a></h3>
                        <div class="price">
                            $price
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                            <img class="pic-2" src="https://static.toiimg.com/thumb/resizemode-4,msid-77635713,width-720/77635713.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Product name </a></h3>
                        <div class="price">
                            $price
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                            <img class="pic-2" src="https://static.toiimg.com/thumb/resizemode-4,msid-77635713,width-720/77635713.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Product name </a></h3>
                        <div class="price">
                            $price
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                            <img class="pic-2" src="https://static.toiimg.com/thumb/resizemode-4,msid-77635713,width-720/77635713.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Product name </a></h3>
                        <div class="price">
                            $price
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                            <img class="pic-2" src="https://static.toiimg.com/thumb/resizemode-4,msid-77635713,width-720/77635713.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Product name </a></h3>
                        <div class="price">
                            $price
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Footer -->
    @extends('footer')
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- <script src="script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>
