@section('postComment')
    <section id="postComment" >
        <aside>
            <h2>Laissez un commentaire</h2>
            {!! Form::open(['url'=>'dashboard/comment', 'method' => 'POST']) !!}
            {!! Form::hidden('post_id', $post->id)!!}
            <div>
                <p>{!! Form::label('email', 'Email:',['for'=>'inputEmail3']) !!}
                    {!! Form::email('email', old('email'), ['class'=>'radio-inline', 'id' => 'inputEmail3', 'placeholder' => 'Email', 'required']) !!}
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}</p>
            </div>
            <h3>
                {!! Form::label('message', 'Commentaire:',['for'=>'message']) !!}
            </h3>
            <div>
                {!! Form::textarea('message', old('message'),['class'=>'radio-inline', 'id' => 'message','placeholder' => 'Ecrivez votre commentaire ici','required']) !!}
                {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
            </div>

            {!! Form::submit('valider', ['class' => 'btn btn-warning']) !!}
            {!! Form::close() !!}
        </aside>
    </section>
@show