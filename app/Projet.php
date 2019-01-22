<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
	 use SoftDeletes;

     protected $dates = ['deleted_at'];

     public function chef()
    {
        return $this->belongsTo('App\User');
    }
     public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function partenaires()
    {
    	return $this->hasMany('App\Partenaire');
    }
}
