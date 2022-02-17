@extends('layouts.master')

@section('header')
    @include('layouts.headers.header')
@stop

@section('content')
    <div class="mbottom"><h1>We Have {{ $events->count() }} {{ Str::plural('Event',$events->count()) }}</h1>
        <a href="{{ route('root_events') }}" class="btn btn-primary mb-2">Return to Posts</a>
        <a class="btn btn-primary mb-2" href="{{ route('events.create') }}">Add Event</a>

    </div>
    @if (!$events->isEmpty())
        <table class="table table-bordered table-striped bg-light ">
            <thead>
                <tr class="align-middle text-center">
                <th>N_°</th>
                <th>Event Name</th>
                <th>Event Content</th>
                <th>Date</th>
                <th>Edit Event</th>
                <th>Delete Event</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $item)
                <tr class="align-middle text-justify">
                    <td>{{ $item->id }}</td>
                    <td>{!! $item->title !!}</td>
                    <td>{!! $item->content !!}</td>
                    <td>{{ $item->date_created }}</td>
                    <td><a class="btn btn-primary" href="{{ route('events.edit',$item) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('events.destroy',$item) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            {{-- <i class="las la-trash"></i> --}}
                            <input type="submit" value="Delete" class="btn btn-danger input-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>Not Event Now</h1>
    @endif
@endsection