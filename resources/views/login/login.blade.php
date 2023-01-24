@extends('layouts.main')

@section('container')

    <body class="bg-color">

        {{-- @if (session()->has('failed'))
            <div class="alert alert-danger alertwidth" role="alert">
                <div class="d-inline mes-l">
                    <strong>{{ session('failed') }}</strong>
                </div>
                <button type="button" class="btn-close ms" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}

        <div class="card width-card shadow">
            <div class="card-body">
                <h3 class="text-center mb-5 pt-4">Login to Tokolé</h3>

                {{-- <ul class="nav mg-button mb-3">
                    <li class="nav-item me-5">
                        <button type="button" class="btn btn-outline-primary">Login</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-primary">Register</button>
                    </li>
                </ul> --}}

                <div class="tab-content">
                    <div>
                        <form action={{ route('login') }} method="post">
                            @csrf
                            {{-- <div class="text-center mb-3">
                                <p>Sign in with:</p>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-github"></i>
                                </button>
                            </div>
                            <p class="text-center">or:</p> --}}

                            <div class="form-outline mb-4 input-margin">
                                <label class="form-label" for="name">Username</label>
                                <input type="text" id="name" name="name" class="form-control width-input"
                                    required />
                            </div>

                            <div class="form-outline mb-4 input-margin">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control width-input"
                                    required />
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex">
                                    <div class="form-check mb-3 mb-md-0 margin-remember">
                                        <input class="form-check-input" type="checkbox" name="rememberme" id="rememberme"
                                            checked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex">
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-4 sign-position">Sign in</button>

                            {{-- <div class="text-center">
                                <p>Not a member? <a href="#!">Register</a></p>
                            </div> --}}

                        </form>
                        <div class="text-center">
                            <p>Not a member? <a href="/register">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
