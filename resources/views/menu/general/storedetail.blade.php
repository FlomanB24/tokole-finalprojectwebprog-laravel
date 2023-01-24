@extends('layouts.main')

@section('header')
    @include('partition.navbar')
@endsection

@section('jumbotron')
    @include('partition.jumbotron')
@endsection

@section('container')
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark"><a href="/" class="t-decor">Store</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Store</li>
            </ol>
        </nav>
    </div>
    <div class="container width-container">

        <h1 class="text-center pt-4">{{ $store->nama_store }}</h1>
        <p class="text-center">{{ $store->deskripsi_store }}</p>

    </div>
    <br>

    <div class="card mb-6">

        <div class="row">
            <div class="col-md-4">
                <div class="img-show">
                    <img src="{{ asset('storage/' . $store->image) }}" alt="" class="card-img-top rounded img-thumbnail" alt=""
                        width="100px" height="150px">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body ml">
                    <h5 class="card-title">Seller:</h5>
                    <p class="card-text">{{ $store->nama_seller }}</p>
                    <hr width="180%">

                    <h5 class="card-title">Category:</h5>
                    <p class="card-text">{{ $store->category->category_name }}</p>
                    <hr width="180%">

                    <h5 class="card-title">Address:</h5>
                    <p class="card-text">{{ $store->alamat }}</p>
                    <hr width="180%">

                    <h5 class="card-title">Phone Number:</h5>
                    <p class="card-text">{{ $store->no_telp }}</p>
                    <hr width="180%">

                    <h5 class="card-title">Jam Buka:</h5>
                    <p class="card-text">{{ $store->jam_buka }}</p>
                    <hr width="180%">
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
