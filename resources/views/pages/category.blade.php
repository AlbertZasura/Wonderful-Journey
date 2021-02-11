@extends('layouts.header')
@section('title', $name)

@section('content')
    <h2 class="mb-4 line">{{ $name }}</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($articles as $article)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text m-0 module line-clamp" style="max-width: 1 rem;">
                            {{ $article->description }}
                        </p>
                        <a class="" href="/article/{{ $article->id }}">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
