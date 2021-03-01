{{-- Extender parte del layout  --}}

@extends('layouts.app')

{{-- Agregar Contenido --}}
@section('content')

<h1>Editar Img</h1>
{{-- Generar container para el contenido --}}
<div class="container">
    {{-- una fila con contenido centrado --}}
    <div class="row justify-content-center">
        {{-- Tamaño de ancho --}}
        <div class="col-md-8">
            {{-- Alerta cuando se Subio foto --}}
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            {{-- Caja --}}
            <div class="card">

                {{-- Cabecera del card --}}
                <div class="card-header">
                    Editar foto
                </div>
                {{-- Cuerpo del card --}}
                <div class="card-body">
                    {{-- Formulario subir imagen --}}
                    <form action="{{ route('image.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="imagen_id" value="{{$image->id}}" />

                        {{-- Input img --}}
                        <div class="form-group row">
                            <label for="image_path" class="col-md-2 col-form-label text-md-right">Imagen:</label>

                            <div class="image-container image-detail pb-3">
                                <img src="{{ route('image.get',['filename'=> $image->image_path] ) }}" alt="">
                            </div>

                            <div class="col-md-7">

                                <input class="form-control {{ $errors->has('image_path')? 'is-invalid' : '' }}" type="file" name="image_path" id="image_path">
                                @error('image_path')
                                    <div class="alert alert-danger mt-3"> {{ $errors->first('image_path') }}</div>
                                @enderror
                            </div> 
                        </div>
                        {{-- Input Description --}}
                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">Descripcion</label>
                            <div class="col-md-7">
                                <textarea class=' {{ $errors->has('description')? 'is-invalid' : '' }}'name="description" id="description" required >
                                    {{ $image->description}}
                                </textarea>
                                @error('description')
                                    <div class="alert alert-danger mt-3"> {{ $errors->first('description') }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Input submit --}}
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input type="submit" class="btn btn-primary" value="Actualizar imagen">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
     
        </div>
    </div>
</div>
    
@endsection

