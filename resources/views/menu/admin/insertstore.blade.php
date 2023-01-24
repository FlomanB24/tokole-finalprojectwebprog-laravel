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
    <h5 class="mb-4">Create store</h5>
    <form class="mt-u" action="{{ route('add-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="mb-3">
                <label for="category" class="form-label">Category store</label>
                <select class="form-select @error('category_id') is-invalid @enderror" id="category" name="category_id"
                    id="category" required>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endif
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
                    id="category" id="name" placeholder="Store name" required>
                @error('mama_store')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="owner" class="form-label">Owner</label>
                <input type="text" name="nama_seller" class="form-control @error('nama_seller') is-invalid @enderror"
                    id="category" id="owner" placeholder="Owner" required>
                @error('nama_seller')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hpnumber" class="form-label">Handphone Number</label>
                <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror"
                    id="category" id="hpnumber" placeholder="Handpone number" required>
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="alamat" class="form-control" id="address" placeholder="Address" required>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Jam Buka</label>
                <input type="text" name="jam_buka" class="form-control @error('jam_buka') is-invalid @enderror"
                    id="category" id="time" placeholder="Jam Buka" required>
                @error('jam_buka')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control @error('deskripsi_store') is-invalid @enderror" id="category"
                    name="deskripsi_store" id="description" rows="3" required></textarea>
                @error('deskripsi_store')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                    id="category" id="image" placeholder="Product image" required>
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
