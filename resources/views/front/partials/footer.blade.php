@section('footer')
    <footer id="footer">
        <nav>
            {!! MyHtml::link('Accueil', url('/')) !!}
            {!! MyHtml::link('Mentions légales', url('legal')) !!}
            {!! MyHtml::link('Contact', url('contact')) !!}
            {!! MyHtml::link('admin', url('dashboard')) !!}
        </nav>
    </footer>
@show