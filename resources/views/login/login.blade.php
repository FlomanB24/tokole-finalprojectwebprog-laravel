@extends('layouts.main')

@section('container')

    <body class="bg-color">

        @if (session()->has('failed'))
            <div class="alert alert-danger alertwidth" role="alert">
                <div class="d-inline mes-l">
                    <strong>{{ session('failed') }}</strong>
                </div>
                <button type="button" class="btn-close ms" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card width-card shadow mg-login">
            <div class="card-body">
                <h3 class="text-center mb-5 pt-4">Login to Tokolé</h3>

                <div class="tab-content">
                    <div>
                        <form action={{ route('login') }} method="post">
                            @csrf

                            <div class="form-outline mb-4 input-margin">
                                <label class="form-label" for="name">Username</label>
                                <input
                                    value="{{ Cookie::get('remember_name') != null ? Cookie::get('remember_name') : '' }}"
                                    type="text" id="name" name="name"
                                    class="form-control width-input @error('name') is-invalid @enderror" required />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-4 input-margin">
                                <label class="form-label" for="password">Password</label>
                                <input
                                    value="{{ Cookie::get('remember_password') != null ? Cookie::get('remember_password') : '' }}"
                                    type="password" id="password" name="password"
                                    class="form-control width-input @error('password') is-invalid @enderror" required />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 d-flex">
                                    <div class="form-check mb-3 mb-md-0 margin-remember">
                                        <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me"
                                            checked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex">
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-4 sign-position">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
