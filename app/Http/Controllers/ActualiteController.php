<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Parametre;
use App\Actualite;

class ActualiteController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

   public function index()
    {
        $labo = Parametre::find('1');
    	$listactualite = Actualite::all();
    	return view('actualite.index' , ['actualites' => $listactualite] ,['labo'=>$labo]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
