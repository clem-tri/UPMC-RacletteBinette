@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 panel-login">
                <div class="card card-default">
                    <div class="card-body">
                    <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p>Reinitialiser mot de passe</p></span></div></div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                    <input style="width:auto; margin:auto;" placeholder="Adresse e-mail" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary" style="background-image:none; display: block; margin : auto; font-size:10pt;">
                                    Recevoir mail de confirmation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

