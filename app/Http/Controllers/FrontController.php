<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class FrontController extends Controller
{
    public function membres()
    {
       
        $membres = User::all();

        return view('frontOffice.membres' , ['membres' => $membres]);
    }
}
