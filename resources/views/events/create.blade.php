@extends('layouts.master')

@section('header')
    @include('layouts.headers.header')
@stop

@section('content')
    <div class=" p-lg-5">
        <form action="{{ route('events.store') }}" method="POST">
            <h1><strong>Create Event</strong></h1>
            @include('events.partials._form')
        </form>
    </div>
@endsection