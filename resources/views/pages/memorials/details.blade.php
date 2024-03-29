@extends('layouts.home')

@section('content')
    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-space">
        <div class="container">
            <div class="row">
                <!-- product details wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- product details inner end -->
                    {{-- {{ dd($data->memorialDescription->description)}} --}}
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">

                                    <div class="pro-large-img img-zoom">
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

<<<<<<< HEAD
                                    @auth
=======

                                    @if (Auth::check() == true)
>>>>>>> b39e2372f9e39e2a093e9d08041047edf02f7544
                                        @if (auth()->user()->id == $account_id)
                                            <button class="btn btn__bg" style="margin-right: 10px" data-bs-toggle="modal"
                                                data-bs-target="#modalEdit">
                                                Edit
                                            </button>
<<<<<<< HEAD
                                            <button class="btn btn__primary" style="margin-right: 10px" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalImages">
                                                Add Images
                                            </button>
                                        @endif
                                    @endauth
                                    <button style="font-size: 14px; padding: 10px 20px; border-radius: 0"
                                        data-bs-toggle="modal" data-bs-target="#modalApproved" class="btn btn-success">Claim
                                        Family</button>
=======
                                            <button class="btn btn__primary" style="margin-right: 10px"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalImages">
                                                Add Images
                                            </button>
                                        @endif
                                    @else
                                        <button style="font-size: 14px; padding: 10px 20px; border-radius: 0"
                                            data-bs-toggle="modal" data-bs-target="#modalApproved"
                                            class="btn btn-success">Claim
                                            Family</button>
                                    @endif
>>>>>>> b39e2372f9e39e2a093e9d08041047edf02f7544
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- product details inner end -->
                    <!-- Quick view modal start -->

                    <!-- Modal -->
                    <div class="modal fade" id="modalEdit" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
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
                                    <form method="POST" action="/memorial/update/{{ $data->id }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">First name</label>
                                            <input type="type" name="first_name" class="form-control"
                                                placeholder="{{ $data->first_name }}" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Middle name</label>
                                            <input type="type" name="middle_name" class="form-control"
                                                placeholder="{{ $data->middle_name }}" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Last name</label>
                                            <input type="type" name="last_name" class="form-control"
                                                placeholder="{{ $data->last_name }}" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Other relationship</label>
                                            <input type="type" name="last_name" class="form-control"
                                                placeholder="{{ $data->other_relationship }}" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Gender : </label>
                                            <div class="form-check">
                                                <input name="gender" value="Male" class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault1"
                                                    @if ($data->gender == 'Male') checked @endif>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input name="gender" value="Female" class="form-check-input" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault2"
                                                    @if ($data->gender == 'Female') checked @endif>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">About</label>
<<<<<<< HEAD
                                                <textarea name="description" class="form-control"
                                                    id="exampleFormControlTextarea1" cols="30" rows="10">
                                                                                                                    @if ($data->memorialDescription)
    {{ $data->memorialDescription->description }}
    @endif
                                                                                                                    </textarea>
=======
                                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" cols="30" rows="10">
                                                                                                                        @if ($data->memorialDescription)
{{ $data->memorialDescription->description }}
@endif
                                                                                                                        </textarea>
>>>>>>> b39e2372f9e39e2a093e9d08041047edf02f7544
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea2">Life</label>
                                                <textarea name="life" class="form-control" id="" cols="30" rows="10">
<<<<<<< HEAD
                                                                                                            {{ $data->memorialDescription ? $data->memorialDescription->life : '' }}
                                                                                                        </textarea>
=======
                                                                                                                {{ $data->memorialDescription ? $data->memorialDescription->life : '' }}
                                                                                                            </textarea>
>>>>>>> b39e2372f9e39e2a093e9d08041047edf02f7544
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn__primary show_confirm"
                                                data-dismiss="modal">Save
                                                Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick view modal end -->
                    @include('components.modal', $data)
                    @include('components.modal_approved', ['memorial_id' => $data->id])
                    @include('components.tab_memorial_details', $data)
                </div>
                <!-- product details wrapper end -->
            </div>
        </div>
    </div>
@endsection
