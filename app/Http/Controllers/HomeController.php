<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    //to check if the user is admin or not
    public function redirect(){

        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            return view('dashboard');
        }
    }
}
