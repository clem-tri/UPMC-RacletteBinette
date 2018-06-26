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

                <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p>Modification du profil</p></span></div></div>


                <div class="profile-content">

                    <form method="post" action="{{ route('my-account.store_fidelite') }}">

                        @csrf
                        <label for="carte_fidelite"></label>
                        <input id="carte_fidelite" name="carte_fidelite" type="text" max="8"/>



                        <div class="form-group">

                            <button type="submit" class="btn btn-primary" style="background-image:none; display: block; margin : auto; font-size:10pt;">
                                insérer une carte de fidélité
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
