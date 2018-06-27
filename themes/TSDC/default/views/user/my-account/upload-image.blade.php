@extends('layouts.app')

@section('meta_title','Upload My Account E commerce')
@section('meta_description','Upload My Account E commerce')

@section('content')
    <div class="container">
    <div class="row profile">
        <div class="col-3">
            @include('user.my-account.sidebar')
        </div>
        <div class="col-9">

            <div class="card" style="background-color:#fff; border:2px solid #68B42F; border-radius:12px;">
                <div class="card-body" style="background-color:#68B42F; border-bottom-left-radius:0px; border-bottom-right-radius:0px;">
                    <div class="card-header" style="background-color:#68B42F;"><span class="title_auth"><p style="color:white">Image de profil</p></span> </div> </div>


                <form action="{{ route('my-account.upload-image.post') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="form-group"  style="padding-top:20px;">
                            <label for="profile_image">Image de profil</label>
                            <input type="file" style="border-radius:0px; border-left:none; border-right:none;"
                                   @if($errors->has('profile_image'))
                                   class="is-invalid form-control"
                                   @else
                                   class="form-control"
                                   @endif

                            name="profile_image" id="profile_image" />
                            @if ($errors->has('profile_image'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('profile_image') }}
                                </div>
                            @endif
                        </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="background-color:#68B42F !important; color:white !important; background-image:none; display: block; margin : auto; font-size:10pt;">
                            Changer l'image
                        </button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
