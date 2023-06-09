@extends('layouts.plantilla')


@section('title')
    <h1>Crear Producto</h1>
@endsection

@section('content')

<form action="{{ route('productos.store')}}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="" class="form-label">NOMBRE</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required min="1" max="50">
    </div>
    <div class="mt-3">
        <label for="" class="form-label" >PRECIO</label>
        <input type="number" class="form-control" id="precio" name="precio" required">
    </div>
    <div class="mt-3">
      <label for="" class="form-label">CANTIDAD</label>
      <input type="number" class="form-control" id="cantidad" name="cantidad" required >
    </div>
    <div class="mt-5">
        <button type="submit" class="btn btn-success mr -4 ">GUARDAR</button>
        <a href="{{route('productos.index')}}" class="btn btn-danger">CANCELAR</a>
    </div>

  </form>

@endsection