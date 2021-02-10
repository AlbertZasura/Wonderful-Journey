@extends('layouts.header')
@section('title', 'Home')

@section('content')
    @can('isMember')
        <h3 class="mb-5 text-center">Welcome {{ Auth::user()->name }}</h3>
    @endcan
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($articles as $article)
            <div class="col">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text m-0 module line-clamp">{{ $article->description }}
                            <a class="d-inline" href="/article/{{ $article->id }}">see</a>
                        </p>
                        {{-- <p class="card-text"><span class="truncate">{{ $article->description }}</span><a href="#">Read more</a></p> --}}

                        <p><em>Category: <a
                                    href="/article/category/{{ $article->categories->name }}">{{ $article->categories->name }}</a></em>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
