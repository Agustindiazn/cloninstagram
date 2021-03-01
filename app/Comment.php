<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Ubicar en la BD 
    protected $table = 'comments';

    // Muchos a uno 
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    // Muchos a uno 
    public function image(){
        return $this->belongsTo('App\Image', 'image_id');
    }

    
}
