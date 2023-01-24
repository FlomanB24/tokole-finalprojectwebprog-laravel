@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <h5 class="mb-4">Create store</h5>
    <form class="mt-u" action="{{ route('admin-update-store', $store->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="mb-3">
                <label for="category" class="form-label">Category store</label>
                <select class="form-select @error('category_id') is-invalid @enderror" id="category" name="category_id"
                    id="category" required>
                    @foreach ($categories as $category)
                        <option @if ($category->id === $store->category->id) selected @endif value="{{ $category->id }}">
                            {{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Store Name</label>
                <input type="text" name="nama_store" class="form-control @error('nama_store') is-invalid @enderror"
                    id="category" id="name" placeholder="Store name" required value="{{ $store->nama_store }}">
                @error('nama_store')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="owner" class="form-label">Owner</label>
                <input type="text" name="nama_seller" class="form-control @error('nama_seller') is-invalid @enderror"
                    id="category" id="owner" placeholder="owner" required value="{{ $store->nama_seller }}">
                @error('nama_seller')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hpnumber" class="form-label">Handphone Number</label>
                <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror"
                    id="category" id="hpnumber" placeholder="Handpone number" required value="{{ $store->no_telp }}">
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                    id="category" id="address" placeholder="Address" required value="{{ $store->alamat }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Jam Buka</label>
                <input type="text" name="jam_buka" class="form-control @error('jam_buka') is-invalid @enderror"
                    id="category" id="time" placeholder="Address" required value="{{ $store->jam_buka }}">
                @error('jam_buka')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control @error('deskripsi_store') is-invalid @enderror" id="category"
                    name="deskripsi_store" id="description" rows="3" required value="{{ $store->deskripsi_store }}"></textarea>
                @error('deskrispi_store')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                    id="category" id="image" placeholder="Product image" required value="{{ $store->image }}">
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
