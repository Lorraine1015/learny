<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    //
    function index(Request $req){
        $countries= Country::all();
        return view('countries.index',['countries'=>$countries]);
    }
    function create(Request $req){
        return view('countries.create');
    }
    function show(Request $req,Country $country){
        return view('countries.show',['country'=>$country]);
    }
    function store(Request $req){
        $country=$req->input('country');
        Country::create($country);
        return redirect(route('countries.index'));
    }
    function edit(Request $req,Country $country){
        return view('countries.edit',['country'=>$country]);
    }
    function update(Request $req,Country $country){
        $country->name=$req->input('country.name');
        $country->save();
        return redirect(route('countries.show',['country'=>$country]));
    }
    function delete(Request $req,Country $country){
        $country->delete();
        return redirect(route('countries.index'));
    }
}
