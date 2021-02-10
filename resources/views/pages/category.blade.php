@extends('layouts.header')
@section('title', 'Beach')

@section('content')
    <h4 class="mb-3">{{$name}}</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($articles as $article)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text text-truncate" style="max-width: 1 rem;">
                            {{ $article->description }}
                        </p>
                        <a class="" href="/article/{{ $article->id }}">see</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
