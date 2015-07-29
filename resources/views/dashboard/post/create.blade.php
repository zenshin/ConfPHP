@extends('layouts.admin')

@section('content')

    {!! Form::open(['url'=>'post', 'files'=>true]) !!}

    <p>{!! form::label('title', 'Titre :' , ['required']) !!}
        {!! Form::text('title', old('title'), ['required']) !!}</p>
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('slug','slug :' , ['required']) !!}
        {!! Form::text('slug', old('text'), ['required']) !!}</p>
    {!! $errors->first('slug', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('excerpt', 'texte court:' , ['required']) !!}
        {!! Form::textarea('excerpt', old('excerpt'), ['required']) !!}</p>
    {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('content','texte long:' , ['required']) !!}
        {!! Form::textarea('content', old('content'), ['required']) !!}</p>
    {!! $errors->first('content', '<span class="help-block">:message</span>') !!}

    <div class="container">
        <div class='col-md-5'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker6'>
    <p>{!! form::label('date_start','date de début: ' , ['required']) !!}
        {!! Form::text('date_start', old('date_start'), ['class'=>'form-control','required']) !!}</p>
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
    {!! Form::text('date_end', old('date_end'), ['class'=>'form-control','required']) !!}</p>
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
        {!! form::label('thumnbail_link', 'photo: ' , ['required']) !!}
        {!! Form::file('thumbnail_link') !!}
    </div>

    <div class="radio-inline">
        {!! MyHtml::radio('status',['title'=>'publish', 'name'=>'status','id'=>'inlineRadioOptions1', 'value'=>'publish']) !!}
    </div>
    <div class="radio-inline">
        {!! MyHtml::radio('status',['title'=>'unpublish', 'name'=>'status', 'id'=>'inlineRadioOptions2', 'value'=>'unpublish']) !!}
    </div>

    <div>
        {!! Form::label('tags', 'Tags', ['required']) !!}
            @foreach($tags as $tag)
                {!! Form::checkbox('tags[]', $tag->id) !!}
                {{ $tag->name }}
            @endforeach
    </div>

    {!! Form::submit('Créer') !!}

    {!! Form::close() !!}

@endsection