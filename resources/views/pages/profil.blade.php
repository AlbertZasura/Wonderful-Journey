@extends('layouts.header')
@section('title', 'My Profile')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Name:</strong></label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><strong>Email:</strong></label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label"><strong>Phone:</strong></label>
                    <input type="text" class="form-control" id="phone">
                </div>
                
                <button type="submit" class="btn btn-outline-dark">Update</button>
            </form>
        </div>
    </div>

@endsection
