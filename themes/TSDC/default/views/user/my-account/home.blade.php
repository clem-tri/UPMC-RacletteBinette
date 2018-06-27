@extends('layouts.app')

@section('meta_title','Mon compte - Chez Raclette et Binette')
@section('meta_description','Mon compte - Chez Raclette et Binette')


@section('content')
    <div class="container">
    <div class="row profile">
        <div class="col-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-9">

            <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                    <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p style="color:white">Details du compte</p></span></div></div>


                <div class="table-responsive" >
                    <table class="table informations">
                        <tbody>
                        <tr>
                            <th>Prénom :</th>
                            <td> {{ $user->first_name }}</td>
                        </tr>
                        <tr>
                            <th>Nom :</th>
                            <td> {{ $user->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td> {{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Téléphone :</th>
                            <td> {{ $user->phone }}</td>
                        </tr>
                      <!--  <tr>
                            <th>Entreprise</th>
                            <td> {{ $user->company_name }}</td>
                        </tr>-->

                        <tr>
                          <th>Numéro de fidélité :</th>

                          <td>
                              @if($fidelite != null)
                                  {{$fidelite->numero_fidelite}}
                              @endif
                          </td>

                        </tr>


                        </tbody>


                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
