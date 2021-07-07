@extends('layouts.master')
@section('title','shortened_url')
@section('header')
    @include('layouts.headers.header')
@stop

@section('content')
    <div class='url-shortened'>
        <h4>Your Url shortened</h4>
        <h3>
            {{-- <a href=" {{$url ?? ''}} "> {{$urlShortened ?? ' '}}</a> --}}
            <a href=" {{config('app.url')}}/{{$urlShortened}}">{{config('app.url')}}/{{$urlShortened}}</a>
        </h3>
    </div>
    {{-- <a href=""><input type="text" value="Back"> </a> --}}
@stop