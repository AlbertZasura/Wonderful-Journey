@extends('layouts.header')
@section('title', 'Home')

@section('content')
    @can('isMember')
        <h1 class="mb-5 text-center">Welcome <span class="line">{{ Auth::user()->name }}</span></h1>
    @endcan
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($articles as $article)
            <div class="col">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text m-0 module line-clamp">{{ $article->description }}</p>
                        <a class="d-inline" href="/article/{{ $article->id }}">Read more</a>
                        <p class="mt-3"><em>Category: <a
                                    href="/article/category/{{ $article->categories->name }}">{{ $article->categories->name }}</a></em>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
