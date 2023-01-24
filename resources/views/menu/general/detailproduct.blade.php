@extends('layouts.main')

@section('header')
    @include('partition.navbar')
@endsection

@section('jumbotron')
    @include('partition.jumbotron')
@endsection

@section('container')
    <div class="container width-container">
        <h1 class="pt-4 text-center">{{ $product->nama_product }}</h1>
    </div>
    <br>
    <img src="{{ asset('storage/' . $product->image) }}" alt="" width="600" class="m-image mb-4">
    <div class="container width-container mb-4">
        <h5>Description Product</h5>
        <p class="text-justify">{{ $product->deskripsi_produk }}</p>

        <h6>Price: {{ $product->harga }}</h6>
        <h6>Rating: {{ $product->rating }}</h6>

    </div>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
