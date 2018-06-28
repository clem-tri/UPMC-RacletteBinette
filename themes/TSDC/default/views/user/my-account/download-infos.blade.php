@extends('layouts.app')

@section('meta_title','Récupérer mes données personnelles')
@section('meta_description','Récupérer mes données personnelles')


@section('content')
    <div class="container">
    <div class="row profile">
        <div class="col-md-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-md-9">

            <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                    <div class="card-header" style="background-color:#68B42F; border-color:white;"><span class="title_auth"><p style="color:white">Récupérer mes données personnelles</p></span> </div> </div>


                <form action="{{ route('my-account.download-personnal-file-infos') }}" method="get">
                        {{ csrf_field() }}

                    <div class="form-group" style="margin-top:20px;">
                        <button type="submit" class="btn btn-primary" style="border:none; background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
                            Télécharger
                        </button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
