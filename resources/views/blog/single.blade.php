@extends('layouts.master')

@section('title')
    {{$title}}
@endsection

@section('content')
    <section id="post" >
        <h1>Conférences intéressantes autour du PHP</h1>
        <article class="news">
            @if($post)
                    <h2>>{{$post->title}}</h2>
                    @if($thumb=$post->thumbnail_link)
                            <img class="left" src="{{url('assets/images/confs',[$thumb])}}" alt="">
                    @endif
                    <p class="abstract">{{$post->content}}</p>
                    <p><a class="link-outside" href="{{$post->url_site}}" >site web de la conférence</a></p>

                    <p class="link-keyword" >Mots clefs:
                        @foreach($post->tags as $tag)
                            <a href="{{url('tag/'.$tag->id)}}">{{$tag->name}}</a>
                        @endforeach
                    </p>

                    <footer>
                        <h3 class="date">début: {{$post->date_start}} fin: {{$post->date_end}} </h3>
                    </footer>
            @endif
        </article>
    </section>
    <section id="post" >
        <aside>
            <h2>Laissez un commentaire</h2>
            <form>
                {!! Form::open(['url'=>'blog.single','route'=>'comment', 'method' => 'POST']) !!}
                <div>
               <p>{!! Form::label('email', 'Email:',['for'=>'inputEmail3']) !!}
                    {!! Form::email('email', old('email'), ['id' => 'inputEmail3', 'placeholder' => 'Email', 'required']) !!}
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}</p>
                </div>
                <h3>
                {!! Form::label('message', 'Commentaire:',['for'=>'message']) !!}
                </h3>
                <div>
                {!! Form::textarea('message', '',['id' => 'message','placeholder' => 'Ecrivez votre commentaire ici','required']) !!}
                {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                </div>
                {!! Form::submit('valider') !!}
                {!! Form::close() !!}
            </form>
        </aside>
    </section>
    <section>
        @if($comments)
            @foreach($comments as $c)
                <section>
                    <ul>
                        <li class="list-group-item">
                            <h2>{{$c->email}}</h2>
                        </li>
                        <li class="list-group-item">
                            {{$c->message}}
                        </li>
                    </ul>
                </section>

            @endforeach
        @else
            <p>Désolé pas de commentaire</p>
        @endif

    </section>
@endsection