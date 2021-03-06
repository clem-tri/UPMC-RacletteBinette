@extends('layouts.app')

@section('meta_title','Créer adresse - Raclette et Binette')
@section('meta_description','Créer adresse - Raclette et Binette')

@section('content')
    <div class="container">
    <div class="row mt-3">
        <div class="col-md-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                    <div class="card-header" style="background-color:#68B42F; border-color:white; "><span class="title_auth"><p style="color:white">Créer une adresse</p></span> </div> </div>

                <div class="card-body" style="background-color:white;">
                    <form method="post" action="{{ route('my-account.address.store') }}">
                        @csrf


                        <div class="row">
                            <div class="col-6">
                                @include('partials.forms.text',['name' => 'first_name','label' => 'Prénom'])
                            </div>
                            <div class="col-6">
                                @include('partials.forms.text',['name' => 'last_name','label' => 'Nom'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                @include('partials.forms.text',['name' => 'address1','label' => 'Adresse 1'])
                            </div>
                            <div class="col-6">
                                @include('partials.forms.text',['name' => 'address2','label' => 'Adresse 2'])
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                @include('partials.forms.text',['name' => 'city','label' => 'Ville'])

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">

                                    <label style="color:#68B42F; font-weight:bold;" for="country" class="control-label">Pays :</label>
                                    <select name="country_id"
                                            @if($errors->has('country_id'))
                                            class="is-invalid form-control"
                                            @else
                                            class="form-control"
                                            @endif
                                    >
                                        @foreach($countries as $countryId => $countryName)
                                            <option @if($defaultCountry == $countryId)
                                                    {{ "selected" }}
                                                    @endif
                                                    value="{{ $countryId }}">{{ $countryName }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country_id'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('country_id') }}
                                        </div>
                                    @endif


                                </div>
                            </div>
                            <div class="col-6">
                                @include('partials.forms.text',['name' => 'postcode','label' => 'Code postal'])
                            </div>
                        </div>

                        @include('partials.forms.text',['name' => 'phone','label' => 'Numéro de téléphone'])

                        <div class="form-group">
                            <label style="color:#68B42F; font-weight:bold;" for="phone" class="control-label">Type d'adresse :</label>

                            <select name="type"
                                    @if($errors->has('type'))
                                    class="is-invalid form-control"
                                    @else
                                    class="form-control"
                                    @endif
                            >
                                <option value="SHIPPING">Livraison</option>
                                <option value="BILLING">Facturation</option>
                            </select>


                            @if ($errors->has('type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('type') }}
                                </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="create_address" value="" style="border:none; background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
                                Ajouter l'adresse
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
