@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="user-profile">

                @if ($user->image)
                    <div class="container-avatar">
                        <img src="{{ route('user.avatar',['filename'=> $user->image]) }}" alt="avatar" class="avatar">
                    </div>                    
                @endif

                <div class="user-info">
                    <p>{{'Se unio: '. \FormatTime::LongTimeFilter($user->created_at) }}</p>
                    <h1>{{'@'.$user->nick}}</h1>
                    <h2>{{ $user->name. ' '. $user->surname }}</h2>
                    <p>{{ $user->description }}</p>
                </div>
            </div>
            <div class="clearfix"></div>
            @foreach ($user->images as $i)
                @include('includes.image', ['i' => $i])
                
            @endforeach
            @if (count($user->images) == 0)
                    <h1>No tiene ninguna publicacion echa</h1>
            @endif
        </div>

    
    </div>
</div>
@endsection
