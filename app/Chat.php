<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function users() 
{
	return $this->belongsToMany('App\User');
}
 
public function messages() 
{
	return $this->hasMany('App\Message');
}
}


