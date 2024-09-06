<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function sayGreetings(){
        return view('controller');
    }

    // public function showUser(string $id){
    //     return view('show-user', ['id' => $id]);
    // }

    public function showUser(string $id){
        return view('show-user', compact('id'));
    }
}
