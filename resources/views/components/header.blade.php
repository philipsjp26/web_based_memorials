    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- start logo area -->
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src={{ asset('img/logo/logo.png') }} alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-lg-6 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="/">Home </a>
                                            </li>
                                            <li><a href="/home/list">Pages<i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="/home/list">List Of Memorials</a></li>
                                                    <li><a href="/home/create">Create Memorials</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/home/features">Plans & Features</a>
                                            </li>
                                            <li><a href="#">Blog</a>
                                            </li>
                                            <li><a href="#">Contact us</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-3">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <li class="user-hover">
                                            <a href="/">
                                                <i class="lnr lnr-user"></i>
                                            </a>
                                            <ul class="dropdown-list">
                                                @auth
                                                    <li><a href="#">Hi, {{ auth()->user()->username }}</a></li>
                                                    <li><a href="/home/myaccount">My Account</a></li>
                                                    <form action="/auth/logout" method="post">
                                                        @csrf
                                                        <li>
                                                            <button type="submit" style="color: grey">Logout</button>
                                                        </li>
                                                    </form>
                                                @else
                                                    <li><a href="/auth/login">Login</a></li>
                                                    <li><a href="/auth/register">Register</a></li>
                                                @endauth
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->

                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img src={{ asset('img/logo/logo.png') }} alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.html">
                                        <i class="lnr lnr-cart"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="lnr lnr-menu"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->
