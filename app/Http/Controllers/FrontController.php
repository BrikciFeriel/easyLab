<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Equipe;
use App\ProjetUser;
use App\Projet;

class FrontController extends Controller
{
    public function membres()
    {
        $membres = User::all();
        return view('frontOffice.membres' , ['membres' => $membres]);
    }

    public function detailsMembre($id)
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

    public function projets(){
    	$projets = Projet::all();
        $nbr = DB::table('projet_user')
             ->select( DB::raw('count(user_id) as total,projet_id'))
             ->groupBy('projet_id')
             ->get();
    	return view('frontOffice.projets')->with ([
            'projets' => $projets,
            'nbr' => $nbr,
            ]);    	
    }
}
