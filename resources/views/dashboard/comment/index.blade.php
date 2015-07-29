@extends('layouts.admin')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>statut</th>
                    <th>changer de statut</th>
                    <th>editer</th>
                    <th>supprimer</th>
                    <th>email</th>
                    <th>message</th>
                    <th>conference</th>
                </tr>
                </thead>
                <tbody>
                <nav class="navigation">
                    {!! $comments->render() !!}
                </nav>
                @if(count($comments)>0)
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{$comment->status}}</td>
                            <td>
                                {!! Form::open(['id' => $comment->id, 'class' => 'status', 'url' => 'comment/'.$comment->id.'/updateStatus', 'method' => 'PUT']) !!}
                                <button class="btn btn-warning">
                                    {{ $comment->status == 'publish' ? 'Unpublish' : 'Publish' }}
                                </button>
                                {!! Form::close() !!}
                            </td>
                            <td>
                                <button class="btn btn-info">{!! MyHtml::link('Editer', url('dashboard/comment/'.$comment->id.'/edit')) !!}</button>
                            </td>
                            <td>
                                {!! Form::open(['class' => 'delete', 'url' => 'dashboard/comment/'.$comment->id, 'method' => 'DELETE']) !!}
                                <button class="btn btn-danger">
                                    Supprimer
                                </button>
                                {!! Form::close() !!}
                            </td>
                            <td>{{$comment->email}}</td>
                            <td>{{$comment->message}}</td>
                            <td>
                                {{$comment->getPost()->title}}
                            </td>
                            @endforeach
                            @else
                                <article class="comment">
                                    <p>Désolé pas de commentaire</p>
                                </article>
                            @endif

                        </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
