@extends('layouts.home')

@section('content')
    <style>
        .login-reg-form-wrap .title-password {
            color: #555;
            font-family: 'Monaco';
            text-align: center
        }
        .icon {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 10%;
            padding-bottom: 2%;
        }
    </style>
    <div class="login-register-wrapper section-space">
        <div class="container" style="width: 40%">
            <div class="member-area-from-wrap">
                <div class="row">
                    <!-- Login Content Start -->
                    <div class="login-reg-form-wrap">
                        <img class="icon" src={{ asset('img/icon/reset.png') }} alt="">
                        <form action="/login" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="single-input-item">
                                <input class="form-control" type="email" name="email" placeholder="Email or Username"
                                    value="" required />
                            </div>
                            <div class="single-input-item">
                                <input type="password" name="password" placeholder="Enter your password" required />
                            </div>
                            <div class="single-input-item">
                                <input type="password" name="password" placeholder="Confirm new password" required />
                            </div>
                            <div class="single-input-item">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <a href="/auth/register" class="forget-pwd">Sign up</a>
                                </div>
                            </div>
                            <div class="single-input-item">
                                <button class="btn btn__bg">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- Login Content End -->
                </div>
            </div>
        </div>
    </div>
@endsection
