@extends('layouts.app')

@section('meta_title','Supprimer mon compte Raclette et Binette')
@section('meta_description','Supprimer mon compte Raclette et Binette')


@section('content')
    <div class="container">
    <div class="row profile">
        <div class="col-md-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-md-9">

            <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                    <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p style="color:white">Supprimer mon compte et mes donnees personnelles</p></span></div></div>



                <p style="color:#68B42F; margin-right:10px; margin-left:10px; margin-top:10px;">
                    Vous pouvez supprimer votre compte.<br/>
                    Sachez toutefois qu'il ne sera PAS possible de le réactiver par la suite.
                    Il s'agit d'une action définitive.
                </p>

                    <form action="{{ route('my-account.delete.post') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <button type="submit" class="btn btn-danger" style="color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
                               Supprimer mon compte
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
