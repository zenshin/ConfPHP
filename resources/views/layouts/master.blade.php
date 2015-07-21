<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <meta content="conférence PHP" name="description">
    <meta content="Antoine AFUP" name="author">
    <meta content="Paris, France" name="geo.placename">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('assets/style.css')}}" >


</head>
<body >
@section('header')
    @include('partials.menu')
@show

<div id="main" role="main">
@yield('content')


@section('sidebar')
<section id="sidebar">
    <h1>sponsors</h1>
    <a href="http://www.elao.com/fr"><img class="logo" src="{{asset('assets/images/logos/elao_logo_150px.png')}}"></a>
    <a href="http://www.zol.fr/"><img class="logo" src="{{asset('assets/images/logos/zol-logo.png')}}"></a>
    <a href="http://www.jolicode.com"><img class="logo" src="{{asset('assets/images/logos/logo-large.png')}}"></a>
    <a href="http://php.net/"><img class="logo" src="{{asset('assets/images/logos/Elephpant.png')}}"></a>
    @show
</section>

</div>
@section('footer')
        @include('partials.footer')
    @show
</body>
</html>