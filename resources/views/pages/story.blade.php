@extends('layouts.header')
@section('title', $article->title)

@section('content')
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $article->title }}</h2>
                    <img src="{{ asset('img/' . $article->image) }}" class="card-img-top" alt="...">
                    <p class="card-text mt-3">
                        {{ $article->description }}
                    </p>
                    <a href="/" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col-md-6 offset-md-1">
                    <h3 class="mb-4 line">Another Blog</h3>
                    @for ($i = 0; $i < 3; $i++)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $articles[$i]->title }}</h5>
                                <p class="card-text text-truncate" style="max-width: 1 rem;">
                                    {{ $articles[$i]->description }}
                                </p>
                                <a href="/article/{{ $articles[$i]->id }}">Read More</a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>


@endsection
