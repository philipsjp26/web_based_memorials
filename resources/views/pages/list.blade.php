@extends('layouts.home')

@section('content')
    <div class="shop-main-wrapper section-space pb-0">
        <div class="container">
            
            <div class="row">
                {{-- Sidebar area --}}
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="sidebar-wrapper">
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-title">categories</h3>
                            <div class="sidebar-body">
                                <ul class="shop-categories">
                                    <li><a href="#">Jasmine <span>10</span></a></li>
                                    <li><a href="#">Rose <span>5</span></a></li>
                                    <li><a href="#">Orchid <span>8</span></a></li>
                                    <li><a href="#">Blossom <span>4</span></a></li>
                                    <li><a href="#">Hyacinth <span>5</span></a></li>
                                    <li><a href="#">Bouquet <span>2</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                {{-- Sidebar area  end --}}
                <!-- shop main wrapper start -->
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode" style="margin-right: 10px">
                                            <a href="#" data-target="grid-view" data-bs-toggle="tooltip"
                                                title="Grid View"><i class="fa fa-th"></i></a>
                                        </div>
                                        <div class="product-amount">
                                            <p>Showing 1–5 of 8 results</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                    <div class="top-bar-right">
                                        <div class="product-short">
                                            <p>Sort By : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name (A - Z)</option>
                                                <option value="sales">Name (Z - A)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product item list wrapper start -->
                        <div class="shop-product-wrap grid-view row mbn-40">
                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="pri-img" src={{ asset('img/product/product-9.jpg') }}
                                                alt="product">
                                            <img class="sec-img" src={{ asset('img/product/product-10.jpg') }}
                                                alt="product">
                                        </a>
                                        <div class="product-badge">
                                            <div class="product-label new">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i
                                                        class="lnr lnr-magnifier"></i></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption">
                                        <p class="product-name">
                                            <a href="product-details.html">Philips Jose Patric</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price-old" style="padding-left: 0px">1999-05-29</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="pri-img" src={{ asset('img/product/product-9.jpg') }}
                                                alt="product">
                                            <img class="sec-img" src={{ asset('img/product/product-10.jpg') }}
                                                alt="product">
                                        </a>
                                        <div class="product-badge">
                                            <div class="product-label new">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i
                                                        class="lnr lnr-magnifier"></i></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption">
                                        <p class="product-name">
                                            <a href="product-details.html">Philips Jose Patric</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price-old" style="padding-left: 0px">1999-05-29</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="pri-img" src={{ asset('img/product/product-9.jpg') }}
                                                alt="product">
                                            <img class="sec-img" src={{ asset('img/product/product-10.jpg') }}
                                                alt="product">
                                        </a>
                                        <div class="product-badge">
                                            <div class="product-label new">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i
                                                        class="lnr lnr-magnifier"></i></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption">
                                        <p class="product-name">
                                            <a href="product-details.html">Philips Jose Patric</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price-old" style="padding-left: 0px">1999-05-29</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="pri-img" src={{ asset('img/product/product-9.jpg')}}
                                                alt="product">
                                            <img class="sec-img" src={{ asset('img/product/product-10.jpg')}}
                                                alt="product">
                                        </a>
                                        <div class="product-badge">
                                            <div class="product-label new">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span
                                                    data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i
                                                        class="lnr lnr-magnifier"></i></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption">
                                        <p class="product-name">
                                            <a href="product-details.html">Philips Jose Patric</a>
                                        </p>
                                        <div class="price-box">
                                            <span class="price-old" style="padding-left: 0px">1999-05-29</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->
                            </div>
                        </div>
                        <!-- product item list wrapper end -->
                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center">
                            <ul class="pagination-box">
                                <li><a class="previous" href="#"><i class="lnr lnr-chevron-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#"><i class="lnr lnr-chevron-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- end pagination area -->
                    </div>
                </div>
            </div>

            {{-- <!-- Quick view modal start -->
            <div class="modal" id="quick_view">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- product details inner end -->
                            <div class="product-details-inner">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="product-large-slider">
                                            <div class="pro-large-img">
                                                <img src="assets/img/product/product-details-img1.jpg"
                                                    alt="product-details" />
                                            </div>
                                            <div class="pro-large-img">
                                                <img src="assets/img/product/product-details-img2.jpg"
                                                    alt="product-details" />
                                            </div>
                                            <div class="pro-large-img">
                                                <img src="assets/img/product/product-details-img3.jpg"
                                                    alt="product-details" />
                                            </div>
                                            <div class="pro-large-img">
                                                <img src="assets/img/product/product-details-img4.jpg"
                                                    alt="product-details" />
                                            </div>
                                        </div>
                                        <div class="pro-nav slick-row-10 slick-arrow-style">
                                            <div class="pro-nav-thumb">
                                                <img src="assets/img/product/product-details-img1.jpg"
                                                    alt="product-details" />
                                            </div>
                                            <div class="pro-nav-thumb">
                                                <img src="assets/img/product/product-details-img2.jpg"
                                                    alt="product-details" />
                                            </div>
                                            <div class="pro-nav-thumb">
                                                <img src="assets/img/product/product-details-img3.jpg"
                                                    alt="product-details" />
                                            </div>
                                            <div class="pro-nav-thumb">
                                                <img src="assets/img/product/product-details-img4.jpg"
                                                    alt="product-details" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="product-details-des quick-details">
                                            <h3 class="product-name">Philips Jose Patric</h3>
                                            <div class="ratings d-flex">
                                                <div class="pro-review" style="padding-left: 0px">
                                                    <span>200 Reviews</span>
                                                </div>
                                            </div>
                                            <p class="pro-desc">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Quibusdam aliquid sunt iusto. Neque doloribus, nam labore optio esse
                                                modi
                                                repellat fuga voluptatibus sint sunt. Nostrum iure omnis, perspiciatis
                                                officia
                                                laborum maxime sit pariatur facere dicta eum labore fuga voluptatum
                                                veniam
                                                eveniet accusamus iusto, illo quidem? Deleniti ducimus cumque soluta,
                                                dolorum
                                                quaerat necessitatibus fuga? Eveniet sint, perferendis cupiditate,
                                                repellat
                                                nostrum quod eum deserunt natus nemo ad molestiae expedita consequuntur?
                                                Reiciendis suscipit minus eius impedit iure, laboriosam porro, fuga
                                                corporis
                                                expedita alias deleniti, ad aliquam possimus odio maiores temporibus
                                                sunt
                                                officia aperiam unde velit voluptatem saepe quisquam iste dolor! Sit,
                                                nihil
                                                eligendi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- product details inner end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick view modal end --> --}}

            <!-- Scroll to top start -->
            <div class="scroll-top not-visible">
                <i class="fa fa-angle-up"></i>
            </div>
            <!-- Scroll to Top End -->

        </div>
    </div>
    @include('components.modal')
@endsection
