        <!-- our product area start -->
        <section class="our-product section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Memorials</h2>
                            <p>Accumsan vitae pede lacus ut ullamcorper sollicitudin quisque libero</p>
                        </div>
                    </div>
                </div>
                <div id="dataList" class="row">
                    <!-- product single item start -->
                    @foreach ($data as $memorial)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        @if (count($memorial['memorial_images']) > 0)
                                            <img class="pri-img"
                                                src="{{ url('storage/images/' . $memorial['memorial_images'][0]['title']) }}"
                                                alt="product">

                                        @else
                                            <img class="pri-img" src="#" alt="product">
                                        @endif


                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a
                                            href="home/detail/{{ $memorial['id'] }}">{{ $memorial['first_name'] . ' ' . $memorial['middle_name'] . ' ' . $memorial['last_name'] }}</a>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-old"
                                            style="padding-left: 0px">{{ date('Y', strtotime($memorial['date_of_birth'])) . ' - ' . date('Y', strtotime($memorial['date_of_death'])) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12">
                        <div class="view-more-btn">
                            <a class="btn-hero btn-load-more" href="#">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- our product area end -->
