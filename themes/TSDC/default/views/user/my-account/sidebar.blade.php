<div class="profile-sidebar">



    <div class="profile-usermenu">
        <ul class="collection list-group">
            <li class="list-group-item">
            @if($user->image_path == "")
                <img src="http://placehold.it/250x250" class="img-responsive img-thumbnail" alt="">
                    <strong class="text-center">{{ $user->fullName }}</strong>
            @else
                <img src="{{ $user->image_path->smallUrl }}" class="img-responsive img-thumbnail" alt="">
                    <strong class="text-center">{{ $user->fullName }}</strong>
            @endif
            </li>

            <a href="{{ route('my-account.home') }}" class="list-group-item list-group-item-action">

                Aperçu </a>

            <a href="{{ route('my-account.edit') }}" class="list-group-item list-group-item-action">

               Modifier compte</a>


            <a href="{{ route('my-account.upload-image') }}" class="list-group-item list-group-item-action">

                Changer d'image</a>
            <a href="{{ route('my-account.order.list') }}" class="list-group-item list-group-item-action">

                Mes commandes</a>
            <a href="{{ route('my-account.address.index') }}" class="list-group-item list-group-item-action">

                Addresse </a>
            <a href="{{ route('my-account.wishlist.list') }}" class="list-group-item list-group-item-action">

                Ma liste de souhaits</a>
            <a href="{{ route('my-account.change-password') }}" class="list-group-item list-group-item-action">

                Changer mot de passe</a>
            <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">

                Se déconnecter </a>

            <a href="{{ route('my-account.download-personnal-infos') }}" class="list-group-item list-group-item-action">

                Récupérer mes informations </a>


        </ul>
    </div>

</div>