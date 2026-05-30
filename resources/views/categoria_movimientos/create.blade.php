@extends('layouts.app')

@section('title', 'Categorias de Movimientos')

@section('content')
    <form action="{{ route('categoria_movimientos.create') }}" method="post" class="row">
        @csrf
        <div class="col-12">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
@endsection
