{{-- Extender parte del layout  --}}

@extends('layouts.app')

{{-- Agregar Contenido --}}
@section('content')

<h1>Configuracion de la cuenta</h1>
{{-- Generar container para el contenido --}}
<div class="container">
    {{-- una fila con contenido centrado --}}
    <div class="row justify-content-center">
        {{-- Tamaño de ancho --}}
        <div class="col-md-8">

            {{-- Caja --}}
            <div class="card">

                {{-- Cabecera del card --}}
                <div class="card-header">
                    Subir nueva foto
                </div>
                {{-- Cuerpo del card --}}
                <div class="card-body">
                    {{-- Formulario subir imagen --}}
                    <form action="{{ route('image.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- Input img --}}
                        <div class="form-group row">
                            <label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
                            <div class="col-md-7">

                                <input class="form-control {{ $errors->has('image_path')? 'is-invalid' : '' }}" type="file" name="image_path" id="image_path" required>
                                @error('image_path')
                                    <div class="alert alert-danger mt-3"> {{ $errors->first('image_path') }}</div>
                                @enderror
                            </div> 
                        </div>
                        {{-- Input Description --}}
                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">Descripcion</label>
                            <div class="col-md-7">
                                <textarea class='{{ $errors->has('description')? 'is-invalid' : '' }}'name="description" id="description" required >
                                </textarea>
                                @error('description')
                                    <div class="alert alert-danger mt-3"> {{ $errors->first('description') }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Input submit --}}
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input type="submit" class="btn btn-primary" value="Subir imagen">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
     
        </div>
    </div>
</div>
    
@endsection

