@extends('layouts.master')

@section('title')
    {{$title}}
@endsection

@section('content')
<div id="main" role="main">
    <section id="post" >
        <aside>
            <h2>Laissez-nous un message</h2>
            <p><em>(*) champs obligatoires</em></p>
            {!! Form::open(['url'=>'contact_request']) !!}
            <div>
                <p>{!! Form::label('email', '(*)Email:',['for'=>'inputEmail3']) !!}
                    {!! Form::email('email', old('email'), ['id' => 'inputEmail3', 'placeholder' => 'Email', 'required']) !!}
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}</p>
            </div>
            <div>
                <div class="col-md-6 col-md-offset-4">
                    {!! $captchaHtml !!}
                </div>
                <div class="col-md-6 col-md-offset-4">
                    <input type="text" class="form-control" id="CaptchaCode"
                           name="CaptchaCode" style="width: 276px; margin-top: 5px">
                </div>
            </div>
            <h3>
                {!! Form::label('message', '(*)Commentaire:',['for'=>'message']) !!}
            </h3>
            <div>
                {!! Form::textarea('message', '',['id' => 'message','placeholder' => 'Ecrivez votre commentaire ici','required']) !!}
                {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
            </div>

            {!! Form::submit('valider') !!}
            {!! Form::close() !!}
        </aside>
    </section>
</div>
@endsection
