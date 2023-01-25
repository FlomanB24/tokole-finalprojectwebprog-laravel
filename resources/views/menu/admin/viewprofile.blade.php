@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
<div class="col-md-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-dark fw-bold"><a href="/admin-view-product" class="t-decor">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Profile</li>
        </ol>
    </nav>
</div>
    <div class="container width-container">
        <div style="width:50%;" class="mg-edit">
            <div class="d-inline">
                <div class="card mg-card" style="width: 20rem; height: 35rem">
                    <div class="card-body text-center">
                        <h5 class="card-title mt-5 mb-5">Admin Profile</h5>
                        <p class="card-text">User Name: {{ $user->nameuser }}</p>
                        <p class="card-text mb-5">Email: {{ $user->emailuser }}</p>
                        <a href="/edit-profile" class="card-link btn btn-primary">Edit Profile</a>
                        <a href="/update-password" class="card-link btn btn-primary">Change Password</a>
                    </div>
                </div>
            </div>

            <div class="d-inline img-mg">
                <img src="/image/Market.png" style="width: 50rem;" alt="" class="img-mg">
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
