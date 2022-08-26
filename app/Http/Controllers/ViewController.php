<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\weeklyChart;

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

    public function viewHome(){
        // $chart = new weeklyChart;
        // $chart->labels(['Jan', 'Feb', 'Mar']);
        // $chart->dataset('Sample', 'line', [10, 25, 13])
        // ->color("rgb(255, 99, 132)")
        // ->backgroundcolor("rgb(255, 99, 132)");
        $data = [10, 25, 13, 20, 20, 60, 50];
        return view('user.home', [ 'data' => $data ]);
    }

    public function viewMeasure(){
        return view('user.measure');
    }

    public function viewHistory(){
        return view('user.history');
    }

    public function viewCalculator(){
        return view('user.calculator');
    }


    public function viewNotification(){
        return view('user.notification');
    }

    public function viewProfile(){
        return view('user.profile');
    }

    public function viewEditProfile(){
        return view('user.editprofile');
    }
}
