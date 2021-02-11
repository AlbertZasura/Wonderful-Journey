@extends('layouts.header')
@section('title', 'My Blog')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h2 class="mb-4 line">My Blog</h2>
            <a href="/article/create" class="btn btn-outline-primary mb-3">+ Create Blog</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($articles); $i++)
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td> <a href="/article/{{ $articles[$i]->id }}">{{ $articles[$i]->title }}</a></td>
                            <td>
                                <form action="/article/{{ $articles[$i]->id }}/delete" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-outline-danger btn-sm my-2 my-sm-0">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
