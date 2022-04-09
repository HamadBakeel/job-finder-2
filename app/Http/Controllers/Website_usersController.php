<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Website_user;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class Website_usersController extends Controller
{
    public function show()
    {
        $users = Website_user::all();
        $user = $users->find('1');
        return view('profile/profileSettings',['user'=>$user]);
    }

    public function editProfile(Request $request)
    {
        $users = Website_user::all();
        $user = $users->find('1');
        $current_data = $request->post();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->location = $request->location;
        if($request->file('image'))
            $user->image = $this->uploadImage($request,$user);

        $user->save();

        return redirect('show');
    }

    public function uploadImage(Request $request, $user): string
    {
        $file = $request->file('image');
        $filename= $file->getClientOriginalName();
        $file->move(public_path().'\images\\',$filename);
        return 'images/'.$filename;
    }
}
