@extends('layouts.header')
@section('title', 'Admin')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($users); $i++)
                        @if ($users[$i]->name === @auth()->user()->name)

                        @else
                            <tr>
                                <th scope="row">{{ $i + 1 }}</th>
                                <td> {{ $users[$i]->name }}</td>
                                <td>{{ $users[$i]->email }}</td>
                                <td>
                                    <form action="/user/{{ $users[$i]->id }}/delete" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-outline-danger btn-sm my-2 my-sm-0">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
