@extends('layouts.app')

@section('meta_title','Change Your Password')
@section('meta_description','Change Your Password')


@section('content')
    <div class="container">
    <div class="row profile">
        <div class="col-md-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-md-9">

            <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                    <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Changer le mot de passe</p></span> </div> </div>

                <div class="card-body" style="background-color: white;">

                    <form action="{{ route('my-account.change-password.post') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label style="font-weight:bold; color:#68B42F">Mot de passe actuel :</label>
                            <input type="password" name="current_password"

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

                        <div class="form-group">
                            <label style="font-weight:bold; color:#68B42F">Nouveau mot de passe :</label>
                            <input type="password" name="password"
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

                        <div class="form-group">
                            <label style="font-weight:bold; color:#68B42F">Confirmer le mot de passe :</label>
                            <input type="password" name="password_confirmation"
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
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="border:none; background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
                                Changer mon mot de passe
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
