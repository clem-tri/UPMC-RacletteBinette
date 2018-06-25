@extends('layouts.app')

@section('meta_title','My Account E commerce')
@section('meta_description','My Account E commerce')


@section('content')
<div class="container">
    <div class="row profile">
        <div class="col-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-9">

            <div class="card" style="background-color:#fff; border:2px solid #68B42F;">
                <div class="card-body" style="background-color:#fff;">
                <div class="card-header" style="background-color:#fff;"><span class="title_auth"><p style="color:#68b42F">Details du compte</p></span></div></div>


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
                            <th>Adresse e-mail :</th>
                            <td> {{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Téléphone :</th>
                            <td> {{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th>Nom de l'entreprise :</th>
                            <td> {{ $user->company_name }}</td>
                        </tr>

                        </tbody>


                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
