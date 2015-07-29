@extends('layouts.master')

@section('title')
    {{$title}}
@endsection

@section('content')
    <section id="post" >
        <h1>Conférences intéressantes autour du PHP</h1>
        <article class="news">
            @if($post)
                    <h2>{{$post->title}}</h2>
                    @if($thumb=$post->thumbnail_link)
                    {!! MyHtml::thumb('left', $post->thumbnail_link, $post->slug,'') !!}
                    @endif
                    <p class="abstract">{{$post->content}}</p>
                    <p>{!! MyHtml::link('site web de la conférence', url($post->url_site)) !!}</p>

                    <p class="link-keyword" >Mots clefs:
                        @foreach($post->tags as $tag)
                            {!! MyHtml::link($tag->name, url('tag/'.$tag->id)) !!}
                        @endforeach
                    </p>

                    <footer>
                        <h3 class="date">début: {{$post->date_start}} fin: {{$post->date_end}} </h3>
                    </footer>
            @endif
        </article>
    </section>
    <section>
        @if(true)
            <h2>Commentaires :</h2>
            @foreach($post->getComment() as $c)
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$c->email}}</h3>
                        </div>
                        <div class="panel-body">
                            {{$c->message}}
                        </div>
                    </div>
            @endforeach
        @else
            <p>Désolé pas de commentaire</p>
        @endif

    </section>
    <section>
@section('postComment')
@include('dashboard.comment.create')
@show
    </section>
@endsection