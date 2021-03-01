<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Image;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

// Imagen
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ImageController extends Controller
{
    // Para ver si esta auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('image.create');
    }

    public function save(Request $request){
        // User logeado
        $user = Auth::user();

        // Validar
        $request->validate([
            'description' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg',
            ]);
        
        // Recibir datos
        $image_path = $request->file('image_path');
        $description = $request->input('description');
            
        // Asignar Valores al objeto
        $image = new Image();
        $image->user_id= $user->id;
        
        $image->description = $description;

        // Subir fichero
        if($image_path){    
            // Reenombrar imagen unica
            $image_path_name = time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            // Guardar en el objeto
            $image->image_path = $image_path_name;

            // Guardar en la bd
            $image->save();
        }else{
            return redirect()->route('image.create')->with([
                'message' => 'Error al guardar la foto'
            ]);
        }
        return redirect()->route('home')->with([
            'message' => 'La foto ha sido subida correctamente'
        ]);

    }

    // Devolver la imagen buscada|publicada
    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);

        return new Response($file, 200);
    }

    // saca una imagen por la id
    public function detail($id){
        // busca en la bd
        $image = Image::find($id);

        return view('image.detail',[
            'image' => $image,
        ]);
    }

    // eliminar una foto
    public function delete($id){
        $user = \Auth::user();
        $image = Image::find($id);

        $comments = Comment::where('image_id', $id)->get();
        $likes = Like::where('image_id', $id)->get();

        if($user && $image && $image->user->id == $user->id){
            // Eliminar Comentarios y likes
            if($comments && count($comments)>= 1){
                foreach($comments as $x){
                    $x->delete();
                }
            }
            if($likes && count($likes)>= 1){
                foreach($likes as $x){
                    $x->delete();
                }
            }

            // Eliminar ficheros del storage
            Storage::disk('images')->delete($image->image_path);

            // Eliminar registro imagen
            $image->delete();

            $message = array('message' => 'La imagen se ha borrado correctamente');
        }else{
            $message = array('message' => 'La imagen NO se ha borrado correctamente');
        }

        return redirect()->route('home')->with($message);
    }

    // Editar Imagen
    public function edit($id){
        $user = \Auth::user();
        $image = Image::find($id);

        if($user && $image && $image->user->id == $user->id){
            return view('image.edit',[
                'image' => $image,
            ]);
        }else{
            return redirect()->route('home');
        };
    }

    // Recoger datos del edit para modificarlo en la BD
    public function update(Request $request){
        // User logeado
        $user = Auth::user();

        // Validar
        $request->validate([
            'description' => 'required',
            'image_path' => 'mimes:jpg,png,jpeg',
            ]);
        
        // Recibir datos
        $image_id = $request->input('imagen_id');
        $image_path = $request->file('image_path');
        $description = $request->input('description');
            
        // Asignar Valores al objeto
        $image = Image::find($image_id);
        $image->description = $description;

        // Subir fichero
        if($image_path){    
            // Reenombrar imagen unica
            $image_path_name = time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            // Guardar en el objeto
            $image->image_path = $image_path_name;

        }
        // Guardar en la bd
        $image->update();
        
        return redirect()->route('image.detail',['id' => $image_id])
                        ->with(['message' => 'La foto ha sido actualizada correctamente']);

    }
}
