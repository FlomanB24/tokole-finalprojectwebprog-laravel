@extends('layouts.main')

@section('header')
    @include('partition.navbar')
@endsection

@section('jumbotron')
    @include('partition.jumbotron')
@endsection

@section('container')
    <section id="contact" class="mg-contact">
        <div class="container">
            <div class="row text-center mb-3 mt-5">
                <div class="col">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                        <strong>Thank You! </strong> We have received your message.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form name="tokole-contact-form">
                        @csrf

                        <div class="mb-3">
                            <label for="Name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"
                                name="nama" />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email"
                                name="email" />
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">Message</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-kirim">Send</button>

                        <button class="btn btn-primary btn-loading d-none mb-5 mg-contact" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('partition.footer')
@endsection
