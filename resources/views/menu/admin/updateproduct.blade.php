@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <h5 class="mb-4">My Service > Create services</h5>
    <form action="{{ route('admin-update-product', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="mb-3">
                <label for="store_name" class="form-label">Store Name</label>
                <select class="form-select  @error('store_id') is-invalid @enderror" name="store_id" required>
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
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="nama_product" class="form-control @error('nama_product') is-invalid @enderror"
                    id="category" id="name" placeholder="Product name" required value="{{ $product->nama_product }}">
                @error('nama_product')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                    id="category" id="price" placeholder="Price" required value="{{ $product->harga }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control @error('deskripsi_product') is-invalid @enderror" id="category"
                    name="deskripsi_produk" id="description" rows="3" required value="{{ $product->deskripsi_produk }}"></textarea>
                @error('deskripsi_product')
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
            <button type="submit" class="btn btn-primary d-flex btn-position">Save</button>
        </div>
    </form>
@endsection
