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
                                        Memorial name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        NIK</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Relationship</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Gender</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date of Birth</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date of Death</th>
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
                                                    <h6 class="mb-0 text-sm">{{ $item->first_name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-sm">{{ $item->nik }}</h6>
                                        </td>
                                        <td class="align-middle text-center">
                                            <h6 class="mb-0 text-sm">{{ $item->relationship->name }}</h6>
                                            {{-- <span class="text-secondary text-sm font-weight-bold">2020-01-01</span> --}}
                                        </td>
                                        <td class="align-middle text-center">
                                            <h6 class="mb-0 text-sm">{{ $item->gender }}</h6>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-bold">{{ $item->date_of_birth }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-bold">{{ $item->date_of_death }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-warning" href="#">Edit</a>
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
