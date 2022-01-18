<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user|superadministrator');        
    }


    function index()
    {
        return view('user.index');
    }
}
