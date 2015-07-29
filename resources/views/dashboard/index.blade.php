@extends('layouts.admin')

@section('content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i>  <strong>mise à jour effectuée</strong>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$comments->count()}}</div>
                        <div>Nouveaux commentaires!</div>
                    </div>
                </div>
            </div>

                <div class="panel-footer">
                    {!! MyHtml::link('    <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                    ', url('dashboard/comment/unpublished')) !!}
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>New Tasks!</div>
                    </div>
                </div>
            </div>
            {!! MyHtml::link('', url('#')) !!}
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
<!-- /.row -->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-calendar-o"></i> Conférences</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>statut</th>
                            <th>titre</th>
                            <th>date début et fin</th>
                            <th>Mots clés</th>
                            <th>changer de statut</th>
                            <th>editer</th>
                            <th>supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($posts)>0)
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->status}}</td>
                                    <td>{{$post->title}}</a></td>
                                    <td>{{$post->date_start}} et {{$post->date_end}}</td>
                                    <td>
                                        @foreach($post->tags as $tag)
                                            {{$tag->name}}
                                        @endforeach
                                    </td>
                                    <td>
                                        {!! Form::open(['id' => $post->id, 'class' => 'status', 'url' => 'post/'.$post->id.'/updateStatus', 'method' => 'PUT']) !!}
                                        <button class="btn btn-warning">
                                            {{ $post->status == 'publish' ? 'Unpublish' : 'Publish' }}
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        <button class="btn btn-info">{!! MyHtml::link('Editer', url('post/'.$post->id.'/edit')) !!}</button>
                                    </td>
                                    <td>
                                        {!! Form::open(['class' => 'delete', 'url' => 'post/'.$post->id, 'method' => 'DELETE']) !!}
                                        <button class="btn btn-danger">
                                            Supprimer
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                    @endforeach
                                    @endif
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
<!-- /.row -->

@endsection