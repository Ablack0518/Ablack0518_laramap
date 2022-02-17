        @csrf
    {{-- <input type="hidden" name="_method" value="PUT">  autre façon--}}
    <div class="form-group">
        <label for="title" class="control-label"><strong>Title for Event</strong></label>
        <input type="" name="title" id="title" value="{{ old('title') ?? $event->title }}" class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}" placeholder="Enter The Title">
        {!! $errors->first('title','<span class="help-block invalid-feedback">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="content" class="mt-4"><strong> Content Event</strong></label>
        <textarea name="content" id="content" cols="30" rows="5" placeholder="Enter The content For Event" class="form-control {{ $errors->has('content')?'is-invalid':'' }}">{{ old('content') ?? $event->content }}</textarea>
        {!! $errors->first('content','<span class="help-block invalid-feedback">:message</span>') !!}
    </div>
    <div class="form-group">
        <input type="submit" value="Save Event" class="btn btn-primary mt-3">
        <a class="btn btn-primary mt-3 btn-block" href="{{ route('path_admin') }}">Return</a>       
    </div>
<p class="mt-5 text-danger">page générée en  {{  $time  }} seconde</p>
