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

                        <td>
                        {!! Form::open(['id' => $comment->id, 'class' => 'status', 'url' => 'comment/'.$comment->id.'/updateStatus', 'method' => 'PUT']) !!}
                        <button class="btn btn-warning">
                            {{ $comment->status == 'publié' ? 'Dépublier' : 'Publier' }}
                        </button>
                        {!! Form::close() !!}
                        </td>
                        <td>
                            {!! Form::open(['id' => $comment->id, 'class' => 'status', 'url' => 'comment/'.$comment->id.'/updateSpamStatus', 'method' => 'PUT']) !!}
                            <button class="btn btn-success">
                                {{ $comment->status = 'spam' }}
                            </button>
                            {!! Form::close() !!}
                        </td>
                        <td>
                        <button type="button" class="btn btn-info">{!! MyHtml::link('Editer', url('dashboard/comment/'.$comment->id.'/edit')) !!}</button>
                        </td>
                        <td>

                        {!! Form::open(['class' => 'delete', 'url' => 'comment/'.$comment->id, 'method' => 'DELETE']) !!}
                        <button class="btn btn-danger">
                            Supprimer
                        </button>
                        {!! Form::close() !!}
                        </td>
                    </div>
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