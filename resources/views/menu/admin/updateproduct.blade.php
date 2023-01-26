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
                <li class="breadcrumb-item text-dark fw-bold"><a href="/admin-view-product" class="t-decor">All Product</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">View Product</li>
                <li class="breadcrumb-item active" aria-current="page">Update Product</li>
            </ol>
        </nav>
    </div>

    <div class="ftmg-bottom">
        <form action="{{ route('admin-update-product', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <div class="mb-3">
                    <label for="store_id" class="form-label">Store Name</label>
                    <select class="form-select  @error('store_id') is-invalid @enderror" name="store_id" id="store_id"
                        required>
                        @foreach ($stores as $store)
                            <option @if ($store->id === $product->store->id) selected @endif value="{{ $store->id }}">
                                {{ $store->nama_store }}
                            </option>
                        @endforeach
                    </select>
                    @error('store_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama_product" class="form-label">Product Name</label>
                    <input type="text" name="nama_product"
                        class="form-control @error('nama_product') is-invalid @enderror" id="nama_product"
                        placeholder="Product name" required value="{{ $product->nama_product }}">
                    @error('nama_product')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Price</label>
                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                        id="harga" id="harga" placeholder="Price" required value="{{ $product->harga }}">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi_produk" class="form-label">Description</label>
                    <textarea type="text" class="form-control @error('deskripsi_produk') is-invalid @enderror" id="deskripsi_produk"
                        name="deskripsi_produk" id="deskripsi_produk" rows="3" required value="{{ $product->deskripsi_produk }}"></textarea>
                    @error('deskripsi_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror"
                        id="category" id="rating" placeholder="Rating" required value="{{ $product->rating }}">
                    @error('rating')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                        id="category" id="image" placeholder="Product image" required value="{{ $product->image }}">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary d-flex btn-position pe-4 ps-4">Save</button>
            </div>
        </form>
    </div>
@endsection
@section('footer')
    @include('partition.footer')
@endsection
