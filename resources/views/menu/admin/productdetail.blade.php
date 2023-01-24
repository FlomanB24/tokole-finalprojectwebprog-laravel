@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <h5 class="mb-4">My Service > View product</h5>

    <div class="container width-container">
        <h1 class="pt-4 text-center">{{ $product->nama_product }}</h1>
    </div>
    <br>
    <img src={{ asset('storage/' . $product->image) }} alt="food" width="600" class="m-image mb-4">
    <div class="container width-container mb-4">
        <h6>Store Name: {{ $product->store->nama_store }}</h6>
        <h6>Address: {{ $product->store->alamat }}</h6>
        <h6>Price: {{ $product->harga }}</h6>
        <h6>Description Product</h6>
        <p class="text-justify">{{ $product->deskripsi_produk }}</p>

    </div>
@endsection
