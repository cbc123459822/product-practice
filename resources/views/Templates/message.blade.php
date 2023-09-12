<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage v1 - eCommerce HTML Template - FreshCart </title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/freshcart.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="nav-top">
        <div class="nav-t">
            <div>
                <span>Super Value Deals - Save more with coupons</span>
            </div>
            <div class="dropdown">
                <a href="#">
                    <span>English</span>
                    <i class="fa-thin fa-angle-down"></i>
                </a>
                <ul class="dropdown-content">
                    <li><a href="#">English</a></li>
                    <li><a href="#">Deutsch</a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav>
        <div id="nav-all">
            <div class="nav-b">
                <div class="nav-search">
                    <div class="logo">
                        <img src="./img/freshcart-logo.svg" alt="">
                    </div>
                    <div class="ipnputs">
                        <input type="text" placeholder="Search for products">
                        <i class="fa-thin fa-magnifying-glass"></i>
                    </div>
                    <div>
                        <a href="{{ route('type.index') }}">
                            <button class="btn-location" type="button">
                                <i class="fa-thin fa-location-dot"></i>
                                Location
                            </button>
                        </a>
                    </div>
                    <div class="search-icon">
                        <div class="list-inline d-none d-lg-block">
                            {{-- <a href="{{route('messages.index')}}"> --}}
                                <i class="fa-thin fa-heart"></i>
                            </a>
                        </div>
                        <div class="list-inline">
                            <button type="button" class="navbar-toggler" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa-thin fa-user-large"></i>
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Name</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Email
                                                        address</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Password</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="modal-body-text">
                                                    <span>By Signup, you agree to our</span>
                                                    <a href="#">Terms of Service</a>
                                                    <span>&</span>
                                                    <a href="#">Privacy Policy</a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer mb-4">
                                            <button type="button" class="btn-modal-footer">Sign UP</button>
                                            <p>Already have an account?<a href="#">Sign in</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-inline">
                            <a href="#" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                aria-label="Toggle navigation">
                                <i class="fa-thin fa-bag-shopping"></i>
                            </a>
                        </div>
                        <div class="list-inline d-block d-lg-none">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                                <i class="fa-thin fa-bars"></i>
                            </button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar2">
                                <div class="offcanvas-header">
                                    <img src="./img/freshcart-logo.svg" alt="">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="offcanvas-body-ipt">
                                        <input type="text" placeholder="Search for products">
                                        <i class="fa-thin fa-magnifying-glass"></i>
                                    </div>
                                    <div>
                                        <button class="btn-locations" type="button">
                                            <i class="fa-thin fa-location-dot"></i>
                                            Pick Location
                                        </button>
                                    </div>

                                    <ul class="list-unstyled">
                                        <li>
                                            <!--           連結ul         collapse: Bootstrap 用來展開 class   -->
                                            <div class="btn-locations-2">
                                                <a class="lidown" href="#AllDepartments" data-bs-toggle="collapse">
                                                    <i class="fa-light fa-grid-2" style="color: #ffffff;"></i>
                                                    All Departments
                                                </a>
                                            </div>
                                            <ul id="AllDepartments" class="list-unstyled collapse">
                                                <li>
                                                <li><a class="dropdown-item" href="#">Dairy, Bread & Eggs</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Snacks & Munchies</a></li>
                                                <li><a class="dropdown-item" href="#">Fruits & Vegetables</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Cold Drinks & Juices</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Breakfast & Instant
                                                        Food</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Bakery & Biscuits</a></li>
                                                <li><a class="dropdown-item" href="#">Chicken, Meat & Fish</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="btn-locations-li">
                                                <a class="lidown" href="#Home" data-bs-toggle="collapse">
                                                    Home<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                                                </a>
                                            </div>
                                            <ul id="Home" class="list-unstyled collapse">
                                                <li><a class="dropdown-item" href="#">Home2</a></li>
                                                <li><a class="dropdown-item" href="#">Home3</a></li>
                                                <li><a class="dropdown-item" href="#">Home4</a></li>
                                                <li><a class="dropdown-item" href="#">Home5<span>new</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="btn-locations-li">
                                                <a class="lidown" href="#Shop" data-bs-toggle="collapse">
                                                    Shop<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                                                </a>
                                            </div>
                                            <ul id="Shop" class="list-unstyled collapse">
                                                <li><a class="dropdown-item" href="#">Shop Grid - Filter</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Shop Grid - 3 column</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Shop List - Filter</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Shop - Filter</a></li>
                                                <li><a class="dropdown-item" href="#">Shop Wide</a></li>
                                                <li><a class="dropdown-item" href="#">Shop Single</a></li>
                                                <li><a class="dropdown-item" href="#">Shop Single v2</a></li>
                                                <li><a class="dropdown-item" href="#">Shop Wishlist</a></li>
                                                <li><a class="dropdown-item" href="#">Shop Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Shop Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="btn-locations-li">
                                                <a class="lidown" href="#Stores" data-bs-toggle="collapse">
                                                    Stores<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                                                </a>
                                            </div>
                                            <ul id="Stores" class="list-unstyled collapse">
                                                <li><a class="dropdown-item" href="#">Store List</a></li>
                                                <li><a class="dropdown-item" href="#">Store Grid</a></li>
                                                <li><a class="dropdown-item" href="#">Store Single</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="btn-locations-li">
                                                <a class="lidown" href="#Megamenu" data-bs-toggle="collapse">
                                                    Mega menu<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                                                </a>
                                            </div>
                                            <ul id="Megamenu" class="list-unstyled collapse">
                                                <li>
                                                    <h6 class="ps-3">Dairy, Bread & Eggs</h6>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Butter</a></li>
                                                <li><a class="dropdown-item" href="#">Milk Drinks</a></li>
                                                <li><a class="dropdown-item" href="#">Curd & Yogurt</a></li>
                                                <li><a class="dropdown-item" href="#">Eggs</a></li>
                                                <li><a class="dropdown-item" href="#">Buns & Bakery</a></li>
                                                <li><a class="dropdown-item" href="#">Cheese</a></li>
                                                <li><a class="dropdown-item" href="#">Condensed Milk</a></li>
                                                <li><a class="dropdown-item" href="#">Dairy Products</a></li>
                                                <li>
                                                    <h6 class="ps-3">Breakfast & Instant Food</h6>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Breakfast Cereal</a></li>
                                                <li><a class="dropdown-item" href="#"> Noodles, Pasta & Soup</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Frozen Veg Snacks</a></li>
                                                <li><a class="dropdown-item" href="#"> Frozen Non-Veg Snacks</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"> Vermicelli</a></li>
                                                <li><a class="dropdown-item" href="#"> Instant Mixes</a></li>
                                                <li><a class="dropdown-item" href="#"> Batter</a></li>
                                                <li><a class="dropdown-item" href="#"> Fruit and Juices</a></li>
                                                <li>
                                                    <h6 class="ps-3">Cold Drinks & Juices</h6>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Soft Drinks</a></li>
                                                <li><a class="dropdown-item" href="#">Fruit Juices</a></li>
                                                <li><a class="dropdown-item" href="#">Coldpress</a></li>
                                                <li><a class="dropdown-item" href="#"> Water & Ice Cubes</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"> Soda & Mixers</a></li>
                                                <li><a class="dropdown-item" href="#"> Health Drinks</a></li>
                                                <li><a class="dropdown-item" href="#"> Herbal Drinks</a></li>
                                                <li><a class="dropdown-item" href="#"> Milk Drinks</a></li>
                                                <img class="img-fluid" src="./img/menu-banner.jpg" alt="">
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="btn-locations-li">
                                                <a class="lidown" href="#Pages" data-bs-toggle="collapse">
                                                    Pages<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                                                </a>
                                            </div>
                                            <ul id="Pages" class="list-unstyled collapse">
                                                <li><a class="dropdown-item" href="#">Blog</a></li>
                                                <li><a class="dropdown-item" href="#">Blog Single</a></li>
                                                <li><a class="dropdown-item" href="#">Blog Category</a></li>
                                                <li><a class="dropdown-item" href="#">About us</a></li>
                                                <li><a class="dropdown-item" href="#">404 Error</a></li>
                                                <li><a class="dropdown-item" href="#">Contact</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="btn-locations-li">
                                                <a class="lidown" href="#Account" data-bs-toggle="collapse">
                                                    Account<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                                                </a>
                                            </div>
                                            <ul id="Account" class="list-unstyled collapse">
                                                <li><a class="dropdown-item" href="#">Sign in</a></li>
                                                <li><a class="dropdown-item" href="#">Signup</a></li>
                                                <li><a class="dropdown-item" href="#">Forgot Password</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="#MyAccount"
                                                        data-bs-toggle="collapse">
                                                        My Account
                                                        <i class="fa-solid fa-chevron-down chevron ms-2"></i>
                                                    </a>
                                                    <ul id="MyAccount" class="list-unstyled collapse">
                                                        <li><a class="dropdown-item" href="#">Orders</a></li>
                                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                                        <li><a class="dropdown-item" href="#">Address</a></li>
                                                        <li><a class="dropdown-item" href="#">Payment Method</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Notification</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="btn-locations-li">
                                                <a class="lidown" href="#">
                                                    Dashboard
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn-locations-li">
                                                <a class="lidown" href="#Docs" data-bs-toggle="collapse">
                                                    Docs
                                                </a>
                                            </div>
                                            <ul id="Docs" class="list-unstyled collapse">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class="fa-thin fa-memo fs-3" style="color:#0AAD0A;"></i>
                                                        <div class="ms-2">
                                                            <h6 class="mt-2">Documentations</h6>
                                                            <p>
                                                                Browse the all documentation
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i class="fa-thin fa-layer-group fs-3"
                                                            style="color:#0AAD0A;"></i>
                                                        <div class="ms-2">
                                                            <h6>Changelog
                                                                &nbsp;<span>v1.2.0</span></h6>
                                                            <p>
                                                                See what's new
                                                            </p>
                                                        </div>
                                                    </a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="navbar navbar-expand">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="btn-nav nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-light fa-grid-2" style="color: #ffffff;"></i>
                                All Departments
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Dairy, Bread & Eggs</a></li>
                                <li><a class="dropdown-item" href="#">Snacks & Munchies</a></li>
                                <li><a class="dropdown-item" href="#">Fruits & Vegetables</a></li>
                                <li><a class="dropdown-item" href="#">Cold Drinks & Juices</a></li>
                                <li><a class="dropdown-item" href="#">Breakfast & Instant Food</a></li>
                                <li><a class="dropdown-item" href="#">Bakery & Biscuits</a></li>
                                <li><a class="dropdown-item" href="#">Chicken, Meat & Fish</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Home
                                <i class="fa-solid fa-chevron-down chevron ms-2"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Home2</a></li>
                                <li><a class="dropdown-item" href="#">Home3</a></li>
                                <li><a class="dropdown-item" href="#">Home4</a></li>
                                <li><a class="dropdown-item" href="#">Home5<span>new</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Shop<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                            </a>
                            <ul class=" dropdown-menu">
                                <li><a class="dropdown-item" href="#">Shop Grid - Filter</a></li>
                                <li><a class="dropdown-item" href="#">Shop Grid - 3 column</a></li>
                                <li><a class="dropdown-item" href="#">Shop List - Filter</a></li>
                                <li><a class="dropdown-item" href="#">Shop - Filter</a></li>
                                <li><a class="dropdown-item" href="#">Shop Wide</a></li>
                                <li><a class="dropdown-item" href="#">Shop Single</a></li>
                                <li><a class="dropdown-item" href="#">Shop Single v2</a></li>
                                <li><a class="dropdown-item" href="#">Shop Wishlist</a></li>
                                <li><a class="dropdown-item" href="#">Shop Cart</a></li>
                                <li><a class="dropdown-item" href="#">Shop Checkout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Stores<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                            </a>
                            <ul class=" dropdown-menu">
                                <li><a class="dropdown-item" href="#">Store List</a></li>
                                <li><a class="dropdown-item" href="#">Store Grid</a></li>
                                <li><a class="dropdown-item" href="#">Store Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Mega menu<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                            </a>
                            <div class=" dropdown-menu mymenu ">
                                <div class=" row p-2 p-lg-4">
                                    <div class="col-lg-3">
                                        <h6 class="ps-3">Dairy, Bread & Eggs</h6>
                                        <a class="dropdown-item" href="#">Butter</a>
                                        <a class="dropdown-item" href="#">Milk Drinks</a>
                                        <a class="dropdown-item" href="#">Curd & Yogurt</a>
                                        <a class="dropdown-item" href="#">Eggs</a>
                                        <a class="dropdown-item" href="#">Buns & Bakery</a>
                                        <a class="dropdown-item" href="#">Cheese</a>
                                        <a class="dropdown-item" href="#">Condensed Milk</a>
                                        <a class="dropdown-item" href="#">Dairy Products</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="ps-3">Breakfast & Instant Food</h6>
                                        <a class="dropdown-item" href="#">Breakfast Cereal</a>
                                        <a class="dropdown-item" href="#"> Noodles, Pasta & Soup</a>
                                        <a class="dropdown-item" href="#">Frozen Veg Snacks</a>
                                        <a class="dropdown-item" href="#"> Frozen Non-Veg Snacks</a>
                                        <a class="dropdown-item" href="#"> Vermicelli</a>
                                        <a class="dropdown-item" href="#"> Instant Mixes</a>
                                        <a class="dropdown-item" href="#"> Batter</a>
                                        <a class="dropdown-item" href="#"> Fruit and Juices</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="ps-3">Cold Drinks & Juices</h6>
                                        <a class="dropdown-item" href="#">Soft Drinks</a>
                                        <a class="dropdown-item" href="#">Fruit Juices</a>
                                        <a class="dropdown-item" href="#">Coldpress</a>
                                        <a class="dropdown-item" href="#"> Water & Ice Cubes</a>
                                        <a class="dropdown-item" href="#"> Soda & Mixers</a>
                                        <a class="dropdown-item" href="#"> Health Drinks</a>
                                        <a class="dropdown-item" href="#"> Herbal Drinks</a>
                                        <a class="dropdown-item" href="#"> Milk Drinks</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <img class="img-fluid" src="./img/menu-banner.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pages<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                            </a>
                            <ul class=" dropdown-menu">
                                <li><a class="dropdown-item" href="#">Blog</a></li>
                                <li><a class="dropdown-item" href="#">Blog Single</a></li>
                                <li><a class="dropdown-item" href="#">Blog Category</a></li>
                                <li><a class="dropdown-item" href="#">About us</a></li>
                                <li><a class="dropdown-item" href="#">404 Error</a></li>
                                <li><a class="dropdown-item" href="#">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Account<i class="fa-solid fa-chevron-down chevron ms-2"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Sign in</a></li>
                                <li><a class="dropdown-item" href="#">Signup</a></li>
                                <li><a class="dropdown-item" href="#">Forgot Password</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="#">
                                        My Account
                                        <i class="fa-regular fa-angle-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Orders</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Address</a></li>
                                        <li><a class="dropdown-item" href="#">Payment Method</a></li>
                                        <li><a class="dropdown-item" href="#">Notification</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Docs
                            </a>
                            <ul class=" dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fa-thin fa-memo fs-3" style="color:#0AAD0A;"></i>
                                        <div class="ms-2">
                                            <h6 class="mt-2">Documentations</h6>
                                            <p class="docs-text">
                                                Browse the all documentation
                                            </p>
                                        </div>
                                    </a>
                                </li>

                                <li><a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fa-thin fa-layer-group fs-3" style="color:#0AAD0A;"></i>
                                        <div class="ms-2">
                                            <h6 class="mt-2 docs-title">Changelog &nbsp;<span>v1.2.0</span></h6>
                                            <p class="docs-text">
                                                See what's new
                                            </p>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header border-bottom">
            <div class="offcanvas-title">
                <h5 id="offcanvasNavbarLabel">Shop Cart</h5>
                <span>Location in 382480</span>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-box my-2 py-2 px-1 d-flex">
            You’ve got FREE delivery. Start
            <a class="nav-link active" aria-current="page" href="#">checkout now!</a>
        </div>
        <div class="offcanvas-body border-top">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item py-3 border-bottom">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="./img/product-img-1.jpg" alt="Ecommerce"
                                    class="icon-shape icon-xxl offcanvas-img">
                                <div>
                                    <!-- title -->
                                    <p>Haldiram's Sev Bhujia</p>
                                    <span>.98 / lb</span>
                                    <!-- text -->
                                    <div>
                                        <i class="fa-regular fa-trash-can" style="color: #0cbb29;"></i>
                                        <span>Remove</span>
                                    </div>
                                </div>
                            </div>
                            <!-- input group -->
                            <div class="d-flex">
                                <button class="bg-white btn-subtract" type="button"
                                    style="width: 32px; height: 32px;">-</button>
                                <input type="number" class="offcanvas-input" value="0" min="0"
                                    style="width: 32px; height: 32px;">
                                <button class="bg-white btn-add" type="button"
                                    style="width: 32px; height: 32px;">+</button>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$5.00</span>

                            </div>
                        </div>
                </li>
                <li class="nav-item py-3 border-bottom">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="./img/product-img-2.jpg" alt="Ecommerce"
                                    class="icon-shape icon-xxl offcanvas-img">
                                <div>
                                    <!-- title -->
                                    <p>NutriChoice Digestive</p>
                                    <span>250g</span>
                                    <!-- text -->
                                    <div>
                                        <i class="fa-regular fa-trash-can" style="color: #0cbb29;"></i>
                                        <span>Remove</span>
                                    </div>
                                </div>
                            </div>
                            <!-- input group -->
                            <div class="d-flex">
                                <button class="bg-white btn-subtract" type="button"
                                    style="width: 32px; height: 32px;">-</button>
                                <input type="number" class="offcanvas-input" value="0" min="0"
                                    style="width: 32px; height: 32px;">
                                <button class="bg-white btn-add" type="button"
                                    style="width: 32px; height: 32px;">+</button>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$20.00</span>
                                <br>
                                <del>$26.00</del>
                            </div>
                        </div>
                </li>
                <li class="nav-item py-3 border-bottom">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="./img/product-img-3.jpg" alt="Ecommerce"
                                    class="icon-shape icon-xxl offcanvas-img">
                                <div>
                                    <!-- title -->
                                    <p>Cadbury 5 Star Chocolate</p>
                                    <span>1 kg</span>
                                    <!-- text -->
                                    <div>
                                        <i class="fa-regular fa-trash-can" style="color: #0cbb29;"></i>
                                        <span>Remove</span>
                                    </div>
                                </div>
                            </div>
                            <!-- input group -->
                            <div class="d-flex">
                                <button class="bg-white btn-subtract" type="button"
                                    style="width: 32px; height: 32px;">-</button>
                                <input type="number" class="offcanvas-input" value="0" min="0"
                                    style="width: 32px; height: 32px;">
                                <button class="bg-white btn-add" type="button"
                                    style="width: 32px; height: 32px;">+</button>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$15.00</span>
                                <br>
                                <del>$20.00</del>

                            </div>
                        </div>
                </li>
                <li class="nav-item py-3 border-bottom">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="./img/product-img-4.jpg" alt="Ecommerce"
                                    class="icon-shape icon-xxl offcanvas-img">
                                <div>
                                    <!-- title -->
                                    <p>Onion Flavour Potato</p>
                                    <span>250g</span>
                                    <!-- text -->
                                    <div>
                                        <i class="fa-regular fa-trash-can" style="color: #0cbb29;"></i>
                                        <span>Remove</span>
                                    </div>
                                </div>
                            </div>
                            <!-- input group -->
                            <div class="d-flex">
                                <button class="bg-white btn-subtract" type="button"
                                    style="width: 32px; height: 32px;">-</button>
                                <input type="number" class="offcanvas-input" value="0" min="0"
                                    style="width: 32px; height: 32px;">
                                <button class="bg-white btn-add" type="button"
                                    style="width: 32px; height: 32px;">+</button>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$15.00</span>
                                <br>
                                <del>$20.00</del>
                            </div>
                        </div>
                </li>
                <li class="nav-item py-3 border-bottom">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="./img/product-img-5.jpg" alt="Ecommerce"
                                    class="icon-shape icon-xxl offcanvas-img">
                                <div>
                                    <!-- title -->
                                    <p>Salted Instant Popcorn</p>
                                    <span>100g</span>
                                    <!-- text -->
                                    <div>
                                        <i class="fa-regular fa-trash-can" style="color: #0cbb29;"></i>
                                        <span>Remove</span>
                                    </div>
                                </div>
                            </div>
                            <!-- input group -->
                            <div class="d-flex">
                                <button class="bg-white btn-subtract" type="button"
                                    style="width: 32px; height: 32px;">-</button>
                                <input type="number" class="offcanvas-input" value="0" min="0"
                                    style="width: 32px; height: 32px;">
                                <button class="bg-white btn-add" type="button"
                                    style="width: 32px; height: 32px;">+</button>
                            </div>
                            <!-- price -->
                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                <span class="fw-bold">$15.00</span>
                                <br>
                                <del>$15.00</del>
                            </div>
                        </div>
                </li>
            </ul>
            <div class="offcanvas-body-btn">
                <div class="body-btn-1">
                    <a href="#">Continue Shopping</a>
                </div>
                <div class="body-btn-2">
                    <a href="#">Update Cart</a>
                </div>

            </div>
        </div>
    </div>
    <main>
        @yield('main')
    </main>
    <footer>
        <div class="containers">z
            <div class="footer-text">
                <span>Categories</span>
                <span>Vegetables & Fruits</span>
                <span>Breakfast & instant food</span>
                <span>Bakery & Biscuits</span>
                <span>Atta, rice & dal</span>
                <span>Sauces & spreads</span>
                <span>Organic & gourmet</span>
                <span>Baby care</span>
                <span>Cleaning essentials</span>
                <span>Personal care</span>
            </div>
            <div class="footer-text">
                <br>
                <span></span>
                <span>Dairy, bread & eggs</span>
                <span>Cold drinks & juices</span>
                <span>Tea, coffee & drinks</span>
                <span>Masala, oil & more</span>
                <span>Chicken, meat & fish</span>
                <span>Paan corner</span>
                <span>Pharma & wellness</span>
                <span>Home & office</span>
                <span>Pet care</span>
            </div>
            <div class="footer-text footerLg">
                <span>Get to know us</span>
                <span>Company</span>
                <span>About</span>
                <span>Blog</span>
                <span>Help Center</span>
                <span>Our Value</span>
            </div>
            <div class="footer-text footerLg">
                <span>For Consumers</span>
                <span>Payments</span>
                <span>Shipping</span>
                <span>Product Returns</span>
                <span>FAQ</span>
                <span>Shop Checkout</span>
            </div>
            <div class="footer-text footerLg">
                <span>Become a Shopper</span>
                <span>Shopper Opportunities</span>
                <span>Become a Shopper</span>
                <span>Earnings</span>
                <span>Ideas & Guides</span>
                <span>New Retailers</span>
            </div>
            <div class="footer-text footerLg">
                <span>Freshcart programs</span>
                <span>Freshcart programs</span>
                <span>Gift Cards</span>
                <span>Promos & Coupons</span>
                <span>Freshcart Adss</span>
                <span>Careers</span>
            </div>
        </div>
        <div class="ft-mid">
            <div class="ft-mid-l">
                <p>Payment Partners</p>
                <img src="./img/ft-mid-l0.svg" alt="">
                <img src="./img/ft-mid-l1.svg" alt="">
                <img src="./img/ft-mid-l2.svg" alt="">
                <img src="./img/ft-mid-l3.svg" alt="">
                <img src="./img/ft-mid-l4.svg" alt="">
            </div>
            <div class="ft-mid-r">
                <p>Get deliveries with FreshCart</p>
                <div>
                    <img class="ft-mid-img" src="./img/appstore-btn.svg" alt="">
                </div>
                <div>
                    <img class="ft-mid-img" src="./img/googleplay-btn.svg" alt="">
                </div>
            </div>
        </div>
        <div class="ft-end">
            <div class="ft-end-l">
                <span>© 2022 - 2023 FreshCart eCommerce HTML Template. All rights reserved. Powered by</span>
                <a href="#">Codescandy.</a>
            </div>
            <div class="ft-end-r">
                <span>Follow us on</span>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @yield('js')
</body>

</html>
