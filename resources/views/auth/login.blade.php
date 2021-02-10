@extends('layouts.header')
@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            @include('layouts.errors')
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="role" class="form-label"><strong>Login as:</strong></label>
                    <select id="role" class="form-select" name="role">
                      <option selected value="Admin">Admin</option>
                      <option value="Member">User</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><strong>Email:</strong></label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><strong>Password:</strong></label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </form>
        </div>
    </div>

@endsection
