<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');        
    }

 
    public function index()
    {
        $user = Auth::user();

        // if($user->user_role != 'admin')
        // {
        //     return view('404NotFound');
        // }else{
        //     return view('home');
        // }
        return view('home');
    }
}
