@extends('layouts.master')
@section('title','About-Us')

@section('header')
@include('layouts.headers.header')
@stop

@section('content')
    <h1 class="mbottom">About-Us</h1>
   @include('shared.daysofweek')
@endsection

@section('footer')
@include('layouts.footer.footer')
@stop

@push('js')
    <script src="/resources/bootstrap/js/bootstrap.js" ></script>
@endpush