@section('postComment')

    <section id="postComment" >
        <aside>
            <h2>Laissez un commentaire</h2>
            {!! Form::open(['url'=>'comment']) !!}
            {!! Form::hidden('post_id', $post->id)!!}
            <div>
                <p>{!! Form::label('email', 'Email:',['for'=>'inputEmail3']) !!}
                    {!! Form::email('email', old('email'), ['id' => 'inputEmail3', 'placeholder' => 'Email', 'required']) !!}
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}</p>
            </div>
            <h3>
                {!! Form::label('message', 'Commentaire:',['for'=>'message']) !!}
            </h3>
            <div>
                {!! Form::textarea('message', old('message'),['id' => 'message','placeholder' => 'Ecrivez votre commentaire ici','required']) !!}
                {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
            </div>

            {!! Form::submit('valider') !!}
            {!! Form::close() !!}
        </aside>

@show