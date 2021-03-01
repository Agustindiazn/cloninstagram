<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //comentario de la foto
    public function store(Request $request){

        // validacion
        $validate = $this->validate($request,[
            'image_id' => 'integer|required',
            'content' => 'string|required'
        ]);

        // User
        $user = \Auth::user();

        // Recoger datos 
        $image_id = $request->input('image_id');
        $content = $request->input('content');

        // Asignar valor al objeto
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->image_id = $image_id;
        $comment->content = $content;

        // Guardar en la BD
        $comment->save();

        // Redireccion
        return redirect()->route('image.detail', ['id' => $image_id])
                        ->with([
                            'message' => 'Has publicado tu comentario',
                        ]);
    }

    // Eliminar Comentario
    public function delete($id){
        // user identificado
        $user = \Auth::user();

        // Objeto buscar por id
        $comment = Comment::find($id);

        // Comprobar si soy el dueño
        if($user && ($comment->user_id == $user->id || $comment->image->user_id == $user->id)){
            $comment->delete();
            // Redireccion
            return redirect()->route('image.detail', ['id' => $comment->image->id])
            ->with([
                'message' => 'Comentario eliminado',
            ]);
        }else{
            // Redireccion
            return redirect()->route('image.detail', ['id' => $comment->image->id])
            ->with([
                'message' => 'El comentario no se elimino',
            ]);
        };
    }
}
