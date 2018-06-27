<?php

namespace App\Http\Controllers\User;

use App\Fidelite;
use AvoRed\Ecommerce\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UploadUserImageRequest;
use App\Http\Requests\UserProfileRequest;
use AvoRed\Ecommerce\Models\Database\Address;
use AvoRed\Ecommerce\Models\Database\Country;
use AvoRed\Ecommerce\Models\Database\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use AvoRed\Framework\Image\Facade as Image;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class MyAccountController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $fidelite = Fidelite::where('user_id', $user->id)->first();

        return view('user.my-account.home')
            ->with(['user'=>$user,'fidelite'=>$fidelite]);
    }

    public function edit()
    {
        $user = Auth::user();

        return view('user.my-account.edit')
            ->with('user', $user);
    }

    /**
     *
     * Update User Profile Fields and Return to My Account Page
     *
     * @param \App\Http\Requests\UserProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     *
     *
     */
    public function store(UserProfileRequest $request)
    {
        $user = Auth::user();
        $user->update($request->all());

        return redirect()->route('my-account.home');
    }

    public function uploadImage()
    {
        return view('user.my-account.upload-image');
    }

    /**
     * @param \App\Http\Requests\UploadUserImageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uploadImagePost(UploadUserImageRequest $request)
    {
        $user = Auth::user();

        $image = $request->file('profile_image');

        if (false === empty($user->image_path)) {
            $user->image_path->destroy();
        }

        $relativePath = 'uploads/users/' . $user->id;
        $path = $relativePath;

        $dbPath = $relativePath . DIRECTORY_SEPARATOR . $image->getClientOriginalName();

        $this->directory(public_path($relativePath));

        Image::upload($image, $path);

        $user->update(['image_path' => $dbPath]);

        return redirect()->route('my-account.home')
            ->with('notificationText', 'User Profile Image Uploaded successfully!!');
    }

    public function changePassword()
    {
        return view('user.my-account.change-password');
    }

    /**
     * Create Directories if not exists
     *
     * @var string $path
     * @return \AvoRed\Framework\Image\Service
     */
    public function directory($path)
    {
        if (!File::exists($path)) {
            File::makeDirectory($path, 0775, true, true);
        }
        return $this;
    }

    public function changePasswordPost(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        if (Hash::check($request->get('current_password'), $user->password)) {
            $user->update(['password' => bcrypt($request->get('password'))]);
            return redirect()->route('my-account.home')
                ->with('notificationText', 'User Password Changed Successfully!');
        } else {
            return redirect()->back()->withErrors(['current_password' => 'Your Current Password Wrong!']);
        }
    }

    public function downloadInfos(){
        return view('user.my-account.download-infos');
    }

    public function downloadFileInfos(){

        $user = Auth::user();
        $addresses = Address::whereUserId($user->id)->get();
        $filename= $user->first_name.$user->last_name."_data.html";
        $handle = fopen($filename, "w");
        fwrite($handle,"<h1>Vos données personnelles</h1>");
        fwrite($handle,"<h3>Coordonnées</h3>");

        fwrite($handle, "<div>Prénom : $user->first_name</div>" );
        fwrite($handle, "<div>Nom : $user->last_name</div>" );
        fwrite($handle, "<div>Email : $user->email</div>" );
        fwrite($handle, "<div>Entreprise : $user->company_name</div>" );
        fwrite($handle, "<div>Téléphone : $user->phone</div>" );
        fwrite($handle, "<div>Compte créé le : $user->created_at</div>" );

        fwrite($handle,"<h3>Adresses</h3>");
        foreach($addresses as $address){

            $pays = Country::find($address->country_id);
            fwrite($handle, "<div>Adresse 1 : $address->address1</div>" );
            fwrite($handle, "<div>Adresse 2 : $address->address2</div>" );
            fwrite($handle, "<div>Code postal : $address->postcode</div>" );
            fwrite($handle, "<div>Ville : $address->city</div>" );
            fwrite($handle, "<div>Pays : $pays->name</div>" );
            fwrite($handle, "<div>Téléphone : $address->phone</div>" );
        }


        fclose($handle);

        header('Content-Type: application/force-download');
        header('Content-Disposition: attachment; filename='.basename($filename));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        unlink($filename);
        exit;
    }


    public function editFidelite()
    {
       $fidelite = Fidelite::where('user_id', Auth::user()->id)->first();

        return view('user.my-account.fidelite')
            ->with('fidelite', $fidelite);
    }


    public function storeFidelite(Request $request)
    {
        $fidelite = new Fidelite();
        $fidelite->numero_fidelite = $request->numero_fidelite;
        $fidelite->user_id = Auth::user()->id;
        $fidelite->save();

        return redirect()->route('my-account.home');
    }


    public function delete(){
        return view('user.my-account.delete');
    }

    public function deletePost(){
        User::destroy(Auth::user()->id);

        return redirect()->route('home');
    }


}
