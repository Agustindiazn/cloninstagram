<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    // Para ver si esta auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    // modificar user
    public function config(){
        return view('user.config');
    }

    // Ejecutar metodo de modificar Post
    public function update(Request $request){
        // Id del user
        $user = Auth::user();
        $id = $user->id;

        // Validar datos
        $validate = $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255', 'unique:users,nick,'.$id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
        ]);

        // Recuperar los datos
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');

        // Actualizar en el objeto del user
        $user->name = $name;
        $user->surname= $surname;
        $user->nick= $nick;
        $user->email= $email;

        // Subir la imagen
        $image_path = $request->file('image_path');
       if($image_path){
            //Asignar nombre unico a la imagen    
           $image_path_full = time().$image_path->getClientOriginalName();

            // Guardar en el storage (Storage: app/user) 
           Storage::disk('users')->put($image_path_full, File::get($image_path));

            // Asiganr al objeto el nombre 
           $user->image = $image_path_full;
       }

        // Actualizar en la BD
        $user->update();
        
        return redirect()->route('user.config')
                        ->with(['message' => 'User Modificado correctamente']);        
    }

    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file,200);
    }

    public function profile($id){
        $user = User::find($id);

        return view('user.profile',[
            'user'=> $user,
        ]);

    }

    public function users($search = null){
        if(!empty($search)){
            $users = User::where('nick','LIKE','%'.$search.'%')
                            ->orWhere('name','LIKE','%'.$search.'%')
                            ->orWhere('surname','LIKE','%'.$search.'%')
                            ->orderBy('id','desc')
                            ->paginate(5);
        }else{
            $users = User::orderBy('id','desc')->paginate(5);
        }
        return view('user.users',[
            'users'=> $users
        ]);

    }

}
