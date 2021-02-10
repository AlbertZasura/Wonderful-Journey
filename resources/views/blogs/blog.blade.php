@extends('layouts.header')
@section('title', 'Blog')

@section('content')
    
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a href="/blog/create" class="btn btn-outline-primary">+ Create Blog</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kuta</td>
                        <td>
                            <form action="/" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-primary btn-sm my-2 my-sm-0">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
