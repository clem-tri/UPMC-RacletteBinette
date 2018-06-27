@extends('layouts.app')

@section('meta_title','Modifier le profil - ')
@section('meta_description','Edit My Account E commerce')


@section('content')

        <div class="row profile">

            <div class="col-3">
                @include('user.my-account.sidebar')
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        Modifier le profil
                    </div>
                    <div class="card-body">
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
                                    <button type="submit" class="btn btn-primary"> Mettre à jour</button>

                                </div>


                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

@endsection
