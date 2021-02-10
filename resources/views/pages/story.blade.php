@extends('layouts.header')
@section('title', 'Home')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <img src="img/kuta.jpg" class="card-img-top" alt="...">
                    <p class="card-text">This is a longer card with
                        supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    <a href="/" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection
