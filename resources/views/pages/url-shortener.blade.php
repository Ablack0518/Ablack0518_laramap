@extends('layouts.master')

@section('title','Url-shortner')

@section('header')
    @include('layouts.headers.header')
@endsection

@section('content')
    <div class="form">
        <h1>URL Shortener......</h1>
        <form method='POST'>
            {{csrf_field()}}
        <div class="form-group">
            <label for="url">Your original url</label><br>
            <input class="form-control" type="text" name="url" id="url" value="{{old('url')}}" placeholder="Enter your original url">
                {!!$errors->first('url','<p class="errors-msg">:message </p>')!!}
            {{-- <input class="btn" type="submit" value="Submit" > --}}
        </div>
        </form>
    </div>
@endsection