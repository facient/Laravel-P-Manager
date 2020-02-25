<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=[
    	'name',
    	'days',
    	'hours',
    	'user_id',
    	'project_id',
    	'company_id',

    ];
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
    public function projects()
    {
    	return $this->belongsTo('App\Project');
    }
    public function companies()
    {
    	return $this->belongsTo('App\Company');
    }
}
