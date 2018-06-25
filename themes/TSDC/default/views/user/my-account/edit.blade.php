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
                <div class="card" style="background-color:#fff; border:2px solid #68B42F;">
                    <div class="card-body" style="background-color:#fff;">

                        <div class="card-header" style="background-color:#fff;"><span class="title_auth"><p style="color:#68b42F">Modification du profil</p></span></div></div>


                        <div class="profile-content">

                            <form method="post" action="{{ route('my-account.store') }}">

                                @csrf
                                @include('partials.forms.text',['name' => 'first_name','label' => 'First Name','model' => $user])
                                @include('partials.forms.text',['name' => 'last_name','label' => 'Last Name','model' => $user])
                                @include('partials.forms.text',['name' => 'email','label' => 'Email','model' => $user,
                                                        'attributes' => ['disabled' => true,'class' => 'form-control']])


                                @include('partials.forms.text',['name' => 'phone','label' => 'Phone','model' => $user])
                                @include('partials.forms.text',['name' => 'company_name','label' => 'Company Name','model' => $user])




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
