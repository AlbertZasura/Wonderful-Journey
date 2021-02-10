@extends('layouts.header')
@section('title', 'Sign Up')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h3>Sign Up</h3>
            <form method="POST" action="/register">
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
                <div class="mb-3">
                    <label for="password" class="form-label"><strong>Password:</strong></label>
                    <input type="password" class="form-control" id="password">
                </div>
                
                <button type="submit" class="btn btn-outline-dark">Sign Up</button>
            </form>
        </div>
    </div>

@endsection
