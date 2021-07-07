<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'chat_id'];

    public function user(){
	return $this->belongsTo('App\User');
    }
 
public function chat() {
	return $this->belongsTo('App\Chat');
 } 
}
