@extends('dashboard.index')

@section('content')
    <div class="container-fluid py-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Transactions</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No Transaction</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Status</th>
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
                                @php
                                    $id = null;
                                    $transaction_id = null;
                                    $transaction_images = null;
                                    $transaction_number = null;
                                @endphp
                                @foreach ($data as $item)
                                    @php
                                        $id = $item->id;
                                        $transaction_images = $item->transaction_images;
                                        $transaction_number = $item->public_uid;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->public_uid }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            @if ($item->status == 'pending')
                                                <span class="badge badge-sm bg-gradient-secondary">Pending</span>
                                            @elseif($item->status == 'complete')
                                                <span class="badge badge-sm bg-gradient-success">Completed</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-bold">{{ $item->created_at }}</span>
                                        </td>
                                        <form action="/transaction/destroy/{{ $item->id }}" method="post">
                                            <td class="align-center text-center">
                                                @if ($item->status == 'complete')
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#transactionModal" disabled>Update</button>
                                                @else
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#transactionModal">Update</button>
                                                @endif
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" name="filename" class="btn btn-danger">Delete</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                @include('dashboard.components.modal_transaction',
                                [
                                'id' => $id,
                                'transaction_images' => $transaction_images,
                                'transaction_number' => $transaction_number
                                ]);
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
