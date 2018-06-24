@extends('layouts.app')

@section('meta_title', 'Login: AvoRed E commerce')
@section('meta_description', 'My Account Management System for AvoRed E Commerce')


@section('content')
    <div class="row mt-4 mb-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p>Se connecter</p></span></div>
                    <div class="col-12">
                        <form method="POST"
                              action="{{ route('login.post') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>


                                <input id="email" type="email" name="email"
                                       class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input id="password"
                                       class="form-control {{ $errors->has('password') ? ' has-error' : '' }}"
                                       type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="checkbox">
                                <label>
                                    <input id="rememberme" type="checkbox" name="remember"/>
                                    Se souvenir de moi
                                </label>
                            </div>


                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">
                                    Se connecter
                                </button>
                            </div>

                                <div class="form-group">
                                   <a class="" href="{{ url('/password/reset') }}">
                                     Mot de passe oublié?
                                  </a>
                                </div>

                                <div>
                                    <a class="" href="{{ url('register') }}">
                                        Créer un compte
                                    </a>
                                </div>



                                @if($errors->has('enableResendLink'))
                                    <div class="form-group">

                                        <a class="" href="{{ route('user.activation.resend') }}">
                                            Renvoyer le code d'activation
                                        </a>
                                    </div>
                                @endif




                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
