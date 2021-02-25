<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Helpers\Helpers;

class cumple extends Controller
{
    
    public function index()
        {
            $user = User::all();
            
            $calendario =Helpers::usuario($user);
            return view('cumple.index',compact('calendario'));            
        }
            
}
