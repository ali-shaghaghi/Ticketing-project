<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    public function index(){
        return view('admin.main.index');
    }
}
