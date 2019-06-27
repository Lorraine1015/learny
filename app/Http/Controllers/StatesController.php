<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Country;

class StatesController extends Controller
{
    //
    function index(Request $req){
        $states= State::all();
        return view('states.index',['states'=>$states]);
    }
    function ajaxindex(Request $req,$country){
        $states= State::where('country_id', '=', $country)->get();
        $data = [];
        $data['states'] = $states;
        return response()->json($data);
    }
    function create(Request $req){
        $countries=Country::all();
        return view('states.create',['countries'=> $countries]);
    }
    function show(Request $req,State $state){
        return view('states.show',['state'=>$state]);
    }
    function store(Request $req){
        $state=$req->input('state');
        State::create($state);
        return redirect(route('states.index'));
    }
    function edit(Request $req,State $state){
        return view('states.edit',['state'=>$state]);
    }
    function update(Request $req,State $state){
        $state->name=$req->input('state.name');
        $state->save();
        return redirect(route('states.show',['state'=>$state]));
    }
    function delete(Request $req,State $state){
        $state->delete();
        return redirect(route('states.index'));
    }
}
