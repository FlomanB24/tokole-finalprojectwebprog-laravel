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
    <h5 class="mb-4">Create Category</h5>
    <form action="{{ route('add-category') }}", method="post">
        @csrf
        <div>
            <div class="mb-3">
                <label for="category" class="form-label">Category Name</label>
                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror"
                    id="category" placeholder="Category name" required>
                @error('category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary d-flex btn-position">Save</button>
        </div>
    </form>
@endsection
