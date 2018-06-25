@extends('layouts.app')

@section('meta_title', 'Register: AvoRed E commerce')
@section('meta_description', 'Register to Manage your Account for AvoRed E Commerce')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 panel-login" style="padding-top:40px;">
                <div class="card">
                    <div class="card-body">
                    <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p style="color:white;">S'inscrire</p></span></div></div>

                        <div class="col-12">
                            <form method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input style="width:auto; margin:auto;"
                                           id="first_name" placeholder="Prenom" type="text"
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
                                    <input style="width:auto; margin:auto;"
                                           id="last_name" placeholder="Nom" type="text"
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
                                    <input style="width:auto; margin:auto;"
                                            id="email" placeholder="Adresse e-mail" type="email"
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
                                    <input style="width:auto; margin:auto;"
                                           id="password" type="password"
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
                                    <input style="width:auto; margin:auto;"
                                           id="password-confirm" type="password"
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

                                    <button type="submit" class="btn btn-primary" style="background-image:none; display: block; margin : auto; font-size:10pt;">
                                        S'inscrire
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
