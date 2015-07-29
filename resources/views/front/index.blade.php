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
            <h2>{!! MyHtml::link($post->title, url('conference',[$post->slug])) !!}</h2>

                @if($post->thumbnail_link)
                <figure>
                    {!! MyHtml::thumb('left', $post->thumbnail_link, $post->slug, "conference/$post->slug") !!}
                </figure>
                @endif
            <p class="abstract">{{$post->excerpt}}
                <br>
                {!! MyHtml::link('lire la suite...', url('conference',[$post->slug])) !!}
                <br>
            </p>
            <p>
                {!! MyHtml::link('site web de la conférence', url($post->url_site)) !!}
            </p>
            <p class="link-keyword" >Mots clefs:
            @foreach($post->tags as $tag)
                    {!! MyHtml::link($tag->name, url('tag/'.$tag->name)) !!}
                @endforeach
            </p>
            <p>Nombre de commentaires : {{$post->countComment()}}</p>
            <footer>
                <h3 class="date">début: {{$post->date_start}} fin: {{$post->date_end}} </h3>
            </footer>
            @endforeach
        @endif
        </article>
    </section>
@endsection