@extends('layouts.main')

@section('header')
    @include('partition.navbar')
@endsection

@section('jumbotron')
    @include('partition.jumbotron')
@endsection

@section('container')
    <div class="container width-container">

        <h1 class="text-center pt-4">About Us</h1>
        <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt dolorem cupiditate
            mollitia reprehenderit,
            fugiat debitis. Repudiandae odio, labore delectus fugit error ipsum corporis sit molestias laudantium quasi
            exercitationem nihil. Sequi fugit, molestiae ea cumque debitis doloremque ab voluptates ducimus consequuntur
            voluptatibus. Provident et impedit facere doloremque nobis mollitia iusto consequuntur architecto minus!
            Possimus omnis consequuntur sint reiciendis ex nemo tenetur numquam delectus sequi officia, maxime soluta
            provident deserunt odit velit. Ut nemo temporibus, nobis natus libero quidem praesentium amet? Aut, numquam
            repudiandae. Officia dolor ducimus, fugiat accusantium quam asperiores excepturi sapiente optio minima! Minima
            aliquam exercitationem non cum facilis ad a ut modi odit. <a href="/aboutus">Read More</a></p>
        
    </div>
    <br>


    <div class="card mb-4 w-card  shadow rounded-10">
        @if ($products->count())
            <div class="card-body">
                <div class="row m-row2 text-center">
                    @foreach ($products as $product)
                        <div class="col mb-4">
                            <a href="/detail-product/{{ $product->id }}" class="text-decor">
                                <div class="card shadow-sm rounded" style="width: 10rem;">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                        class="img-fluid mt-3">
                                    <div class="card-body">
                                        <p class="card-text text-dark">{{ $product->nama_product }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-4">No products available</p>
        @endif
    </div>

    <div class="card mb-4 w-card shadow rounded-10">
        @if ($stores->count())
            <div class="card-body">
                <div class="row m-row2 text-center">

                    @foreach ($stores as $store)
                        <div class="col mb-4">
                            <a href="/store/{{ $store->id }}" class="text-decor text-dark">
                                <div class="card shadow-sm rounded" style="width: 18rem;">
                                    @if ($store->image)
                                        <img src="{{ asset('storage/' . $store->image) }}" alt=""
                                            class="card-img-top" alt="" width="100px" height="150px">
                                    @else
                                        <img src="{{ asset('storage/images/' . $store->image) }}" class="card-img-top"
                                            alt="" width="100px" height="150px" alt="">
                                    @endif
                                    <div class="card-body">
                                        <p class="card-text">{{ $store->nama_store }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-4">No stores available</p>
        @endif
        <div class="d-flex justify-content-center">
            {{ $stores->links() }}
        </div>
    </div>

@endsection

@section('footer')
    @include('partition.footer')
@endsection
