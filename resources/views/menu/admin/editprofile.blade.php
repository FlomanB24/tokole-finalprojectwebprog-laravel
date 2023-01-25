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
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
            </ol>
        </nav>
    </div>

    <div class="container width-container">
        <div style="width:50%;" class="mg-edit">

            <form action="{{ route('update-profile') }}" method="POST" class="db-prof">
                @csrf
                @method('put')
                <h5>Edit Profile</h5>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('nameuser') is-invalid @enderror" name="nameuser"
                        id="nameuser" placeholder="name user" value="{{ old('nameuser', Auth::user()->nameuser) }}">
                    <label for="name">New Username</label>
                    @error('nameuser')
                        <div class="text-danger mt-2 sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input name="emailuser" type="email" class="form-control @error('emailuser') is-invalid @enderror""
                        id="emailuser" placeholder="Email" value="{{ old('emailuser', Auth::user()->emailuser) }}">
                    <label for="email">New Email</label>
                    @error('emailuser')
                        <div class="text-danger mt-2 sm">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4 btn-edit">Save</button>
            </form>
        </div>

    </div>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
