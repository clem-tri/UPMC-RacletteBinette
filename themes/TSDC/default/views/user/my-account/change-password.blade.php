@extends('layouts.app')

@section('meta_title','Change Your Password')
@section('meta_description','Change Your Password')


@section('content')
    <div class="container">
    <div class="row profile">
        <div class="col-md-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-9">

            <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                    <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p style="color:white">Changement du mot de passe</p></span></div></div>

                    <form action="{{ route('my-account.change-password.post') }}" method="post">
                        {{ csrf_field() }}


                        <div class="panel-login" style="padding-top:40px;">
                        <div class="form-group">
                            <div class="card" style="background-color:white !important; border-radius:0px;">
                                <div class="card-body" style="background-color:white !important; border-radius:0px;">
                            <label  style="padding-right:150px; display:inline; text-align:center; font-size:10pt; color:#68B42F; font-family:'Comfortaa';">Mot de passe actuel :</label>
                            <input type="password" name="current_password"
                                   style="background-color:white !important; width:auto; margin:auto;"
                                   @if($errors->has('current_password'))
                                   class="is-invalid form-control"
                                   @else
                                   class="form-control"
                            @endif
                            />
                            @if ($errors->has('current_password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('current_password') }}
                                </div>
                            @endif
                        </div>
                        </div>  </div>
                        </div>

                        <div class="panel-login" style="padding-top:40px;">
                        <div class="form-group">
                            <div class="card" style="background-color:white !important; border-radius:0px;">
                                <div class="card-body" style="background-color:white !important; border-radius:0px;">
                            <label style="padding-right:150px; display:inline; text-align:center; font-size:10pt; color:#68B42F; font-family:'Comfortaa';">Nouveau mot de passe :</label>
                            <input type="password" name="password"
                                   style="background-color:white !important; width:auto; margin:auto;"
                                    @if($errors->has('password'))
                                        class="is-invalid form-control"
                                    @else
                                    class="form-control"
                                    @endif
                            />
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="panel-login" style="padding-top:40px;">
                        <div class="form-group">
                            <div class="card" style="background-color:white !important; border-radius:0px;">
                                <div class="card-body" style="background-color:white !important; border-radius:0px;">
                            <label style="padding-right:150px; display:inline; text-align:center; font-size:10pt; color:#68B42F; font-family:'Comfortaa';">Confirmation du mot de passe :</label>
                            <input type="password" name="password_confirmation"
                                   style="background-color:white !important; width:auto; margin:auto;"
                                   @if($errors->has('password_confirmation'))
                            class="is-invalid form-control"
                                   @else
                                   class="form-control"
                                    @endif
                            />
                            @if ($errors->has('password_confirmation'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            @endif
                                </div></div></div></div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-primary" style="background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
                               Changement mot de passe
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
