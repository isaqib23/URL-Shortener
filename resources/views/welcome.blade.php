@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            URL Shortener
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('form.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">URL:</label>
                    <input type="text" class="form-control" name="url"/>
                </div>
                <button type="submit" class="btn btn-primary">Create Item</button>
            </form>
                <hr>
                <h2>URL Lists</h2>
            <div class="row">
                <ul>
                    @foreach ($codes as $code)
                        <li><a href="{{$code->url}}" target="_blank">{{ $code->url_code }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
