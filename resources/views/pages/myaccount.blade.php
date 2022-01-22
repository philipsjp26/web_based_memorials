@extends('layouts.home')

@section('content')

    @include('components.breadcrumb')
    <!-- my account wrapper start -->
    <div class="my-account-wrapper section-space pb-0">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboard" class="active" data-bs-toggle="tab"><i
                                                class="fa fa-dashboard"></i>
                                            Dashboard</a>
                                        {{-- <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                            Orders</a> --}}
                                        {{-- <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i>
                                            Download</a> --}}
                                        {{-- <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>
                                            Payment
                                            Method</a> --}}
                                        {{-- <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                            address</a> --}}
                                        <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account
                                            Details</a>
                                        <form id="form1" action="/auth/logout" method="post">
                                            @csrf
                                            @method('POST')
                                            <a href="javascript:;" onclick="document.getElementById('form1').submit();"><i
                                                    class="fa fa-sign-out"></i> Logout</a>
                                        </form>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->

                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Gender</th>
                                                                <th>Relationship</th>
                                                                <th>Category</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $no = 1;
                                                            @endphp
                                                            @foreach ($dashboard as $item)
                                                                <tr>
                                                                    <td>{{ $no++ }}</td>
                                                                    <td>{{ $item->first_name }}</td>
                                                                    <td>{{ $item->gender }}</td>
                                                                    <td>{{ $item->relationship->name }}</td>
                                                                    <td>{{ $item->category->name }}</td>
                                                                    <td class="d-flex justify-content-evenly">
                                                                        <a href="detail/{{ $item->id }}"
                                                                            class="btn btn__warning"
                                                                            style="border-radius: 10%">Edit</a>
                                                                        <a href="#" class="btn btn__bg"
                                                                            style="border-radius: 10%">Delete</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Aug 22, 2019</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td><a href="cart.html" class="btn btn__bg">View</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>July 22, 2019</td>
                                                                <td>Approved</td>
                                                                <td>$200</td>
                                                                <td><a href="cart.html" class="btn btn__bg">View</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>June 12, 2019</td>
                                                                <td>On Hold</td>
                                                                <td>$990</td>
                                                                <td><a href="cart.html" class="btn btn__bg">View</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        {{-- <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Payment Method</h3>
                                                <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                            </div>
                                        </div> --}}
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        {{-- <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Billing Address</h3>
                                                <address>
                                                    <p><strong>Erik Jhonson</strong></p>
                                                    <p>1355 Market St, Suite 900 <br>
                                                        San Francisco, CA 94103</p>
                                                    <p>Mobile: (123) 456-7890</p>
                                                </address>
                                                <a href="#" class="btn btn__bg"><i class="fa fa-edit"></i>
                                                    Edit Address</a>
                                            </div>
                                        </div> --}}
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Account Details</h3>
                                                <div class="account-details-form">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="first-name" class="required">First
                                                                        Name</label>
                                                                    <input type="text" id="first-name"
                                                                        placeholder="First Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Last
                                                                        Name</label>
                                                                    <input type="text" id="last-name"
                                                                        placeholder="Last Name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required">Display
                                                                Name</label>
                                                            <input type="text" id="display-name"
                                                                placeholder="Display Name" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email Addres</label>
                                                            <input type="email" id="email" placeholder="Email Address" />
                                                        </div>
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="single-input-item">
                                                                <label for="current-pwd" class="required">Current
                                                                    Password</label>
                                                                <input type="password" id="current-pwd"
                                                                    placeholder="Current Password" />
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="new-pwd" class="required">New
                                                                            Password</label>
                                                                        <input type="password" id="new-pwd"
                                                                            placeholder="New Password" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="confirm-pwd"
                                                                            class="required">Confirm
                                                                            Password</label>
                                                                        <input type="password" id="confirm-pwd"
                                                                            placeholder="Confirm Password" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item">
                                                            <button class="btn btn__bg">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->

@endsection
