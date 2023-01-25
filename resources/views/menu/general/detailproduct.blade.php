@extends('layouts.main')

@section('header')
    @include('partition.navbar')
@endsection

@section('jumbotron')
    @include('partition.jumbotron')
@endsection

@section('container')
    <div class="col-md-12 ms-breadcump">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark fw-bold"><a href="/" class="t-decor">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Products</li>
            </ol>
        </nav>
    </div>

    <div class="container width-container">
        <h1 class="pt-4 text-center">{{ $product->nama_product }}</h1>
    </div>

    <br>

    <img src="{{ asset('storage/' . $product->image) }}" alt="" width="600"
        class="m-image mb-4 rounded shadow-sm img-thumbnail">

    <div class="container width-container2 mb-4 ">
        <h5>Description Product</h5>
        <p class="text-justify">{{ $product->deskripsi_produk }}</p>
        <h6>Price: Rp. {{ number_format($product->harga) }}</h6>
        <h6 class="ftmg-bottom2">Rating: {{ $product->rating }}</h6>
    </div>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
