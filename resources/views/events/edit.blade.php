@extends('layouts.master')

@section('header')
    @include('layouts.headers.header')
@stop

@section('content')
    <form action="{{ route('events.update',$event) }}" method="POST">
        <div class=" p-5">
            <h1><strong>Edit Event #{{ $event->id }}</strong></h1>
                {{ method_field('PUT') }}
                @include('events.partials._form')
            </div>
    </form>
@endsection