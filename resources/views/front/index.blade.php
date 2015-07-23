@extends('layouts.master')

@section('title')
    {{$title}}
@endsection

@section('content')
    <section id="post" >
        <h1>Conférences intéressantes autour du PHP</h1>
        <article class="news">
        @if(count($posts)>0)
            @foreach($posts as $post)
            <h2><a href="{{url('single',[$post->id, $post->slug])}}">{{$post->title}}</a></h2>
                @if($thumb=$post->thumbnail_link)
                <figure>
                    <a href="{{ url('single', [$post->id, $post->slug]) }}">
                        <img class="left" src="{{ url('assets/images/confs', [$thumb]) }}" alt="">
                    </a>
                </figure>
                @endif
            <p class="abstract">{{$post->excerpt}}
                <br>
                <a class="link" href="{{url('single',[$post->id, $post->slug])}}">lire la suite...</a>
                <br>
            </p>
            <p><a class="link-outside" href="{{$post->url_site}}" >site web de la conférence</a>
            </p>
            <p class="link-keyword" >Mots clefs:
            @foreach($post->tags as $tag)
                <a href="{{url('tag/'.$tag->id)}}">{{$tag->name}}, </a>
            @endforeach
            </p>
                @if(count($comments)>0)
                    @foreach($comments as $comment)
                    <p>Nombre de commentaires : {{$post->comments->count()}}</p>
                        @endforeach
                @endif

            <footer>
                <h3 class="date">début: {{$post->date_start}} fin: {{$post->date_end}} </h3>
            </footer>
            @endforeach
        @endif
        </article>
    </section>
@endsection