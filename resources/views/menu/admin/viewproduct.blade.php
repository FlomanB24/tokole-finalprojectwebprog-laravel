@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    @if (session()->has('deleted'))
        <div class="alert alert-success alertwidth" role="alert">
            <div class="d-inline mes-r">
                <strong>{{ session('deleted') }}</strong>
            </div>
        </div>
    @endif
    <div class="d-inline">
        <form class="d-flex position-search">
            <input class="form-control me-2" style="width:500px;" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success border-danger" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <a href="/admin-create-product" type="button" class="btn btn-primary mt-3 mb-5">Create your product</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Toko</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $product->store->nama_store }}</td>
                    <td>{{ $product->nama_product }}</th>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->store->category->category_name }}</td>
                    <td>
                        <span class="d-inline-flex">
                            <a href="{{ route('product_detail', ['id' => $product->id]) }}">
                                <i class="bi bi-eye  me-2"></i>
                            </a>
                            <a href={{ route('admin-update', ['id' => $product->id]) }}>
                                <i class="bi bi-pencil-square  me-2"></i>
                            </a>
                            <form action="{{ route('delete', ['id' => $product->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Are you sure this product?')"><i
                                        class="bi bi-trash3"></i></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection