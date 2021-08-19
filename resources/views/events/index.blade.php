@extends('layouts.master')

@section('header')
    @include('layouts.headers.header')
@stop

@section('content')
    <div class="mbottom px-4">
        <h1>We Have {{ $events->count() }} {{ Str::plural('Event', $events->count()) }}</h1>
        <a class="btn btn-primary mb-2" href="{{ route('path_admin') }}">Administration</a>
    </div>
    <div class="text-dark p-4 ">
        @if (!$events->isEmpty())
            @foreach ($events as $item)
                <article>
                    <h4 class="px-2"><strong>{!! $item->title !!}</strong></h4>
                    <article class="shadow mb-1 p-4">
                        {!! nl2br(App\Helpers\EventsHelpers::extraitsEvent($item->content, 200)) !!}
                        <a class="text-decoration-none text-bold" href="{{ route('events.show', $item) }}">Read
                            more</a>
                    </article>
                    @if (!$loop->last)
                        <hr class="m-3">
                    @endif
                </article>
            @endforeach
            {{ $events->links() }}
        @else
            <h1>Not Event Now</h1>
        @endif
    </div>
    {{-- <i class="las la-envelope-open"></i>
    <i class="lab la-firefox"></i>
    <i class="las la-campground"></i>
    <i class="la la-automobile"></i>
    <i class="las la-motorcycle"></i>
    <i class="lab la-whatsapp"></i>
    <i class="lab la-facebook"></i>
    <i class="lab la-facebook-f"></i>
    <i class="lab la-facebook-messenger"></i> --}}
    <p>Page générée en {!! $time !!}</p>
@endsection
