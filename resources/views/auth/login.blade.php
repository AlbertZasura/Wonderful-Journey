@extends('layouts.header')
@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="inputState" class="form-label"><strong>Login as:</strong></label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><strong>Email:</strong></label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><strong>Password:</strong></label>
                    <input type="password" class="form-control" id="password">
                </div>
                
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </form>
        </div>
    </div>

@endsection
