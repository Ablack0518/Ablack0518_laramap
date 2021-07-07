@extends('layouts.laramap',['title'=>'contact'])

@section('content')
    <div class="mbottom"></div>
    <h1 class="text-center">Contact-us <sup class="sup-blue"><a href="mailto:armellefotsing88@gmail.com"><i class="las la-envelope text-blue"></i></a></sup></h1>
    <div class="container">
        <form action="{{ route('contact.store') }}" method="POST" novalidate>
            <div class="row">
                <div class="col-md-8 col-offset-2 col-lg-10 col-offset-1">
                    <h2>Get in touch</h2>
                    <p class="text-muted">If you having trouble with this service, pleace <a href="mailto:armellefotsing88@gmail.com">ask for help</a>.</p>
                </div>
                {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="form-group">
                        <span for="username">Username <sup class="text-danger">*</sup> </span>
                        <input type="" name="username" required id="username" placeholder="Enter Your Username"
                            class="form-control mb-2 {{ $errors->has('username') ? 'is-invalid':'' }}">
                            {!! $errors->first('username','<span class="error invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <span for="email">Email <sup class="text-danger">*</sup> </span>
                        <input type="email" required name="email" placeholder="Enter Your Email Adress" id="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}">
                            {!! $errors->first('email','<span class="error invalid-feedback">:message</span>') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <span for="message">Message <sup class="text-danger">*</sup> </span>
                        <textarea name="message" required id="message" placeholder="Enter Your Message" rows="4"
                            class="form-control {{ $errors->has('message') ? 'is-invalid':'' }}"></textarea>
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
@stop
