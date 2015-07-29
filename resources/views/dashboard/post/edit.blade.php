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

    <div class="container">
        <div class='col-md-5'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker6'>
    <p>{!! form::label('date_start','date de début: ' , ['required']) !!}
        {!! Form::text('date_start', $post->date_start, ['class'=>'form-control','required']) !!}</p>
                        {!! $errors->first('date_start', '<span class="help-block">:message</span>') !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class='col-md-5'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker7'>
    <p>{!! form::label('date_end', 'date de fin: ', ['required']) !!}
        {!! Form::text('date_end', $post->date_end, ['class'=>'form-control','required']) !!}</p>
                        {!! $errors->first('date_end', '<span class="help-block">:message</span>') !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
            </div>
        </div>
    </div>


    <div>
    <h2>file image</h2>
    {!! form::label('thumbnail_link', 'photo: ' , ['required']) !!}
    {!! Form::file('thumbnail_link') !!}
    </div>

    {{--<div>--}}
        {{--{!! Form::label('tags', 'Tags', ['required']) !!}--}}
        {{--@foreach($tags as $tag)--}}
            {{--{!! Form::checkbox('tags[]') !!}--}}
            {{--{{ $tag->name }}--}}
        {{--@endforeach--}}
    {{--</div>--}}

    <div class="radio-inline">
        {!! MyHtml::radio('status',['title'=>'publish', 'name'=>'status','id'=>'inlineRadioOptions1', 'value'=>'publish']) !!}
    </div>
    <div class="radio-inline">
        {!! MyHtml::radio('status',['title'=>'unpublish', 'name'=>'status', 'id'=>'inlineRadioOptions2', 'value'=>'unpublish'] ) !!}
    </div>


    {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection