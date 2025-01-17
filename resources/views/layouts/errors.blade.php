@if ($message = Session::get('success'))
    <div class="form-group mt-2">
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="form-group mt-2">
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if (count($errors))
    <div class="form-group mt-2">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif