<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $fillable = [
        'company_logo','jobpost_id',
    ];
    public function jobpost(){
    	return $this->belongsTo('App\jobpost');
    }
}
