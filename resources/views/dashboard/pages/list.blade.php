@extends('dashboard.index')

@section('content')
    <div class="container-fluid py-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Accounts</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Account username</th>
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
                                                <div>
                                                    <img src="{{ asset('dashboard/assets/img/team-2.jpg') }}"
                                                        class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->username }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $item->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($item->type == 'premium')
                                                <span class="badge badge-sm bg-gradient-success">Premium</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-secondary">Freemium</span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-bold">{{ $item->created_at }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-warning" href="/admin/profile">Edit</a>
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
@endsection
