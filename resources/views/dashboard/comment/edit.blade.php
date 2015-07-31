@extends('layouts.admin')
@section('title')
    {{$title}}
@endsection

@section('content')
<div class="col-lg-6">

    {!! Form::open(['url'=>'dashboard/comment/'.$comment->id, 'method' => 'PUT']) !!}
    {!! Form::hidden('post_id', $comment->post_id)!!}
    <div class="form-group input-group">
    {!! Form::label('email', 'Email :',['class'=>'input-group-addon', 'required']) !!}
        {!! Form::text('email', $comment->email, ['class'=>'form-control', 'required']) !!}
    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    </div>
    <p>{!! Form::label('message', 'Commentaire :',['required']) !!}
        {!! Form::textarea('message', $comment->message, ['class'=>'form-control', 'required']) !!}</p>
    {!! $errors->first('message', '<span class="help-block">:message</span>') !!}

    {!! Form::submit('Enregistrer', ['class' => 'btn btn-warning']) !!}
    {!! Form::close() !!}
</div>
@endsection