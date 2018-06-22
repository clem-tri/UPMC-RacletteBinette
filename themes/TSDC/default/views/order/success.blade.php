@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">

            <h1>Commande enregistrée avec succès!</h1>

            <a class="btn btn-primary" href="{{ route('my-account.home') }}">Mon compte</a>
            <a class="btn btn-primary" href="{{ route('home') }}">Continuer</a>
        </div>
    </div>

@endsection
