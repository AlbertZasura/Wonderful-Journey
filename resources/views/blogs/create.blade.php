@extends('layouts.header')
@section('title', 'New Blog')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h3>New Blog</h3>
            <form method="POST" action="/login" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"><strong>Title :</strong></label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="inputState" class="form-label"><strong>Category :</strong></label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                </div>
                <div class="file-field">
                    <label for="image" class="form-label"><strong>Photo :</strong></label>
                    <div class="justify-content-left form-control">
                        <div class="btn btn-mdb-color btn-sm btn-rounded float-left">
                            <input type="file" name="image" id="image">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="story" class="form-label"><strong>Story :</strong></label>
                    <textarea class="form-control" id="story" rows="10"></textarea>
                  </div>
                
                <button type="submit" class="btn btn-outline-dark">Create</button>
            </form>
        </div>
    </div>

@endsection
