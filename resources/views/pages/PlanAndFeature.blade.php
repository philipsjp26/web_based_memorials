@extends('layouts.home')

@section('content')
    <div class="container" style="width: 40%">
        <div class="row">
            <div class="col-sm-6">
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="{{ url('storage/images/freemium.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Freemium</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#freemiumModal"
                            style="border-radius: 0.25rem; margin-top: 10%" class="btn btn__primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="{{ url('storage/images/premium.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Premium</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#premiumModal"
                            style="border-radius: 0.25rem; margin-top: 10%" class="btn btn__primary">Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="freemiumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 500px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel" style="margin-bottom: 0; line-height: 1.5">
                            Freemium Details</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>- Max Gallery Photo 5 pcs</p>
                        <p>- Max Gallery Video 5 pcs</p>
                        <p>- Default url inks page</p>
                        <p>- One admin</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="premiumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 500px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel" style="margin-bottom: 0; line-height: 1.5">
                            Premium Details</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>- Max Gallery Photo Unlimited</p>
                        <p>- Max Gallery Video 5 pcs</p>
                        <p>- Default url links page</p>
                        <p>- More Than One Admin</p>
                    </div>
                    <form action="/transaction/create" method="post">
                        @csrf
                        @method('POST')
                        @foreach ($data as $item)
                            @if (count($item->customer_transactions) > 0)
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success rounded" disabled>Request Upgrade</button>
                                </div>
                            @else
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success rounded">Request Upgrade</button>
                                </div>
                            @endif
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
