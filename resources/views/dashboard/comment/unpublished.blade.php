@extends('layouts.admin')

@section('title')
    {{$title}}
@endsection

@section('content')
<article class="comment">
    <div class="panel panel-default">
            <div class="panel-heading">
                @if(count($comments)>0)
                    @foreach($comments as $comment)
                        <nav class="navigation">
                            {!! $comments->render() !!}
                        </nav>
                <h3 class="panel-title">Conférence : {{$comment->getPost()->title}}</h3>
            </div>
            <div class="panel-body">
                <p>Commentaire : {{$comment->message}}</p><br>

                <p>Email : {{$comment->email}}</p><br>

                <p>Status : {{$comment->status}}</p>
                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group" role="group">

                        {!! Form::open(['id' => $comment->id, 'class' => 'status', 'url' => 'comment/'.$comment->id.'/updateStatus', 'method' => 'PUT']) !!}
                        <button class="btn btn-warning">
                            {{ $comment->status == 'publish' ? 'Unpublish' : 'Publish' }}
                        </button>
                        {!! Form::close() !!}

                        <button type="button" class="btn btn-info">{!! MyHtml::link('Editer', url('comment/'.$comment->id.'/edit')) !!}</button>

                        {!! Form::open(['class' => 'delete', 'url' => 'comment/'.$comment->id, 'method' => 'DELETE']) !!}
                        <button class="btn btn-danger">
                            Supprimer
                        </button>
                        {!! Form::close() !!}

                    </div>
                </div>


            </div>
            @endforeach
</article>
            @else
                <article class="comment">
                    <p>Désolé pas de commentaire</p>
                </article>
            @endif
@endsection