@extends('layouts.header')
@section('title', 'User')

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
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td> <a href="#">{{ $users[$i]->name }}</a></td>
                            <td>{{ $users[$i]->email }}</td>
                            <td>
                                <form action="/user/{{ $users[$i]->id }}/delete" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-outline-primary btn-sm my-2 my-sm-0">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
