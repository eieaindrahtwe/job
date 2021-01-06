<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobsubcategory extends Model
{
    //
    protected $fillable = [
        'name', 'jobcategory_id',
    ];

    public function jobcategory(){
    	return $this->belongsTo('App\jobcategory');
    }
}
