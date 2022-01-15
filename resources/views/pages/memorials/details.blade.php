@extends('layouts.home')
@section('content')

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-space">
        <div class="container">
            <div class="row">
                <!-- product details wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- product details inner end -->

                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">

                                    <div class="pro-large-img img-zoom">
                                        <img src="{{ url('storage/images/' . $data->memorialImages->first()->title) }}"
                                            alt="product-details" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb">
                                        <img src="{{ url('storage/images/' . $data->memorialImages->first()->title) }}"
                                            alt="product-details" />
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="product-name">
                                        {{ $data->first_name . ' ' . $data->middle_name . ' ' . $data->last_name }}</h3>
                                    <p class="pro-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy
                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                        voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac
                                        habitasse platea dictumst.</p>
                                    <button class="btn btn__bg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Edit
                                    </button>
                                    <button class="btn btn__primary" data-bs-toggle="modal" data-bs-target="#exampleModalImages">
                                        Add Images
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- product details inner end -->
                    <!-- Quick view modal start -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 500px" role="document">
                            <div class="modal-content">
                                <div style="padding: 1rem 1rem; display: flex; align-items: center;" class="modal-header">
                                    <h5 style="font-size: 1.25rem" class="modal-title" id="exampleModalLabel">Edit
                                        Memorials
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">First name</label>
                                            <input type="type" class="form-control" placeholder="Enter first name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Middle name</label>
                                            <input type="type" class="form-control" placeholder="Enter middle name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Last name</label>
                                            <input type="type" class="form-control" placeholder="Enter last name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Gender : </label>
                                            <div class="form-check">
                                                <input name="gender" value="Male" class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input name="gender" value="Female" class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn__primary" data-dismiss="modal">Save
                                        Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick view modal end -->
                    @include('components.modal', $data)
                </div>
                <!-- product details wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->
@endsection
