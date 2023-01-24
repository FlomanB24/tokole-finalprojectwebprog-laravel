@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <h5 class="mb-4">My Service > View Store</h5>

    <div class="container width-container">
        <h1 class="pt-4 text-center">{{ $store->nama_store }}</h1>
    </div>
    <br>
    <img src={{ asset('storage/' . $store->image) }} alt="food" width="600" class="m-image mb-4">
    <div class="container width-container mb-4">
        <h6>Store Name: {{ $store->nama_store }}</h6>
        <h6>Category: {{ $store->category->category_name }}</h6>
        <h6>Name Seller: {{ $store->nama_seller }}</h6>
        <h6>No Telpon: {{ $store->no_telp }}</h6>
        <h6>Alamat: {{ $store->alamat }}</h6>
        <h6>Description Product</h6>
        <p class="text-justify">{{ $store->deskripsi_store }}</p>
    </div>

@endsection
