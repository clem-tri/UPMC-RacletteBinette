@extends('layouts.app')

@section('meta_title','My Address List Account E commerce')
@section('meta_description','My Address List Account E commerce')

@section('content')
        <div class="row profile">
            <div class="col-md-3">
                @include('user.my-account.sidebar')
            </div>

            <div class="col-9">
                <div class="main-title-wrap mb-3">
                    <span class="h1">Adresses</span>

                    <div class="float-right mr-3">
                        <a class="btn btn-primary" href="{{ route('my-account.address.create')}}">Ajouter une adresse</a>
                    </div>

                </div>
                @if(count($addresses) <= 0)
                    <p>Désolé, aucune adresse trouvée...</p>
                @else
                    <div class="row">
                        @foreach($addresses as $address)

                            <div class="col-6 mb-3">
                                <div class="card">
                                    <div class="card-header">
                                        @if($address->type == "SHIPPING")
                                            <span>Adresse de Livraison</span>
                                        @else
                                            <span>Adresse de facturation</span>
                                        @endif

                                        <span class="float-right">
                                            <a href="{{ route('my-account.address.edit', $address->id)}}">Modifier</a>
                                        </span>

                                    </div>
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
                            </div>

                        @endforeach
                    </div>
                @endif
            </div>
        </div>

@endsection
