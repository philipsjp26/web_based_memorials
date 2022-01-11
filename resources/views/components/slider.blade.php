@extends('layouts.home')

@section('content')
    <!-- slider area start -->
    <section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide ">
                <div class="hero-slider-item_3 bg-img" data-bg={{ asset('img/background/background-2.jpg') }}>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-1">
                                    <span>Forever Missed</span>
                                    <h1>Fresh Your Mind</h1>
                                    <h2>& Feeling love</h2>
                                    <a href="#" class="btn-hero">Get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item end -->

            <!-- single slider item start -->
            <div class="hero-single-slide">
                <div class="hero-slider-item_3 bg-img" data-bg={{ asset('img/background/background-1.jpg') }}>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-2">
                                    <span>Forever missed/span>
                                        <h1>Fresh Your Mind</h1>
                                        <h2>& Feeling love</h2>
                                        <a href="shop.html" class="btn-hero">Get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
        </div>
    </section>
    <!-- slider area end -->

    @include('pages.main')
@endsection