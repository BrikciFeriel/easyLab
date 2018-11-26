<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Equipe;

class FrontController extends Controller
{
    public function membres()
    {
        $membres = User::all();
        return view('frontOffice.membres' , ['membres' => $membres]);
    }

    public function detailmembre($id)
    {
        $membre = User::find($id);
        $equipes = Equipe::all();

        return view('frontOffice.profilMembre')->with([
            'membre' => $membre,
            'equipes' => $equipes,
            
        ]);;
    } 

    public function equipes(){

        $equipes = User::all();
        return view('frontOffice.equipes' , ['equipes' => $equipes]);
    }
}
