@extends('layouts.laramap',['title'=>'contact'])

@section('content')
    <div class="mbottom"></div>
    <h1 class="text-center">Contact-us <sup class="sup-blue"><a href="mailto:armellefotsing88@gmail.com"><i class="las la-envelope text-blue"></i></a></sup></h1>
    <div class="container">
        <form action="{{route('laramaps.store') }}" method="POST">
            <div class="row">
                <div class="col-md-8 col-offset-2 col-lg-10 col-offset-1">
                    <h2>Get in touch</h2>
                    <p class="text-muted">If you having trouble with this service, pleace <a href="mailto:{{ config('admin.admin_adress_mail') }}">ask for help</a>.</p>
                </div>
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <span for="username">Username <sup class="text-danger">*</sup> </span>
                        <input type="" name="username"  id="username" placeholder="Enter Your Username"
                            class="form-control mb-2 {{ $errors->has('username') ? 'is-invalid':'' }}" value="{{old('username')}}" required>
                            {!! $errors->first('username','<span class="error invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <span for="email">Email <sup class="text-danger">*</sup> </span>
                        <input type="email"  name="email" placeholder="Enter Your Email Adress" id="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}" value="{{old('email') }}" required>
                            {!! $errors->first('email','<span class="error invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <span for="message">Message <sup class="text-danger">*</sup> </span>
                        <textarea name="message"  id="message" placeholder="Enter Your Message" rows="4" class="form-control {{ $errors->has('message') ? 'is-invalid':'' }}" required>{{ old('message')}}</textarea>
                            {!! $errors->first('message','<span class="error invalid-feedback">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message &raquo;" class="form-control btn btn-primary mt-3">
                <!--<button type="submit" class="form-control btn btn-primary">Send Message &raquo;</button>-->
            </div>
        </form>
    </div>
    {{-- dd($field) --}}
@stop
