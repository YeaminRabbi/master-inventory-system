<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');        
    }


    function index()
    {
        return view('admin.index');
    }

    
}
