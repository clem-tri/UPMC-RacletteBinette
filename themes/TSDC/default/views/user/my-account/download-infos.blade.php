@extends('layouts.app')

@section('meta_title','Récupérer mes données personnelles')
@section('meta_description','Récupérer mes données personnelles')


@section('content')
    <div class="row profile">
        <div class="col-md-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                   Récuperer mes données personnelles
                </div>
                <div class="card-body">

                    <form action="{{ route('my-account.download-personnal-file-infos') }}" method="get">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Télécharger</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
