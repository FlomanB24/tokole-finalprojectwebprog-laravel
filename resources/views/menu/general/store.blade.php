@extends('layouts.main')

@section('header')
    @include('partition.navbar')
@endsection

@section('jumbotron')
    @include('partition.jumbotron')
@endsection

@section('container')
    <div class="container width-container">
        <h1 class="text-center pt-4">About <br>{{ $store->nama_store }}</h1>
        <p class="text-center">{{ $store->deskripsi_store }}</p>
        <a class="text-center btn btn-primary btn-about mb-4" href="/store-detail/{{ $store->id }}">Read More</a>
    </div>

    <br>

    <div class="card mb-4 w-card  shadow rounded-10">
        <div class="card-body">
            <h5 class="mb-5 ms-5 mt-2 fw-bold">Top Product</h5>
            <div class="row m-row2 text-center">
                @foreach ($store->products as $st)
                    <div class="col mb-4">
                        <a href="/detail-product/{{ $st->id }}" class="text-decor text-dark">
                            <div class="card shadow-sm rounded" style="width: 10rem;">
                                <img src="{{ asset('storage/' . $st->image) }}" alt="" class="card-img-top"
                                    alt="" width="100px" height="150px">
                                <div class="card-body">
                                    <p class="card-text">{{ $st->nama_product }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="card mb-4 w-card shadow rounded-10">
        <div class="card-body">
            <h5 class="mb-5 ms-5 mt-2 fw-bold">List Product</h5>
            <div class="row m-row2 text-center">
                @foreach ($store->products as $st)
                    <div class="col mb-4">
                        <a href="/detail-product/{{ $st->id }}" class="text-decor text-dark">
                            <div class="card shadow-sm rounded" style="width: 18rem;">
                                @if ($st->image)
                                    <img src="{{ asset('storage/' . $st->image) }}" alt="" class="card-img-top"
                                        alt="" width="100px" height="150px">
                                @else
                                    <img src="{{ asset('storage/images/' . $st->image) }}" class="card-img-top"
                                        alt="" width="100px" height="150px" alt="">
                                @endif
                                <div class="card-body">
                                    <p class="card-text">{{ $st->nama_product }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
