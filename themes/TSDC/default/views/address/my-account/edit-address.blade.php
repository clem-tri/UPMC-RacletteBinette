@extends('layouts.app')

@section('meta_title','Edit Address List Account E commerce')
@section('meta_description','Edit Address List Account E commerce')



@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-3">
                @include('user.my-account.sidebar')
            </div>
            <div class="col-md-9">
                <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                    <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                        <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Modifier l'adresse</p></span> </div> </div>

                    <div class="card-body" style="background-color: white;">
                    <form action=" {{ route('my-account.address.update',  $model->id) }}" method="post">
                            @method("put")
                            @csrf

                            <div class="row">
                                <div class="col-6">
                                    @include('partials.forms.text',['name' => 'first_name','label' => 'First Name'])
                                </div>
                                <div class="col-6">
                                    @include('partials.forms.text',['name' => 'last_name','label' => 'Last Name'])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    @include('partials.forms.text',['name' => 'address1','label' => 'Address1'])
                                </div>
                                <div class="col-6">
                                    @include('partials.forms.text',['name' => 'address2','label' => 'Address2'])
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6">
                                    @include('partials.forms.text',['name' => 'city','label' => 'City'])

                                </div>
                                <div class="col-6">
                                    @include('partials.forms.text',['name' => 'state','label' => 'State'])
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
                                                <option @if($model->country_id == $countryId)
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
                                    @include('partials.forms.text',['name' => 'postcode','label' => 'Post Code'])
                                </div>
                            </div>

                            @include('partials.forms.text',['name' => 'phone','label' => 'Phone'])


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="border:none; background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
                                Mettre à jour l'adresse
                            </button>
                        </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
