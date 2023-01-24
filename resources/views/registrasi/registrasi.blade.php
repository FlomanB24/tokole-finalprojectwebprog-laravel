@extends('layouts.main')

@section('container')

    <body class="bg-color">
        <div class="card width-card shadow">
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h3 class="text-center mb-5 pt-4">Register to Tokolé</h3>

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

                            <div class="form-outline mb-4">
                                <input type="text" id="nameuser" name="nameuser"
                                    class="form-control form-control-lg @error('nameuser') is-invalid @enderror" required
                                    placeholder="Username" />
                                @error('nameuser')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="emailuser" name="emailuser"
                                    class="form-control form-control-lg @error('emailuser') is-invalid @enderror" required
                                    placeholder="Email" />
                                @error('emailuser')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror" required
                                    placeholder="Password" />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="confirm_password" name="confirm_password"
                                    class="form-control form-control-lg @error('confirm_password') is-invalid @enderror"
                                    required placeholder="Confirm Password" />
                                @error('confirm_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4 sign-position">Register</button>
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
