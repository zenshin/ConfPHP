@section('menu')
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{'/'}}">Conférences PHP</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <nav class="nav nav-pills" role="navigation" id="navigation">
            <li role="presentation">{!! MyHtml::link('Dashboard', url('dashboard')) !!}</li>
            <li role="presentation">{!! MyHtml::link('retour au site', url('/')) !!}</li>
            <li role="presentation">{!! MyHtml::link('Se déconnecter', url('auth/logout')) !!}</li>
        </nav>

    </ul>
@show