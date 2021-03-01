@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <h1>Likes mios</h1>
                <hr>
                @foreach ($likes as $l)
                    @include('includes.image', ['i' => $l->image])
                @endforeach
                {{-- Pagination --}}
                <div class="clearfix">
                    {{ $likes->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection
