@extends('layouts.app')

@section('meta_title','My Address List Account E commerce')
@section('meta_description','My Address List Account E commerce')

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                @include('user.my-account.sidebar')
            </div>

            <div class="col-9">
                <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                    <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                        <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Adresses</p></span> </div> </div>

                @if(count($addresses) <= 0)
                    <p style="color:black; margin-left:15px; margin-right:15px; margin-top:10px;">Désolé, aucune adresse trouvée...</p>

                        <div class="form-group">
                            <a style="border:none; background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt; width:150px;" class="btn btn-primary" href="{{ route('my-account.address.create')}}">Ajouter une adresse</a>
                        </div>

                @else
                    <div class="row">
                        @foreach($addresses as $address)

                            <div class="col-6 mb-3">
                                        @if($address->type == "SHIPPING")
                                            <span>Adresse de Livraison</span>
                                        @else
                                            <span>Adresse de facturation</span>
                                        @endif

                                        <span class="float-right">
                                            <a href="{{ route('my-account.address.edit', $address->id)}}">Modifier</a>
                                        </span>

                                    <div class="card-body ">
                                        <table class="table table-responsive">
                                            <tbody>
                                            <tr>
                                                <th>Prénom</th>
                                                <td> {{ $address->first_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nom</th>
                                                <td> {{ $address->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Adresse 1</th>
                                                <td> {{ $address->address1}}</td>
                                            </tr>
                                            <tr>
                                                <th>Adresse 2</th>
                                                <td> {{ $address->address2}}</td>
                                            </tr>

                                            <tr>
                                                <th>Ville</th>
                                                <td> {{ $address->city}}</td>
                                            </tr>
                                            <tr>
                                                <th>Pays</th>
                                                <td> {{ $address->country->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Téléphone</th>
                                                <td> {{ $address->phone }}</td>
                                            </tr>

                                            </tbody>


                                        </table>
                                    </div>
                            </div>

                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        </div>
@endsection
