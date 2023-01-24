@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <div class="col-md-12 mb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark "><a href="/admin-category" class="t-decor">All Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Category</li>
                <li class="breadcrumb-item active" aria-current="page">Update Category</li>
            </ol>
        </nav>
    </div>
    <form action="{{ route('admin-update-category', $category->id) }}" method="post">
        @csrf
        <div>
            <div class="mb-3">
                <label for="category" class="form-label">Category Name</label>
                <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror"
                    id="category" id="category" placeholder="Category name" required
                    value="{{ $category->category_name }}">
                @error('category_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary d-flex btn-position">Save</button>
        </div>
    </form>
@endsection
