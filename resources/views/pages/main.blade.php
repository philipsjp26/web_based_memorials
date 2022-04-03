        <!-- our product area start -->
        <div class=" bg-img" data-bg={{ asset('img/background/main_background.webp') }}>
        <section class="our-product section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="card" style="border-radius: 16px">
                            <h3 class="card-header py-4">Create a Memorial</h3>
                            <div class="card-body py-3">
                                <div class="d-flex justify-content-center py-3">
                                    <h3 class="card-title" style="color: #63787b; font-size: 20px">PRESERVE AND SHARE
                                        MEMORIES OF YOUR LOVED ONE
                                    </h3>
                                </div>
                                <p class="card-text d-flex justify-content-center" style="font-size: 18px">I want to share memories of</p>
                                <div class="form-inline my-3 d-flex flex-row flex-wrap justify-content-center">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label class="sr-only">First name</label>
                                        <input type="text" class="form-control" placeholder="First name" id="first_name">
                                    </div>
                                    {{-- <div class="form-group mx-sm-3 mb-2">
                                        <label class="sr-only">Middle name</label>
                                        <input type="text" class="form-control" placeholder="Middle name">
                                    </div> --}}
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="inputPassword2" class="sr-only">Last name</label>
                                        <input type="text" class="form-control" placeholder="Last name" id="last_name">
                                    </div>
                                    <a href="/home/create">
                                        <button type="submit" class="btn btn-hero mb-2"
                                            style="border-radius: 14px; padding: 10px 16px"
                                            onclick="store()">Get Started</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Memorials</h2>
                            <div class="class">
                                <a href="/mail">Click</a>
                                <p>Total Memorials : {{ $totalMemorials }} </p>
                                <p>Total Accounts : {{ $totalAccounts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="dataList" class="row">
                    @foreach ($data as $memorial)
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
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a
                                            href="/home/detail/{{ $memorial['id'] }}">{{ $memorial['first_name'] . ' ' . $memorial['middle_name'] . ' ' . $memorial['last_name'] }}</a>
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
        </div>

        {{-- <script>
            function store() {
                var first_name = document.getElementById("first_name").value;
                var last_name = document.getElementById("last_name").value;
                localStorage.setItem("first", first_name);
                localStorage.setItem("last", last_name);
            }
        </script> --}}

        <!-- our product area end -->
