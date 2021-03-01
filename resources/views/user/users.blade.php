@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- Alerta cuando se Subio foto --}}
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <h2>Gente</h2>
                <form action="GET" action="{{ route('user.users') }}" id='buscador'>
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" id='search' class="form-control">
                        </div>
                        <div class="form-group col btn-search">
                            <input type="submit" value="Buscar" class="btn btn-success">
                        </div>
                    </div>
                </form>

                @foreach ($users as $user)

                    <div class="user-profile">

                        @if ($user->image)
                            <div class="container-avatar">
                                <img src="{{ route('user.avatar', ['filename' => $user->image]) }}" alt="avatar"
                                    class="avatar">
                            </div>
                        @endif

                        <div class="user-info">
                            <p>{{ 'Se unio: ' . \FormatTime::LongTimeFilter($user->created_at) }}</p>
                            <h2>{{ '@' . $user->nick }}</h1>
                            <h3>{{ $user->name . ' ' . $user->surname }}</h2>
                            <a href="{{ route('user.profile',['id' => $user->id]) }}" class="btn btn-success">Ir al perfil</a>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                    </div>


                @endforeach
                {{-- Pagination --}}
                <div class="clearfix">
                    {{ $users->links() }}
                </div>
            </div>


        </div>
    </div>
@endsection
