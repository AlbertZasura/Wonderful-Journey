@extends('layouts.header')
@section('title', 'New Blog')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h3 class="mb-4 line">New Blog</h3>
            @include('layouts.errors')
            <form method="POST" action="/article/create" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"><strong>Title :</strong></label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label"><strong>Category :</strong></label>
                    <select id="category" class="form-select" name="category">
                        @for ($i = 0; $i < count($categories); $i++)
                            @if ($i == 0){
                                <option value="{{ $categories[$i]->id }}" selected>{{ $categories[$i]->name }}</option>
                            @else

                                <option value="{{ $categories[$i]->id }}">{{ $categories[$i]->name }}</option>
                            @endif
                        @endfor
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
                    <label for="description" class="form-label"><strong>Story :</strong></label>
                    <textarea class="form-control" id="description" rows="10" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-outline-dark">Create</button>
            </form>
        </div>
    </div>

@endsection
