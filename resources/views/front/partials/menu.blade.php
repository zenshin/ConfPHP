@section('menu')
<header id="banner" role="banner">
    <h1 id="afup"><a class="link-home" href="#">ConfPHP</a>
    </h1>
    <p id="conf" class="col-lg-6">Prochaines conférences 2015</p>
    <nav role="navigation" id="navigation">
        {!! MyHtml::link('Accueil', url('/')) !!}
        {!! MyHtml::link('à propos', url('about')) !!}
        {!! MyHtml::link('Contact', url('contact')) !!}
    </nav>
</header>
@show