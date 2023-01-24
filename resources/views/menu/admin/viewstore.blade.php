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
    <div class="col-md-12 mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark t-decor"><a href="/admin-view-store" class="t-decor">All Store</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Store</li>
            </ol>
        </nav>
    </div>
    <div class="d-inline">
        <form class="d-flex position-search" action="{{ route('view_store') }}" method="get">
            <input class="form-control me-2" style="width:500px;" type="search" name="search" placeholder="Search"
                aria-label="Search">
            <button class="btn btn-outline-success border-danger" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <a href="/admin-insert-store" type="button" class="btn btn-primary mt-1 mb-5">Create Store</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col" width="150px">Gambar Toko</th>
                <th scope="col" width="150px">Nama Toko</th>
                <th scope="col">Category</th>
                <th scope="col" width="150px">Nama Seller</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Alamat</th>
                <th scope="col" width="150px">Jam Buka</th>
                <th scope="col">Deskripsi Store</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>

                    <td><img src="{{ asset('storage/' . $store->image) }}" alt="" class="card-img-top"
                            alt="" width="100px" height="80px"></td>
                    <td>{{ $store->nama_store }}</th>
                    <td>{{ $store->category->category_name }}</td>
                    <td>{{ $store->nama_seller }}</td>
                    <td>{{ $store->no_telp }}</td>
                    <td>{{ $store->alamat }}</td>
                    <td>{{ $store->jam_buka }}</td>
                    <td>{{ $store->deskripsi_store }}</td>
                    <td>
                        <span class="d-inline-flex">
                            <a href="{{ route('store_detail', ['id' => $store->id]) }}">
                                <i class="bi bi-eye  me-2"></i>
                            </a>
                            <a href={{ route('update-store', ['id' => $store->id]) }}>
                                <i class="bi bi-pencil-square  me-2"></i>
                            </a>
                            <form action="{{ route('delete-store', ['id' => $store->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Are you sure this store?')"><i
                                        class="bi bi-trash3"></i></button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $stores->links() }}
    </div>
@endsection
