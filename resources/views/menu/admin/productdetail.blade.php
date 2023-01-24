@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark"><a href="/admin-view-product" class="t-decor">All Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Products</li>
                <li class="breadcrumb-item active" aria-current="page">View Products Details</li>
            </ol>
        </nav>
    </div>

    <div class="container width-container">
        <h1 class="pt-4 text-center">{{ $product->nama_product }}</h1>
    </div>
    <br>
    <img src={{ asset('storage/' . $product->image) }} alt="food" width="600" class="m-image mb-4 rounded img-thumbnail">
    <div class="container width-container mb-4">
        <h6>Store Name: {{ $product->store->nama_store }}</h6>
        <h6>Address: {{ $product->store->alamat }}</h6>
        <h6>Price: Rp. {{ number_format($product->harga) }}</h6>
        <h6>Description Product</h6>
        <p class="text-justify">{{ $product->deskripsi_produk }}</p>

    </div>
@endsection
