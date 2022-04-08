<?php

namespace App\Http\Controllers;
use App\Models\Website_user;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class Website_usersController extends Controller
{
    public function show()
    {
        $users = Website_user::all();
        $user = $users->find('1');
        return view('profile/profileSettings',['user'=>$user]);
    }
}
