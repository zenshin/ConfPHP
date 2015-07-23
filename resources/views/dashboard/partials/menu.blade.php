@section('menu')
    <header id="banner" role="banner">
        <div id="avatar"></div>
        <h1"><a class="link-home" href="#">Conférences PHP</a>
        </h1>
        <nav role="navigation" id="navigation">
            <a  href="{{('dashboard')}}">Dashboard</a>
            <a  href="{{url('/')}}">retour au site</a>
            <a  href="{{url('auth/logout')}}">Se déconnecter</a>
        </nav>
    </header>




    <div class="row header">
        <div class="col-xs-12">
            <div class="user pull-right">
                <div class="item dropdown">
                    <a href="#" class="dropdown-toggle">
                        <img src="img/avatar.jpg">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">
                            Joe Bloggs
                        </li>
                        <li class="divider"></li>
                        <li class="link">
                            <a href="#">
                                Profile
                            </a>
                        </li>
                        <li class="link">
                            <a href="#">
                                Menu Item
                            </a>
                        </li>
                        <li class="link">
                            <a href="#">
                                Menu Item
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="link">
                            <a href="#">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-bell-o"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">
                            Notifications
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Server Down!</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="meta">
                <div class="page">
                    Dashboard
                </div>
                <div class="breadcrumb-links">
                    Home / Dashboard
                </div>
            </div>
        </div>
    </div>
@show