@extends('layouts.app')

@section('meta_title','Mon compte - Chez Raclette et Binette')
@section('meta_description','Mon compte - Chez Raclette et Binette')


@section('content')

    <div class="row profile">
        <div class="col-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-9">

            <div class="card">
                <div class="card-header ">
                   Profil utilisateur
                  </div>
                <div class="card-body">

                    <div class="table-responsive" >
                    <table class=" table">
                        <tbody>
                        <tr>
                            <th>Prénom</th>
                            <td> {{ $user->first_name }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td> {{ $user->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td> {{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Téléphone</th>
                            <td> {{ $user->phone }}</td>
                        </tr>
                      <!--  <tr>
                            <th>Entreprise</th>
                            <td> {{ $user->company_name }}</td>
                        </tr>-->
                        <tr>
                          <th>Numéro de fidélité</th>
                          <td>{{$fidelite->numero_fidelite}}</td>
                        </tr>

                        </tbody>


                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
