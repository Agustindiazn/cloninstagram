<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    // Relacion uno a muchos

    // Consigue todos los comentarios de la foto llamada 
    public function comments(){
        return $this->hasMany('App\Comment')->orderBy('id','desc'); //tiene image_id
    }

    // Conseguir todos los like de una imgagen
    public function likes(){
        return $this->hasMany('App\Like');//tienen image_id
    }

    // Relacion de muchos a uno, 1 User puede tener muchas fotos
    public function user(){
        return $this->belongsTo('App\User', 'user_id');//no tiene image_id
    }

}
