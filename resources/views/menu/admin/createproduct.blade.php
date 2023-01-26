@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success alertwidth" role="alert">
            <div class="d-inline mes-l">
                <strong>{{ session('success') }}</strong>
            </div>
            <button type="button" class="btn-close ms" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-md-12 mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark fw-bold"><a href="/admin-view-product" class="t-decor">All Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Product</li>
                <li class="breadcrumb-item active" aria-current="page">Create Product</li>
            </ol>
        </nav>
    </div>

    <div class="ftmg-bottom2">
        <form action="{{ route('add_product') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="mb-3">
                    <label for="store_name" class="form-label">Store Name</label>
                    <select class="form-select @error('store_id') is-invalid @enderror" id="category" name="store_id"
                        required>
                        @foreach ($stores as $store)
                            @if (old('store_id') == $store->id)
                                <option value="{{ $store->id }}" selected>{{ $store->nama_store }}</option>
                            @else
                                <option value="{{ $store->id }}">{{ $store->nama_store }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('store_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="nama_product"
                        class="form-control @error('nama_product') is-invalid @enderror" id="category" id="name"
                        placeholder="Product name" required>
                    @error('nama_product')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                        id="category" id="price" placeholder="Price" required>
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control @error('deskripsi_produk') is-invalid @enderror" id="category"
                        name="deskripsi_produk" id="description" rows="3" required></textarea>
                    @error('deskripsi_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror"
                        id="category" id="rating" placeholder="Rating" required>
                    @error('rating')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                        id="category" id="image" placeholder="Product image" required>
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary d-flex btn-position ps-4 pe-4">Save</button>
            </div>
        </form>
    </div>
@endsection
@section('footer')
    @include('partition.footer')
@endsection
