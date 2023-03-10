@extends('layouts.main')

@section('sidebar')
    @include('partition.sidebar')
@endsection()

@section('container')
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark fw-bold"><a href="/admin-category" class="t-decor">All Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Category</li>
            </ol>
        </nav>
    </div>

    <div class="d-inline">
        <a href="/admin-create-category" type="button" class="btn btn-primary mt-3 mb-5">Create your category</a>
    </div>

    <div class="ftmg-bottom">
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
                                    <i class="bi bi-pencil-square bg-warning me-2"></i>
                                </a>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
@section('footer')
    @include('partition.footer')
@endsection
