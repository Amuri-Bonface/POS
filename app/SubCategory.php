<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subCategories';


    public function item(){
    	return $this->hasMany('App\Item');
    }

 	public function Category(){
 		return $this->belongsTo('App\Category');
 	}   

}
