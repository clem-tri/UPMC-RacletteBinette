@extends('layouts.app')

@section('meta_title','Edit My Account E commerce')
@section('meta_description','Edit My Account E commerce')


@section('content')
<div class="container">
<div class="row profile">

    <div class="col-3">
        @include('user.my-account.sidebar')
    </div>
    <div class="col-9">
        <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
            <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Numero de carte fidelite</p></span> </div> </div>


            <div class="card-body" style="background-color:white;">

                        @if($fidelite != null)

                            <input id="numero_fidelite" class="form-control" disabled="disabled" value="{{ $fidelite->numero_fidelite }}">

                            @else
                        <form method="post" action="{{ route('my-account.store-fidelite') }}">
                            {{ csrf_field() }}
                            <label for="numero_fidelite"></label>
                            <input id="numero_fidelite" class="form-control" name="numero_fidelite" type="text" maxlength="8" />

                            <div class="form-group" style="margin-top:20px;">
                                <button type="submit" class="btn btn-primary" style="border:none; background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
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
</div>

@endsection
