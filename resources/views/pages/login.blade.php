@extends('layouts.home')

@section('content')
    <div class="login-register-wrapper section-space">
        <div class="container" style="width: 40%">
            <div class="member-area-from-wrap">
                <div class="row">
                    <!-- Login Content Start -->
                    <div class="login-reg-form-wrap">
                        <h2>Sign In</h2>
                        <form action="/auth/login" method="post">
                            @csrf
                            <div class="single-input-item">
                                <input class="form-control" type="email" name="email" placeholder="Email or Username"
                                    @error('email') is-invalid @enderror autofocus required autocomplete="off"
                                    value="{{ old('email') }}" />
                            </div>
                            <div class="single-input-item">
                                <input type="password" name="password" placeholder="Enter your Password" required />
                            </div>
                            <div class="single-input-item">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <a href="/auth/register" class="forget-pwd">Sign up</a>
                                    <a href="/auth/forgotPassword" class="forget-pwd">Forget Password?</a>
                                </div>
                            </div>
                            <div class="single-input-item">
                                <button class="btn btn__bg">Login</button>
                            </div>
                        </form>
                    </div>
                    <!-- Login Content End -->
                </div>
            </div>
        </div>
    </div>
    {{-- End of main --}}
@endsection
