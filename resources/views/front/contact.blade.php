@extends('layouts.master')

@section('title')
    {{$title}}
@endsection

@section('content')
<div id="main" role="main">
    <section id="post" >
        <aside>
            <h2>Laissez-nous un message</h2>
            <p><em>(*) champs obligatoires</em></p>

                <p><label></label><input type="text"></p>
                <p>Calculer la somme 5+8: <input type="text"></p>
                <h3>(*)commentaire:</h3>
                <textarea></textarea>
                <p><button>valider</button></p>

            </form>
        </aside>
    </section>
</div>
@endsection
