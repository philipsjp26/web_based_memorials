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
                                @foreach ($data as $item)
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
                                            @else
                                                <span class="badge badge-sm bg-gradient-success">Completed</span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-bold">{{ $item->created_at }}</span>
                                        </td>
                                        <td class="align-center text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#transactionModal">Update</button>
                                            <a class="btn btn-danger" href="#">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">No : 0219202213CUST00035</h5>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="complete">Complete</option>
                                <option value="reject">Reject</option>
                            </select>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-8">
                            <input type="text" class="form-control form-control-muted" placeholder="Filename.png" disabled>
                        </div>
                        <div class="col">
                            <a class="btn btn-secondary" href="#">Download</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
