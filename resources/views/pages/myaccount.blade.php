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
                                        <a href="#transaction" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                            Transaction</a>
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
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <div class="d-flex justify-content-between">
                                                    <h3>Account Details</h3>
                                                    <button class="btn btn__primary px-4 py-2 rounded">Freemium</button>
                                                </div>
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
                                                                    <label for="first-name" class="required">Middle
                                                                        Name</label>
                                                                    <input type="text" id="first-name"
                                                                        placeholder="First Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Last
                                                                        Name</label>
                                                                    <input type="text" id="last-name"
                                                                        placeholder="Last Name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email Address</label>
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
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="transaction" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>No Transaction</th>
                                                                <th>Status</th>
                                                                <th>Created At</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        @php
                                                            $transaction_id = null;
                                                        @endphp
                                                        <tbody>
                                                            @foreach ($transaction as $trx)                                                                
                                                                @php
                                                                    $transaction_id = $trx->id;
                                                                @endphp
                                                                <tr>
                                                                    <td>{{ $trx->public_uid }}</td>
                                                                    <td>{{ $trx->status }}</td>
                                                                    <td>{{ $trx->created_at }}</td>
                                                                    <td class="d-flex justify-content-evenly">
                                                                        <button type="button" data-bs-toggle="modal"
                                                                            data-bs-target="#modalUploadFile"
                                                                            class="btn btn__warning"
                                                                            style="border-radius: 10%">
                                                                            Upload</button>

                                                                        <button type="button" data-bs-toggle="modal"
                                                                            data-bs-target="#modalTransactionDetail"
                                                                            class="btn btn__primary"
                                                                            style="border-radius: 10%">
                                                                            Details</button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            @include('components.modal_upload', ['transaction_id' =>
                                                            $transaction_id])
                                                            @include('components.modal_details_transaction',
                                                            ['transaction_id' => $transaction_id, 'image' => $image])
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
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
