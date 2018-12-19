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
    	$projets = Projet::paginate(9);
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
        $nbr = DB::table('projet_user')
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
        if(request()->has('type')){
            $articles =Article::where('type',request('type'))->paginate(5);
        }else{
            $articles = Article::paginate(9);
        }
        /*$participants = DB::table('users')
             ->join('article_user', 'users.id', '=', 'article_user.user_id')
             ->select( DB::raw('users.name','article_user.article_id'))
             ->groupBy('article_user.article_id')
             ->get();*/
    	return view('frontOffice.articles',['articles' => $articles]);    
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
}
