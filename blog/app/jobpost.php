<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobpost extends Model
{
    //
    protected $fillable = [
        'photo', 'email','job_tilte','location','job_region','job_type','job-description','company_name','company_description','website',
    ];
}
