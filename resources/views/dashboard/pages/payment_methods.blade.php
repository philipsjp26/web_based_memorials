@extends('dashboard.index')

@section('content')
    <div class="container-fluid py-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Payment Methods</h6>
                    <button type="submit" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#paymentMethodModal">Add</button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Bank Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Account Number</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Created At</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->bank_name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $item->account_number }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-sm font-weight-bold">{{ $item->account_number }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-bold">{{ $item->created_at }}</span>
                                        </td>
                                        <form action="/admin/destroy/bank/{{ $item->id }}" method="post">
                                            <td class="align-middle text-center">
                                                <a class="btn btn-warning" href="#">Edit</a>
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                @include('dashboard.components.modal_payment_methods')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
