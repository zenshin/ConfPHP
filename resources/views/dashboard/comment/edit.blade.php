@extends('layouts.admin')

@section('content')

    {!! Form::open(['url'=>'dashboard/comment/'.$comment->id, 'method' => 'PUT']) !!}

    <p>{!! Form::label('email', 'Email :',['required']) !!}
        {!! Form::text('email', $comment->email, ['required']) !!}</p>
    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}

    <p>{!! Form::label('content', 'Email :',['required']) !!}
        {!! Form::textarea('content', $comment->message, ['required']) !!}</p>
    {!! $errors->first('content', '<span class="help-block">:message</span>') !!}

    {!! Form::submit('Update') !!}
    {!! Form::close() !!}

@endsection