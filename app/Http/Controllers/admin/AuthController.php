<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function listAll(){

        $users=User::where('is_active',1)
        ->where('email_verified_at','!=',NULL)
        ->orWhere('name','like','%af%')
        ->orderBy('user_id','desc')
       // ->take(2)
        ->get();
        //$user=User::find(1);
        //return response($user);
        return view('admin.users.list_users')
        ->with('allUsers',$users);
    }

    public function showLogin(){
        if(Auth::check())
        return redirect()->route($this->checkRole());
        else
        return view('admin.login');
    }



    public function checkRole(){
        if(Auth::user()->hasRole('admin'))
        return 'dashboard';
            else
            return 'home';

    }

    public function login(Request $request){
        Validator::validate($request->all(),[
            'email_username'=>['email','required','min:3','max:50'],
            'user_pass'=>['required','min:5']
        ],[
            'email_username.required'=>'this field is required',
            'email_username.min'=>'can not be less than 3 letters',
        ]);

        if(Auth::attempt(['email'=>$request->email_username,'password'=>$request->user_pass,'is_active'=>1])){

            if(Auth::user()->hasRole('admin'))
            return redirect()->route('dashboard');
            else
            return redirect()->route('home');


        }
        else {
            return redirect()->route('login')->with(['message'=>'incorerct username or password or your account is not active ']);
        }


    }

    public function createUser(){
        return view('admin.users.create');
    }

    public function register(Request $request){

        Validator::validate($request->all(),[
            'first_name'=>['required','min:3','max:50'],
            'last_name'=>['required','min:3','max:50'],
            'u_email'=>['required','email','unique:website_users,email'],
            'user_pass'=>['required','min:5'],
            'confirm_pass'=>['same:user_pass']
        ],[
            'first_name.required'=>'this field is required',
            'first_name.min'=>'can not be less than 3 letters',
            'first_name.max'=>'can not be more than 50 letters',
            'last_name.required'=>'this field is required',
            'last_name.min'=>'can not be less than 3 letters',
            'last_name.max'=>'can not be more than 50 letters',
            'u_email.unique'=>'there is an email in the table',
            'u_email.required'=>'this field is required',
            'u_email.email'=>'incorrect email format',
            'user_pass.required'=>'password is required',
            'user_pass.min'=>'password should not be less than 3',
            'confirm_pass.same'=>'password dont match',


        ]);

        $u=new User();
        $u->first_name=$request->first_name;
        $u->last_name=$request->last_name;
        $u->password=Hash::make($request->user_pass);
        $u->email=$request->u_email;
        $u->image = '';
        $u->bio = '';
        $u->location = '';

        if($u->save()){
//            $admin = Role::create([
//                'name' => 'admin',
//                'display_name' => 'User Administrator', // optional
//                'description' => 'User is allowed to manage and edit other users', // optional
//            ]);
            $u->attachRole('client');
//            exit();
            Auth::login($u);
            return redirect()->route('showProfile')
            ->with(['success'=>'user created successfully']);
        }


        return back()->with(['error'=>'can not create user']);

    }


    public function editUser(){
        $u=User::find(5);
        if($u->hasRole('admin'))
        {

        }
        else {

        }
    }
    public function resetPassword(){

    }
    public function logout(){

        Auth::logout();
        return redirect()->route('login');

    }

}