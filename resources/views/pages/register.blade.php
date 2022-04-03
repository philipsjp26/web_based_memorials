@extends('layouts.auth')

@section('content')
    <div class=" bg-img" data-bg={{ asset('img/background/main_background.webp') }}>
        <div class="login-register-wrapper section-space">
            <div class="container" style="width: 30%">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Login Content Start -->
                        <div class="login-reg-form-wrap">
                            <h2>Register</h2>
                            <form action="/auth/register" method="post">

                                @csrf
                                @method('POST')
                                <div class="single-input-item">
                                    <input type="email" placeholder="Email" name="email" required autocomplete="off" />
                                </div>
                                <div class="single-input-item">
                                    <input type="text" placeholder="Username" name="username" required autocomplete="off" />
                                </div>
                                <div class="single-input-item">
                                    <input type="password" placeholder="Enter your Password" name="password" required />
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <a href="/auth/login" class="forget-pwd">Sign in</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button type="submit" class="btn btn__bg show_confirm">Register</button>
                                </div>
                            </form>
                        </div>
                        <!-- Login Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
