<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function loginView(){
        return view('auth/login');
    }

    public function registerView(){
        return view('auth/signup');
    }
}
