@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    @if (session()->has('message'))
        <div class="alert alert-success alertwidth" role="alert">{{ session()->get('message') }}</div>
    @endif

    <div class="col-md-12 mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark fw-bold"><a href="/admin-view-product" class="t-decor">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Profile</li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
            </ol>
        </nav>
    </div>

    <div class="container width-container">
        <div style="width:50%;" class="mg-edit">
            <form action="{{ route('edit-password') }}" method="post" class="mg-formchange">
                @csrf

                <h5 class="colorfont mb-3">Change Password</h5>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('current_password') is-invalid @enderror""
                        name="current_password" id="current_password" placeholder="Current Password">
                    @error('current_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="current_password">Old Password</label>
                </div>


                <div class="form-floating mb-3 ">
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="password">New Password</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="password">Password Confirmation</label>
                </div>

                <button type="submit" class="btn btn-primary mt-4 btn-edit ps-4 pe-4">Save</button>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
