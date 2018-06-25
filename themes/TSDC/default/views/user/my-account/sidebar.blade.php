<div class="profile-sidebar">



    <div class="profile-usermenu">
        <ul class="collection list-group" style="font-family: Comfortaa; font-size:10pt; border-radius: 10px;">
            <li class="list-group-item" style="border-top-left-radius:10px; border-top-right-radius:10px;">
            @if($user->image_path == "")
                <img src="http://placehold.it/250x250" class="img-responsive img-thumbnail" alt="" style="border-radius:10px;">
                    <strong class="text-center">{{ $user->fullName }}</strong>
            @else
                <img src="{{ $user->image_path->smallUrl }}" class="img-responsive img-thumbnail" alt="" >
                    <strong class="text-center" >{{ $user->fullName }}</strong>
            @endif
            </li>

            <a href="{{ route('my-account.home') }}" class="list-group-item list-group-item-action" >

                Overview </a>

            <a href="{{ route('my-account.edit') }}" class="list-group-item list-group-item-action">

                Edit Account</a>


            <a href="{{ route('my-account.upload-image') }}" class="list-group-item list-group-item-action">

                Upload Image</a>
            <a href="{{ route('my-account.order.list') }}" class="list-group-item list-group-item-action">

                My Order</a>
            <a href="{{ route('my-account.address.index') }}" class="list-group-item list-group-item-action">

                Address </a>
            <a href="{{ route('my-account.wishlist.list') }}" class="list-group-item list-group-item-action">

                My Wishlist</a>
            <a href="{{ route('my-account.change-password') }}" class="list-group-item list-group-item-action">

                Change Password</a>
            <a href="{{ route('logout') }}" class="list-group-item list-group-item-action" style="border-bottom-left-radius:10px; border-bottom-right-radius:10px;">

                Logout </a>


        </ul>
    </div>

</div>