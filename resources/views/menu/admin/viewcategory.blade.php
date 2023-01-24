@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <div class="d-inline">
        <a href="/admin-create-category" type="button" class="btn btn-primary mt-3 mb-5">Create your category</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        <span>
                            <a href={{ route('update-category', ['id' => $category->id]) }}>
                                <i class="bi bi-pencil-square  me-2"></i>
                            </a>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
