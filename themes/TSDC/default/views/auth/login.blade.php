@extends('layouts.app')

@section('meta_title', 'Login: AvoRed E commerce')
@section('meta_description', 'My Account Management System for AvoRed E Commerce')


@section('content')
    <div class="row mt-4 mb-4 justify-content-center">
        <div class="col-9 offset-3">
            <img src="{{asset("storage/images/login_frog.png") }}" style="position:relative; float:left;">
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-header" style="border-bottom-color:white; background-color:#68B42F;"><span class="title_auth"><p style="color:white; font-family: 'Big John'">Se connecter</p></span></div>
                    <div class="col-12 panel-login" style="padding-top:40px;">
                        <form method="POST"
                              action="{{ route('login.post') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input id="email" type="email" name="email" placeholder="Adresse e-mail" style="color:white; width:auto; margin:auto;"
                                       class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       value="{{ old('email') }}" required autofocus >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <input id="password" style="width:auto; margin:auto; color:white;"
                                       class="form-control {{ $errors->has('password') ? ' has-error' : '' }}"
                                       type="password" placeholder="Mot de passe" name="password" required>


                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="rememberme">
                                <div class="checkbox" >
                                    <label>
                                        <input id="rememberme" type="checkbox" name="remember" />
                                        Se souvenir de moi
                                    </label>
                                </div>
                            </div>


                            <div class="form-group">

                                <button type="submit" class="btn btn-primary" style="border:none; color:#68B42F; background-image:none; background-color:white; font-family: 'Big John'; display: block; margin : auto; font-size:10pt;">
                                  Se connecter
                                </button>
                            </div>

                            <div class="form-group">
                                <a class="a_of_formgroup" href="{{ url('/password/reset') }}">
                                    Mot de passe oublié?
                                </a>
                            </div>

                            <div class="form-group">
                                <a class="a_of_formgroup" href="{{ url('register') }}">
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
