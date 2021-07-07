<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function  index(){

        $usuarios = User::where("id","!=",Auth::user()->id)->get();

        return view('usuarios', compact("usuarios"));
    }
}
