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
                                        <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>
                                            Payment
                                            Method</a>
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
                                                            @if (count($dashboard) > 0)
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
                                                                        <form action="/memorial/destroy/{{ $item->id }}"
                                                                            method="post">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <td class="d-flex justify-content-evenly">
                                                                                <a href="detail/{{ $item->id }}"
                                                                                    class="btn btn__warning"
                                                                                    style="border-radius: 10%">Edit</a>
                                                                                <button type="submit" class="btn btn__bg"
                                                                                    style="border-radius: 10%">
                                                                                    Delete
                                                                                </button>
                                                                            </td>
                                                                        </form>
                                                                    </tr>
                                                                @endforeach
                                                            @endif

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
                                                    @if ($account->type == 'freemium')
                                                        <button class="btn btn__primary px-4 py-2 rounded">Freemium</button>
                                                    @else
                                                        <button class="btn btn-success px-4 py-2 rounded">Premium</button>
                                                    @endif
                                                </div>
                                                <div class="account-details-form">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="single-input-item">
                                                                    <label for="username"
                                                                        class="required">Username</label>
                                                                    <input type="text" name="username" id="username"
                                                                        placeholder="{{ $account->username }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email Address</label>
                                                            <input type="email" id="email"
                                                                placeholder="{{ $account->email }}" />
                                                        </div>
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
                                                        <tbody>
                                                            @if ($transaction != null)
                                                                @php
                                                                    $transaction_id = null;
                                                                @endphp
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
                                                            @else
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Payment Method</h3>
                                                @if ($transaction != null)
                                                    @foreach ($transaction as $item)
                                                        @if ($item->status == 'complete')
                                                            <p class="saved-message">No Transaction Yet</p>
                                                        @else
                                                            <div class="myaccount-table table-responsive text-center">
                                                                <table class="table table-bordered">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <th>Code</th>
                                                                            <th>Bank Name</th>
                                                                            <th>Account Number</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>BCA</td>
                                                                            <td>Bank Central Asia</td>
                                                                            <td>7685217881</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif

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
