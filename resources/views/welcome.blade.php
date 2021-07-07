@extends('layouts.master')

@section('content')
<h1 class="text-gray-300 mbottom">Laravel Test</h1>
   @include('shared.daysofweek')
    {{-- @foreach ($data as $post )
        <article>
            <h1>{{$post->title}} </h1>
            <p>{{$post->content}} </p>
        </article>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach --}}
    <h1>Modele demande</h1>
    <p class="date">Bafous<span class="text-decoretion-underline">sam, le  {{date('d')}} </span>{{date('M Y')}}</p> 
    <div class="infoPerso">
        <p>Your FirstName</p>
        <p>Your LastName</p>
        <p>Your PhoneNember</p>
        <p>Your Adress</p>
    </div>
    <div class="boss"><p class="text-uppercase text-center">à</p> Monsieur Le ...</div>
    <div class="objet">
       <p><span class="text-decoretion-underline"><strong>Objet: </strong></span>Your objet</p>
    </div>
    <div class="corps">
        <p class="monsieur">Monsieur,</p>
        <p>Je viens très respectueusement au près de votre haute personnalité sollicité l'objet mentionné en marge.</p>
        <p>Dans l'attente d'une suite favorable, Veuillez agréer, Monsieur, l'expression de ma considération distinguée.</p>
    </div>
@stop

@section('header')
@include('layouts.headers.header')
@stop
{{-- This is the blade comment --}}
<!-- This is the html comment -->

@section('footer')
@include('layouts.footer.footer')
@stop

@push('js')
    <script src="/resources/bootstrap/js/bootstrap.js" ></script>
@endpush

