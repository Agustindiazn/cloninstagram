<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\like;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like($image_id){
        // Recoger datos del user
        $user = \Auth::user(); 

        // Condicion para ver si existe el like
        $isset_like = Like::where('user_id', $user->id)
                            ->where('image_id',$image_id) 
                            ->count();
        if($isset_like == 0 ){
            $like = new like();
            $like->user_id = $user->id;
            $like->image_id = (int)$image_id;

            // Guardar 
            $like->save();

             return response()->json([
                 'like' => $like,
             ]);

        }else{
            return response()->json([
                'message' => 'El Like ya existe'
            ]);
        };
    }

    public function dislike($image_id){
        // Recoger datos del user
        $user = \Auth::user(); 

        // Condicion para ver si existe el like
        $like = Like::where('user_id', $user->id)
                        ->where('image_id',$image_id) 
                        ->first();
        if($like){
            // eliminar 
            $like->delete();

             return response()->json([
                 'like' => $like,
                 'message' => 'Has dado dislike'
             ]);

        }else{
            return response()->json([
                'message' => 'El Like no existe'
            ]);
        };
    }
     public function likes(){
        $user = \Auth::user();

        $likes = Like::where('user_id', $user->id)
                    ->orderBy('id','desc')
                    ->paginate(3); 

        return view('likes.likes',[
            'likes' => $likes,
        ]);
     }
}
