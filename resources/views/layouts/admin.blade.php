<!DOCTYPE html>
    <html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
                        <a href="{{url('dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{url('post/create')}}"><i class="fa fa-fw fa-table"></i> Ajouter une conférence</a>
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
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
         @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{ asset('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('assets/startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris-data.js')}}"></script>

    </body>

    </html>

