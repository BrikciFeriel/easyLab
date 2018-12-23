<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Equipe;
use App\ProjetUser;
use App\Projet;
use App\Article;
use App\Actualite;

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

    public function detailsProjet($id)
    {
        $projet = Projet::find($id);
        $membres = Projet::find($id)->users()->orderBy('name')->get();
        $projets_similaires = Projet::where('theme',$projet->theme)->get();
        $nbr = DB::table('projet0_user')
             ->select( DB::raw('count(user_id) as total,projet_id'))
             ->groupBy('projet_id')
             ->get();
        return view('frontOffice.detailsProjet')->with([
            'projet' => $projet,
            'membres'=>$membres,
            'projets_similaires'=>$projets_similaires,
            'nbr' => $nbr,
        ]);;
    }

    public function articles(){
    	$articles = Article::all();
    	return view('frontOffice.articles' , ['articles' => $articles,]);    	
    }

    public function detailsArticle($id)
    {
        $article = Article::find($id);
        $participants = Article::find($id)->users()->orderBy('name')->get();
        return view('frontOffice.detailsArticle')->with([
            'article' => $article,
            'participants'=>$participants,
        ]);;
    }

    public function actualites()
    {
        $actualites= Actualite::all();
        return view('frontOffice.actualites' , ['actualites' => $actualites]);  
    }

    public function detailsActualite($id)
    {
        $actualite = Actualite::find($id);
        return view('frontOffice.detailsActualite' , ['actualite' => $actualite]);  
    }
    public function equipes()
    {
        $equipes = Equipe::all();
        return view('frontOffice.equipes' , ['equipes' => $equipes]);
    }
    public function detailsEquipe($id)
    {
        $equipe = Equipe::find($id);
        $membres = Equipe::find($id)->membres()->get();
       // $projets = Equipe::find($id)->projets()->get();

        return view('frontOffice.detailsEquipe')->with([
            'equipe' => $equipe ,
            'membres' => $membres ,
            //'projets' => $projets,
        ]);;
    }

}
