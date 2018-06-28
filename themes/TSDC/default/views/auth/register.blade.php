@extends('layouts.app')

@section('meta_title', 'Register: AvoRed E commerce')
@section('meta_description', 'Register to Manage your Account for AvoRed E Commerce')

@section('content')
    <div class="row mt-4 mb-4 justify-content-center">
        <div class="col-9 offset-3">
            <img src="{{asset("storage/images/register_frog.png") }}" style="position:relative; float:left;">
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-header" style="border-bottom-color:white; background-color:#68B42F;"><span class="title_auth"><p style="color:white; font-family: 'Big John'">S'inscrire</p></span></div>
                    <div class="col-12 panel-login" style="padding-top:40px;">
                        <form method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input id="first_name" type="text"
                                           style="width:auto; margin:auto; color:white;"
                                           placeholder="Prénom"
                                           @if($errors->has('first_name'))
                                           class="form-control is-invalid"
                                           @else
                                           class="form-control"
                                           @endif
                                           name="first_name"
                                           value="{{ old('first_name') }}" required autofocus>
                                    @if($errors->has('first_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_name') }}
                                        </div>
                                    @endif


                                </div>

                                <div class="form-group">
                                    <input id="last_name" type="text"
                                           style="width:auto; margin:auto; color:white;"
                                           placeholder="Nom"
                                           @if($errors->has('last_name'))
                                           class="form-control is-invalid"
                                           @else
                                           class="form-control"
                                           @endif

                                           name="last_name"
                                           value="{{ old('last_name') }}" required autofocus>

                                    @if($errors->has('last_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('last_name') }}
                                        </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <input id="email" type="email"
                                           style="width:auto; margin:auto; color:white;"
                                           placeholder="Adresse e-mail"
                                           @if($errors->has('email'))
                                           class="form-control is-invalid"
                                           @else
                                           class="form-control"
                                           @endif

                                           name="email"
                                           value="{{ old('email') }}" required>

                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <input id="password" type="password"
                                           style="width:auto; margin:auto; color:white;"
                                           placeholder="Mot de passe"
                                           @if($errors->has('password'))
                                           class="form-control is-invalid"
                                           @else
                                           class="form-control"
                                           @endif
                                           name="password" required>
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password"
                                           style="width:auto; margin:auto; color:white;"
                                           placeholder="Confirmer mot de passe"
                                           @if($errors->has('password_confirmation'))
                                           class="form-control is-invalid"
                                           @else
                                           class="form-control"
                                           @endif

                                           name="password_confirmation" required>
                                    @if($errors->has('password_confirmation'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password_confirmation') }}
                                        </div>
                                    @endif

                                </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary" style="border:none; color:#68B42F; background-image:none; background-color:white; font-family: 'Big John'; display: block; margin : auto; font-size:10pt;">
                                    S'inscrire
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
