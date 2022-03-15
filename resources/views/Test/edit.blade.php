@extends('adminlte::page')

@section('title', 'distribuidores')

@section('content_header')
    <h1>Distribuidores</h1>
@stop

@section('content')
<div class="container mt-2">
    <form action="{{ route('distribuidor.update',$distribuidor->id) }}" method="POST">
        {{ method_field('POST') }}
        @csrf
        <div class="row">
            <label for="" class="form-label col-sm-2 py-2">Compania</label>
            <input type="text" name="compania" class="form-control col-sm-6"
            value="{{ old('compania', $distribuidor->compania) }}"/>
           
        </div>
        <div class="row">
            <label for="" class="form-label col-sm-2 py-2">Titular</label>
            <input type="text" name="titular" class="form-control col-sm-6"
            value="{{ old('titular', $distribuidor->titular) }}"/>
            
        </div>
        <div class="row">
            <label for="" class="form-label col-sm-2 py-2">Telefono</label>
            <input type="text" name="telefono" class="form-control col-sm-6"
            value="{{ old('telefono', $distribuidor->telefono) }}"/>
         
        </div>
        <div class="row">
            <label for="" class="form-label col-sm-2 py-2">Correo</label>
            <input type="text" name="correo" class="form-control col-sm-6"
            value="{{ old('correo', $distribuidor->correo) }}"/>
            
        </div>
        <div class="row">
            <div class="col-sm-4 py-1">
               <button class="btn btn-sm btn-secondary ml-2">ACTUALIZAR</button>
               <a class="btn btn-secondary btn-sm ml-2" href="{{ route('distribuidor.index') }}">REGRESAR</a>
            </div>
        </div>    
       
    </form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
