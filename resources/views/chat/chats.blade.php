@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="user-wrapper">
                    <ul class="users-chats">
                        @foreach ($users as $x)
                                <li class="user-chat" id='{{ $x->id }}'>
                                    {{-- mostrará una notificación de no leídos  --}}
                                    @if ($x->unread)
                                        <span class="pending">{{ $x->unread }}</span>
                                    @endif

                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ route('user.avatar', $x->image) }}"class="media-object">
                                    </div>

                                    <div class="media-body">
                                        <p class="name">{{ $x->name }}</p>
                                        <p class="nick">{{ $x->nick }} </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-8" id='messages'>

            </div>

        </div>
        
    </div>
@endsection
