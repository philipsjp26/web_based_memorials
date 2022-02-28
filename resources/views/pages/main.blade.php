        <!-- our product area start -->
        <section class="our-product section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Memorials</h2>
                            <div class="class">
                                <p>Total Memorials : {{ $totalMemorials }} </p>
                                <p>Total Accounts : {{ $totalAccounts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="dataList" class="row">
                    {{-- {{ dd($data)}} --}}
                    @foreach ($data as $memorial)
                        {{-- {{ dd($memorial)}} --}}
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">

                                        @if (count($memorial->memorialImages) != null)
                                            <img class="pri-img"
                                                src="{{ url('storage/images/' . $memorial->memorialImages[0]['title']) }}"
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
                </div>
                <div class="d-flex justify-content-center">

                    {!! $data->links() !!}
                </div>
            </div>
        </section>

        <!-- our product area end -->
