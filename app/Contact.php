<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function partenaire()
    {
        return $this->belongsTo('App\Partenaire');
    }
    public function projets()
    {
    	return $this->belongsToMany('App\Projets');
    }
}
