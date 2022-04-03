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
                                <a href="/">
                                    <img width="95px" height="29px" src={{ asset('img/logo/dooka.png') }} alt="">
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
                                            <li><a href="#">Pages<i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="/home/create">Create Memorials</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/home/features">Plans & Features</a>
                                            </li>
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
                                        <li>
                                            <a href="#" class="offcanvas-btn">
                                                <i class="lnr lnr-magnifier"></i>
                                            </a>
                                            @include('components.search')
                                        </li>
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
                                <a href="/">
                                    <img width="95px" height="29px" src={{ asset('img/logo/dooka.png') }}
                                        alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
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
        <!-- end Header Area -->
    </header>

    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="lnr lnr-cross"></i>
            </div>
            <div class="off-canvas-inner">
                <div class="mobile-settings">
                    <ul class="nav">
                        @auth
                            <li>
                                <div class="dropdown mobile-top-dropdown">
                                    <a href="#" class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Hi, {{ auth()->user()->username }}
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <form action="/auth/logout" method="post">
                                        @csrf

                                        <button type="submit" style="color: grey">Logout</button>
                                    </form>
                                </div>
                            </li>
                        @else
                            <div class="mobile-navigation">
                                <nav>
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><a href="index.html">Account</a>
                                            <ul class="dropdown">
                                                <li><a href="/auth/login">Login</a></li>
                                                <li><a href="/auth/register">Register</a></li>                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
