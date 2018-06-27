@extends('layouts.app')

@section('meta_title','Edit My Account E commerce')
@section('meta_description','Edit My Account E commerce')


@section('content')

<div class="row profile">

    <div class="col-3">
        @include('user.my-account.sidebar')
    </div>
    <div class="col-9">
        <div class="card">
            <div class="card-body">

                <div class="card-header" style="background-color:#68B42F;">
                    <span class="title_auth">
                        <p>
                             Numero de carte de fidelite
                        </p>
                    </span>
                </div>

                <div class="profile-content">




                        @if($fidelite != null)

                            <input id="numero_fidelite" class="form-control" disabled="disabled" value="{{ $fidelite->numero_fidelite }}">

                            @else
                        <form method="post" action="{{ route('my-account.store-fidelite') }}">
                            {{ csrf_field() }}
                            <label for="numero_fidelite"></label>
                            <input id="numero_fidelite" class="form-control" name="numero_fidelite" type="text" maxlength="8" />
                            <div class="form-group">

                                <button type="submit" class="btn btn-primary" style="background-image:none; display: block; margin : auto; font-size:10pt;">
                                    Valider
                                </button>
                            </div>
                        </form>

                        @endif







                </div>
            </div>



            </div>
        </div>


    </div>
</div>

@endsection
