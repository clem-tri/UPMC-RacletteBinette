@extends('layouts.app')

@section('meta_title','Supprimer mon compte Raclette et Binette')
@section('meta_description','Supprimer mon compte Raclette et Binette')


@section('content')
    <div class="row profile">
        <div class="col-md-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                   Supprimer mon compte et mes données personnelles
                </div>
                <div class="card-body">

                    <p>
                        Vous pouvez supprimer votre compte.
                        Sachez toutefois qu'il ne sera PAS possible de le réactiver par la suite.
                        Il s'agit d'une action définitive.
                    </p>

                    <form action="{{ route('my-account.delete.post') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">Supprimer votre compte</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
