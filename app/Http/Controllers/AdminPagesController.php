<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


class AdminPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator');        
    }


    function index()
    {
        return view('admin.index');
    }

    function userinformation()
    {
        $users = User::all();

        return view('admin.backend.user.user', [
                'users' => $users
            ]);
        
    }


    function registeruser(Request $req){


        
        $this->validate($req,[
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,',
            'password'=>'required|string',
           ]);

        $user = new User;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->user_role = 'user';
        
        $user->save();


        $RegisteredUser = User::find($user->id);
        $RegisteredUser->attachRole('user');
        $RegisteredUser->save();

        return back();


    }
    
}
