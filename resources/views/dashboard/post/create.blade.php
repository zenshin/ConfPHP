@extends('layouts.admin')

@section('title')
    {{$title}}
@endsection

@section('content')
<div class="col-lg-7">

    {!! Form::open(['url'=>'post', 'files'=>true]) !!}

    <p>{!! form::label('title', 'Titre :' , ['required']) !!}
        {!! Form::text('title', old('title'), ['class'=>'form-control', 'required']) !!}</p>
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('slug','slug :' , ['required']) !!}
        {!! Form::text('slug', old('text'), ['class'=>'form-control', 'required']) !!}</p>
    {!! $errors->first('slug', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('excerpt', 'texte court:' , ['required']) !!}
        {!! Form::textarea('excerpt', old('excerpt'), ['class'=>'form-control', 'rows'=>3, 'required']) !!}</p>
    {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}

    <p>{!! form::label('content','texte long:' , ['required']) !!}
        {!! Form::textarea('content', old('content'), ['class'=>'form-control', 'rows'=>3, 'required']) !!}</p>
    {!! $errors->first('content', '<span class="help-block">:message</span>') !!}

    <div class="container">
        <div class="form-group input-group col-md-4">
            <div class='input-group date' id='datetimepicker6'>
{!! form::label('date_start',' date de début: ' , ['class'=>'input-group-addon','required']) !!}
    {!! Form::text('date_start', old('date_start'), ['class'=>'form-control','required']) !!}
{!! $errors->first('date_start', '<span class="help-block">:message</span>') !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
        <div class="form-group input-group col-md-4">
            <div class='input-group date' id='datetimepicker7'>
{!! form::label('date_end', 'date de fin: ', ['class'=>'input-group-addon','required']) !!}
{!! Form::text('date_end', old('date_end'), ['class'=>'form-control','required']) !!}
{!! $errors->first('date_end', '<span class="help-block">:message</span>') !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
    </div>

    <div>
        <div class="form-group">
        {!! form::label('thumnbail_link', 'photo: ' , ['required']) !!}
        {!! Form::file('thumbnail_link') !!}

    </div>

        {!! form::label('status', 'Statut:  ' , ['required']) !!}
    <div class="radio-inline">
        {!! MyHtml::radio('status',['class'=>'radio-inline','title'=>'publier', 'name'=>'status','id'=>'inlineRadioOptions1', 'value'=>'publié']) !!}
    </div>
    <div class="radio-inline">
        {!! MyHtml::radio('status',['class'=>'radio-inline','title'=>'dépublier', 'name'=>'status', 'id'=>'inlineRadioOptions2', 'value'=>'dépublié'] ) !!}    </div>
    </div>

    <div class="form-group">
        {!! Form::label('tags', 'Tags: ', ['required']) !!}
            @foreach($tags as $tag)
            <div class="checkbox col-lg-offset-2">
                {!! Form::checkbox('tags[]', $tag->id, ['class'=>'checkbox','required']) !!}
                {{ $tag->name }}
            </div>
            @endforeach
    </div>

    <div>
    {!! Form::submit('Créer', ['class' => 'btn btn-warning']) !!}

    </div>
    {!! Form::close() !!}

</div>
@endsection