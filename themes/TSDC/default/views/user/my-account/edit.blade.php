@extends('layouts.app')

@section('meta_title','Modifier le profil - ')
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
                        <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p style="color:white">Modifier le profil</p></span></div></div>

                        <div class="profile-content">

                            <form method="post" action="{{ route('my-account.store') }}">

                                @csrf

                                @include('partials.forms.text',['name' => 'first_name','label' => 'Prénom','model' => $user])
                                @include('partials.forms.text',['name' => 'last_name','label' => 'Nom','model' => $user])
                                @include('partials.forms.text',['name' => 'email','label' => 'Email','model' => $user,
                                                        'attributes' => ['disabled' => true,'class' => 'form-control']])


                                @include('partials.forms.text',['name' => 'phone','label' => 'Téléphone','model' => $user])

                                <!--@include('partials.forms.text',['name' => 'company_name','label' => 'Entreprise','model' => $user])-->


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" style="background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
                                            Mettre a jour
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection