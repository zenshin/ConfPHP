
<!doctype html>
<html lang="fr" ng-app="RDash">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- STYLES -->
    <!-- build:css lib/css/main.min.css -->
    <link rel="stylesheet" type="text/css" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="components/rdash-ui/dist/css/rdash.min.css">
    <!-- endbuild -->
    <!-- SCRIPTS -->
    <!-- build:js lib/js/main.min.js -->
    <script type="text/javascript" src="components/angular/angular.min.js"></script>
    <script type="text/javascript" src="components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
    <script type="text/javascript" src="components/angular-cookies/angular-cookies.min.js"></script>
    <script type="text/javascript" src="components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <!-- endbuild -->
    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/dashboard.min.js"></script>
</head>
<body ng-controller="MasterCtrl">
<div id="page-wrapper" ng-class="{'open': toggle}" ng-cloak>

@section('sidebar')
    <div id="sidebar-wrapper">
        <ul class="sidebar">
            <li class="sidebar-main">
                <a ng-click="toggleSidebar()">
                    Dashboard
                    <span class="menu-icon glyphicon glyphicon-transfer"></span>
                </a>
            </li>
            <li class="sidebar-title"><span>NAVIGATION</span></li>
            <li class="sidebar-list">
                <a href="#">Dashboard <span class="menu-icon fa fa-tachometer"></span></a>
            </li>
            <li class="sidebar-list">
                <a href="#/tables">Tables <span class="menu-icon fa fa-table"></span></a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <div class="col-xs-4">
                <a href="https://github.com/rdash/rdash-angular" target="_blank">
                    Github
                </a>
            </div>
            <div class="col-xs-4">
                <a href="https://github.com/rdash/rdash-angular/README.md" target="_blank">
                    About
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#">
                    Support
                </a>
            </div>
        </div>
        @show
    </div>
    <div id="content-wrapper">
        <div class="page-content">

@section('header')
@include('dashboard.partials.menu')
@endsection

            <div ui-view></div>
            @yield('content')
        </div><!-- End Page Content -->
    </div><!-- End Content Wrapper -->
</div><!-- End Page Wrapper -->
</body>
</html>
