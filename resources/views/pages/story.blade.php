@extends('layouts.header')
@section('title', 'Home')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <img src="{{asset('img/'.$article->image)}}" class="card-img-top" alt="...">
                    <p class="card-text">
                        {{$article->description}}
                    </p>
                    <a href="/" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection
