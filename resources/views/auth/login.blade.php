@section('login')

  {{--<article class="login">--}}
        {{--<h1>Log In</h1>--}}
        {{--{!! Form::open(['class' => 'form-horizontal']) !!}--}}

        {{--<div class="form-group">--}}
            {{--{!! Form::label('email', 'Email(*): ',['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=>'inputEmail3']) !!}--}}
            {{--<div class="col-sm-10">--}}
                {{--{!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'inputEmail3', 'placeholder' => 'Email', 'required']) !!}--}}
                {{--{!! $errors->first('email', ':message') !!}--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--{!! Form::label('password', 'Password(*): ',['class' => 'col-sm-2 col-md-2 col-lg-2 control-label', 'for'=>'inputPassword3']) !!}--}}
            {{--<div class="col-sm-10">--}}
                {{--{!! Form::password('password', null, ['class' => 'form-control', 'id' => 'inputPassword3', 'placeholder' => 'Password', 'required']) !!}--}}
                {{--{!! $errors->first('password', ':message') !!}--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<div class="col-sm-offset-2 col-sm-10">--}}
                {{--{!! Form::label('remember', 'Remember me : ') !!}--}}
                {{--{!! Form::checkbox('remember', 1, false) !!}--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--<div class="col-sm-offset-2 col-sm-10">--}}
                {{--{!! Form::submit('Sign in',['class' => 'btn btn-danger']) !!}--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--{!! Form::close() !!}--}}
    {{--</article>--}}
@endsection
