<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;



class ChatController extends Controller
{
    public function chats(){
        
        // Sacar a todos los usuarios menos el logeado
        // $users = User::where('id', '!=', Auth::id())->get();

        $users = DB::select('select users.id,users.name, users.image,users.nick, users.email, count(is_read) as unread from users 
                            LEFT JOIN messages ON users.id = messages.from and is_read = 0 and messages.to = '.Auth::id().' 
                            where users.id != '.Auth::id().
                            ' group by users.id, users.name, users.image, users.nick,users.email');

        return view('chat.chats',[
            'users' => $users,
        ]);

    }

    public function getChat($user_id){

        //Sacar todos los mensajes del user seleccionado     
        $my_id = Auth::id();
        // Actualizar notificacion al darle clik
        Message::where([
                'from' => $user_id,'to' => $my_id])
                ->update(['is_read' => 1]);

        $messages = Message::where(function ($query) use ($user_id, $my_id){
            $query  ->where('from',$my_id)
                    ->where('to', $user_id);
        })          ->orWhere(function($query) use ($user_id, $my_id){
            $query  ->where('from' , $user_id)
                    ->where('to' , $my_id);
        })->get();

        return view('includes.chat',[
            'messages' => $messages,
            'my_id' => $my_id
        ]);
    }

    public function sendMessage(Request $request){
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        
        $data->from = $from;
        $data->to= $to;
        $data->message= $message;
        $data->is_read = 0; //notificacion activa
        
        // Save BD
        $data->save();

        // Notificaciones Pusher
        $options = array(
            'cluster' => 'mt1',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; //Manda notificacion de las id del from y to
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
