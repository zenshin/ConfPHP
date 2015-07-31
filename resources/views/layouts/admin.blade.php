<!DOCTYPE html>
    <html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{!!csrf_token()!!}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('assets/startbootstrap-sb-admin-1.0.3/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset('assets/startbootstrap-sb-admin-1.0.3/css/sb-admin.css')}}" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="{{ asset('assets/startbootstrap-sb-admin-1.0.3/css/plugins/morris.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{ asset('assets/startbootstrap-sb-admin-1.0.3/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- eonasdan-bootstrap-datetimepicker-->

        <link href="{{ asset('assets/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <![endif]-->
    </head>
    <body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            @section('menu')
            @include('dashboard.partials.menu')
            @show

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            @section('sidebar')
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        {!! MyHtml::link('<i class="fa fa-fw fa-dashboard"></i>Dashboard', url('dashboard')) !!}
                    </li>
                    <li>
                        {!! MyHtml::link('<i class="fa fa-fw fa-table"></i>Ajouter une conférence', url('post/create')) !!}
                    </li>
                    <li>
                        {!! MyHtml::link('<i class="fa fa-fw fa-comments"></i> Gérer les commentaires', url('dashboard/comment/index')) !!}
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            @show
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> {{$title}}
                            </li>
                        </ol>
                    </div>
                </div>
                @include('dashboard.partials.alert')
         @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    {{--<!-- jQuery -->--}}
    {{--<script src="{{ asset('assets/js/jquery.min.js') }}"></script>--}}

    {{--<!-- Bootstrap Core JavaScript -->--}}
    {{--<script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>--}}

    {{--<!-- Morris Charts JavaScript -->--}}
    {{--<script src="{{ asset('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/raphael.min.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris.min.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris-data.js') }}"></script>--}}

    {{--<!-- eonasdan-bootstrap-datetimepicker Datepicker-->--}}
    {{--<script src="{{ asset('assets/bower_components/moment/min/moment.min.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>--}}

    {{--<script src="{{ asset('assets/js/main.js')}}"></script>--}}

    <!-- jQuery -->
    {!! HTML::script('assets/js/jquery-2.1.4.min.js') !!}
    <!-- Bootstrap Core JavaScript -->
    {!! HTML::script('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}

    <!-- Morris Charts JavaScript -->
    {!! HTML::script('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/raphael.min.js') !!}
    {!! HTML::script('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris.min.js') !!}
    {!! HTML::script('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris-data.js') !!}

    <!-- eonasdan-bootstrap-datetimepicker Datepicker-->
    {!! HTML::script('assets/bower_components/jquery/jquery.min.js') !!}
    {!! HTML::script('assets/bower_components/moment/min/moment.min.js') !!}
    {!! HTML::script('assets/bower_components/moment/min/moment-with-locales.min.js') !!}
    {!! HTML::script('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
    {!! HTML::script('assets/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}

    {!! HTML::script('assets/js/main.js') !!}
    </body>

    </html>

