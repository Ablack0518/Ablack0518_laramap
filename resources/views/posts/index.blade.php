@extends('layouts.master')

@section('title','posts')

@section('content')
    <h1 class="mbottom">Ours posts</h1>
    @foreach ($posts as $post)
    <article>
       <h2> {{$post->title}}</h2>
       <div> {!!$post->content!!}</div>
       <p>Published at : {{format_date($post->published_at)}}</p>
       @if (!$loop->last)
            <hr class=" {{$loop->index % 2 === 0 ? 'blue' : 'red'}} "> 
       @endif
    </article>   
    @endforeach
@endsection

@section('header')
    @include('layouts.headers.header')
@endsection