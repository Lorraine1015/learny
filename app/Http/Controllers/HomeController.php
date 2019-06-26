<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class HomeController extends Controller
{
    //
    public function index(){
        $countries= Country::all();
        return view('home.index',['countries'=>$countries]);
    }
}
