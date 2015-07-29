@extends('layouts.master')

@section('title')
    {{$title}}
@endsection

@section('content')
    <section id="about">
    <article class="news">
    <p>L’AFUP, Association Française des Utilisateurs de PHP, est une association de loi 1901 créée en 2000, dont les principaux objectifs consistent à <strong>promouvoir le langage PHP et son ecosystème et contribuer à son développement auprès des professionnels et de la communauté.</strong></p>

    <p> Dans cette optique, l’AFUP organise depuis 2001 <strong>des rencontres à Paris et en province</strong>, qui favorisent l’échange d’expertises et le partage. L’événement­-phare de l’association est le {!! MyHtml::link('Forum  PHP', url('http://www.forumphp.org')) !!}, organisé chaque automne à Paris. Ce cyle de conférences consacré à la plateforme PHP et aux technologies connexes rassemble les acteurs et professionnels de la communauté internationale et francophone, et atteste du dynamisme français en terme de technologies de pointe sur Internet.
    Au printemps, l’AFUP organise un deuxième cycle de conférences, le {!! MyHtml::link('PHP Tour', url('http://www.phptour.org')) !!}
        : cycle de conférences itinérant, il fait étape chaque année dans une ville différente, pour se pencher cette fois sur les problématiques locales et la particularité du tissu économique de la région d’accueil. Ces deux événements fédèrent la communauté PHP francophone : <strong>aucun autre événement en France ne propose autant de ressources et d’expertise sur le langage, réunies dans un même lieu</strong>. Lors de ces événements, l’association capitalise l’information, grâce à la captation vidéo des conférences, rendant ensuite accessible à tout développeur le savoir de la communauté PHP sur la {!! MyHtml::link('chaine YouTube de l’AFUP', url('https://www.youtube.com/user/afupPHP')) !!}.</p>

    <p>L’AFUP structure également un <strong>réseau d’antennes locales</strong>, qui permet aux développeurs de se rencontrer tout au long de l’année, grâce à de nombreux rendez­vous et apéros PHP entre professionnels.
    Elle lance enfin chaque année le  {!! MyHtml::link('baromètre des salaires', url('http://barometre.afup.org/campaigns/2015')) !!}
        , <strong>la seule enquête qui s’intéresse aux salaires des développeurs</strong>, leur permettant de mieux connaître le marché du travail et valoriser leur expertise et leur expérience auprès des ressources humaines.</p>

    <p>Aujourd’hui l’AFUP compte <strong>près de 500 membres</strong> dont un quart de personnes morales (entreprises privés et publiques).</p>

    <p>Retrouvez l'AFUP sur les réseaux sociaux :<br>
    Sur {!! MyHtml::link('Twitter', url('https://twitter.com/afup')) !!}@afup,<br>
    Sur {!! MyHtml::link('Facebook', url('http://www.facebook.com/fandelafup')) !!}<br>
    Sur {!! MyHtml::link('LinkedIn', url('https://www.linkedin.com/grp/home?gid=43478')) !!}</p>
    </article>
    </section>

@endsection