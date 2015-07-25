@extends('layouts.admin')

@section('content')

    {!! Form::open(['url'=>'post/'.$post->id, 'method' => 'PUT', 'files'=>true]) !!}

    <p>{!! form::label('title', 'Titre :' , ['required']) !!}
        {!! Form::text('title', $post->title, ['required']) !!}</p>
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('slug','slug :' , ['required']) !!}
        {!! Form::text('slug', $post->slug, ['required']) !!}</p>
    {!! $errors->first('slug', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('excerpt', 'texte court:' , ['required']) !!}
        {!! Form::textarea('excerpt', $post->excerpt, ['required']) !!}</p>
    {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('content','texte long:' , ['required']) !!}
        {!! Form::textarea('content', $post->content, ['required']) !!}</p>
    {!! $errors->first('content', '<span class="help-block">:message</span>') !!}

    {{--<p>{!! form::label('', , ['required']) !!}
    {!! Form::date('date_start', $post->date_start, ['required']) !!}</p>--}}
    {{--{!! $errors->first('date_start', '<span class="help-block">:message</span>') !!}--}}

    {{--<p>{!! form::label('', , ['required']) !!}
    {!! Form::date('date_end', $post->date_end, ['required']) !!}</p>--}}
    {{--{!! $errors->first('date_end', '<span class="help-block">:message</span>') !!}--}}


    {{--<div>--}}
        {{--<h2>file image</h2>--}}
        {{--{!! form::label('', , ['required']) !!}
        {!! Form::file('thumbnail') !!}--}}
    {{--</div>--}}

    <div class="radio-inline">
        {!! MyHtml::radio('status',['title'=>'publish', 'name'=>'status','id'=>'inlineRadioOptions1', 'value'=>'publish']) !!}
    </div>
    <div class="radio-inline">
        {!! MyHtml::radio('status',['title'=>'unpublish', 'name'=>'status', 'id'=>'inlineRadioOptions2', 'value'=>'unpublish']) !!}
    </div>

    {{--<div>--}}
        {{--<label class="checkbox-inline"><input type="checkbox" name="tags[]" value="1">front</label>--}}
        {{--<label class="checkbox-inline"><input type="checkbox" name="tags[]" value="2">back</label>--}}
        {{--<label class="checkbox-inline"><input type="checkbox" name="tags[]" value="3">asynchrone</label>--}}
    {{--</div>--}}

    {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection