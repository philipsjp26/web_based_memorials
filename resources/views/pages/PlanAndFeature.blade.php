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
                        <a href="/feature/freemium" style="border-radius: 0.25rem; margin-top: 10%" class="btn btn__primary">Details</a>
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
                        <a href="#" class="btn btn__primary" style="border-radius: 0.25rem; margin-top: 10%;">Go
                            somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
