@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Alerta  --}}
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            
            @foreach ($image as $i)
            
                @include('includes.image',['i' => $i])

            @endforeach
            {{-- Pagination --}}
            <div class="clearfix">
                {{ $image->links()}}
            </div>
        </div>

    
    </div>
</div>
@endsection
