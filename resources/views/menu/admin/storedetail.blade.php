@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <div class="col-md-12 mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark t-decor fw-bold"><a href="/admin-view-store" class="t-decor">All Store</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Store</li>
                <li class="breadcrumb-item active" aria-current="page">Detail Store</li>
            </ol>
        </nav>
    </div>
    
    <div class="ftmg-bottom2">
        <div class="container width-container">
            <h1 class="pt-4 text-center">{{ $store->nama_store }}</h1>
        </div>
        <br>
        <img src={{ asset('storage/' . $store->image) }} alt="food" width="600"
            class="m-image mb-4 rounded img-thumbnail">
        <div class="container width-container2 mg-left-detail mb-4">
            <h6>Store Name: {{ $store->nama_store }}</h6>
            <h6>Category: {{ $store->category->category_name }}</h6>
            <h6>Name Seller: {{ $store->nama_seller }}</h6>
            <h6>No Telpon: {{ $store->no_telp }}</h6>
            <h6>Alamat: {{ $store->alamat }}</h6>
            <h6>Description Product</h6>
            <p class="text-justify">{{ $store->deskripsi_store }}</p>
        </div>
    </div>
@endsection
@section('footer')
    @include('partition.footer')
@endsection
