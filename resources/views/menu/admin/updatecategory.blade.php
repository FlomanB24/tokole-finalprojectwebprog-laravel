@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <h5 class="mb-4">Update Category</h5>
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
