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
use App\Partenaire;
use Carbon\Carbon;

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
        $partenaires = DB::select("SELECT distinct P.nom ,P.photo  FROM partenaires P , contacts C , projets_contacts PC , projets Pr
                                    WHERE P.id=C.partenaire_id and C.id=PC.contact_id and PC.projet_id=$id");
                                   
        return view('frontOffice.detailsProjet')->with([
            'projet' => $projet,
            'membres'=>$membres,
            'projets_similaires'=>$projets_similaires,
            'nbr' => $nbr,
            'partenaires' => $partenaires,
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
        $projets = DB::select("SELECT distinct id , intitule from projets where id in 
                                (select projet_id from projet_user where user_id in 
                                (select id from users where equipe_id = $id))");
        $partenaires = DB::select("SELECT distinct P.nom ,P.photo,P.pays,P.type  FROM partenaires P , contacts C , projets_contacts PC , projets Pr,projet_user Pu,users U
        WHERE P.id=C.partenaire_id and C.id=PC.contact_id and PC.projet_id=Pr.id and Pr.id=Pu.projet_id and Pu.user_id=U.id and U.equipe_id=$id");	
        return view('frontOffice.detailsEquipe')->with([
            'equipe' => $equipe ,
            'membres' => $membres ,
            'projets' => $projets,
            'partenaires' => $partenaires,
        ]);;
    }
    public function accueil()
    {
         $carbon = Carbon::today();
       /* $date= Carbon::createFromFormat('d/m/Y','11/06/2002');
        $date = DB::select("SELECT date from actualites");
        $time = strtodate('20/10/2002');
        $newformat = date('d/m/Y',$time);
        return $newformat;*/
         $actualites= DB::table('actualites')
         ->where('date', '>=', '24/01/2019' )
         ->get();
         
         $articles = Article::orderBy('created_at', 'asc')->take(4)->get();

         $projets = Projet::orderBy('created_at', 'asc')->take(8)->get();

         $nbr = DB::table('projet_user')
             ->select( DB::raw('count(user_id) as total,projet_id'))
             ->groupBy('projet_id')
             ->get();

        return view('frontOffice.accueil' )->with([
            'actualites' => $actualites ,
            'articles' => $articles,
            'projets' => $projets,
            'nbr' => $nbr,

        ]);; 
        
    }

}
