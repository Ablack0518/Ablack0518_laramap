@extends('layouts.master')

@section('header')
    @include('layouts.headers.header')
@stop

@section('content')
    <h1 class="mbottom"><strong>Display Event</strong></h1>
    <article class="bg-light p-4 shadow" style="color: black">
        <h1>{!! $event->title !!}</h1>
        <p>{!! $event->content !!}</p>
        <p>Published at {{ $event->date_created }}</p>
        <a href="{{ route('root_events') }}">Return</a>
    </article>
@endsection
