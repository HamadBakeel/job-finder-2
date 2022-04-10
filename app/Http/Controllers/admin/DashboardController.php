<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function __construct()
    {

    }


    //

    public function dashboard(){


//        $user=User::with(['profile','products'])->where('id',1)->get()->first();
        $user = User::find(1);
        //return $user->profile->facebook;
//        return view('admin.dashboard');
        return response($user);

    }

    public function adminDash(){
        return view('admin.dashboard');

    }
}
