@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            {{-- Alerta cuando se Subio foto --}}
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
                 
                @if ($image)
                    <div class="card pub_image pub_image_detail">
                        <div class="card-header">

                            @if ($image->user->image)
                                <div class="container-avatar">
                                    <img src="{{ route('user.avatar',['filename' => $image->user->image]) }}" alt="">
                                </div>
                            @endif

                            <div class="data-user">
                                <a href="{{route('user.profile', ['id' => $image->user->id])}}">
                                    {{$image->user->name.' '. $image->user->surname}}
                                    <span class="nick_name">
                                        {{' | @'.$image->user->nick}}
                                    </span>
                                </a>
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="image-container image-detail">
                                <img src="{{ route('image.get',['filename'=> $image->image_path] ) }}" alt="">
                            </div>
                            
                            <div class="description">
                                <span class="nick_name">{{$image->user->nick}}</span>
                                <p>{{$image->description}}</p>
                            </div>
                            <div class="likes">
                                
                                {{-- Comprobar si el user le dio like a la imagen --}}
                                <?php $user_like = false; ?>
                                
                                @foreach($image->likes as $like)
                                    @if ($like->user->id == Auth::User()->id)
                                        <?php $user_like = true ; ?>
                                    @endif
                                @endforeach
                                {{-- Mostrar el tipo de corazon si es del user o no  --}}
                                @if ($user_like)
                                    <img src="{{ asset('img/heart-red.png') }}" data-id="{{$image->id}}" alt="disLike" class="btn-dislike">
                                @else
                                    <img src="{{ asset('img/heart-grey.png') }}" data-id="{{$image->id}}" alt="Like" class="btn-like">
                                @endif

                                <span class="number_likes">{{ count($image->likes)}}</span>

                            </div>

                            @if (Auth::user() && Auth::user()->id == $image->user->id) 
                                <div class="actions">
                                    <a href="{{ route('image.edit', ['id' => $image->id]) }}" class="btn btn-sm btn-primary">editar</a>
                                    {{-- <a href="{{ route('image.delete',['id' => $image->id]) }}" class="btn btn-sm btn-danger">Borrar</a> --}}

                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Eliminar</button>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">¡Eliminar!</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Si la eliminas nunca podras recuperarla</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                    <a href="{{ route('image.delete',['id' => $image->id]) }}" class="btn btn-sm btn-danger">Borrar definidamente</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="clearfix"></div>
                            <div class="comments">
                                <h2>Comentarios ({{count($image->comments)}})</h2>
                                <hr>
                                <form action="{{route('comment.save')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="image_id" value="{{$image->id}}">

                                    <p>
                                        <textarea class="form-control {{$errors->has('content') ? 'is_invalid' : ''}}  " name='content' ></textarea>
                                        @error('content')
                                            <div class="alert alert-danger mt-3"> {{ $errors->first('content') }}</div>
                                        @enderror
                                    </p>

                                    <button type="submit" class="btn btn-success">Comentar</button>

                                </form>
                                @foreach ($image->comments as $x)
                                <hr>
                                <div class="comment">
                                    <span class="nick_name">{{$x->user->nick}}</span>
                                    <span class="nick_name date">{{' | '.\FormatTime::LongTimeFilter($x->created_at)}}</span>
                                    <p>
                                        {{$x->content}}
                                        <br>
                                        @if (Auth::check() && ($x->user_id == Auth::user()->id || $x->image->user_id==Auth::user()->id) )    
                                        <a href="{{route('comment.delete', ['id' => $x->id])}}" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </a>
                                        @endif
                                    </p>

                                    
                                </div>
                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
           
          
        </div>

    
    </div>
</div>
@endsection
