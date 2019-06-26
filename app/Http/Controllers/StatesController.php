<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{
    //
    function index(Request $req){
        $states= State::all();
        return view('states.index',['states'=>$states]);
    }
    function create(Request $req){
        return view('states.create');
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
