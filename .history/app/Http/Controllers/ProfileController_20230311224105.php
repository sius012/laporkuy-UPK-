<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\PhotoProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $base64img = null;

        if($request->hasFile("img-input")){
            $base64img = "data:image/png;base64,".base64_encode(file_get_contents($request->file("img-input")->path()));
        }
       
        $profile = User::find(Auth::user()->id);

        $profile->name = $request->name;
        $profile->nik = $request->nik;
        $profile->email = $request->email;
        $profile->alamat = $request->alamat;
        $profile->password = Hash::make($request->password);

        
        if(PhotoProfile::where("id_user", Auth::user()->id)->count() > 0){
            $pp = PhotoProfile::where("id_user", Auth::user()->id)->
            update(["isi"=>$base64img]);

        }else{
            if($base64img != null){
                PhotoProfile::create([
                    "id_user"=>Auth::user()->id,
                    "isi"=>$base64img
                ]);
            }
        }

        return redirect()->back();
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
