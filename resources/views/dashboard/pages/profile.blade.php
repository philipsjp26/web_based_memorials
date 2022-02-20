@extends('dashboard.index')

@section('profile')
    {{-- <div class="main-content position-relative max-height-vh-100 h-100">

    </div> --}}
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('dashboard/assets/img/team-1.jpg') }}" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Mark Davis
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Public Relations
                        </p>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Profile</p>                            
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">User Information</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" value="lucky.jesse">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email address</label>
                                    <input class="form-control" type="email" value="jesse@example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">First name</label>
                                    <input class="form-control" type="text" value="Jesse">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Last name</label>
                                    <input class="form-control" type="text" value="Lucky">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Contact Information</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Address</label>
                                    <input class="form-control" type="text"
                                        value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="{{ asset('dashboard/assets/img/bg-profile.jpg') }}" alt="Image placeholder"
                        class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="{{ asset('dashboard/assets/img/team-2.jpg') }}"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            <a href="javascript:;" class="btn btn-sm btn-info float-right mb-0 d-none d-lg-block">Premium</a>
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                    class="ni ni-collection"></i></a>                             
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">                              
                                    <div class="d-grid text-center mx-4">
                                        <span class="text-lg font-weight-bolder">10</span>
                                        <span class="text-sm opacity-8">Photos</span>
                                    </div>
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">89</span>
                                        <span class="text-sm opacity-8">Memorials</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h5>
                                Mark Davis<span class="font-weight-light">, 35</span>
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Bucharest, Romania
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
