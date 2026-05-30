@extends('layouts.app')

@section('title', 'Categorias de Movimientos')

@section('content')
    <form action="{{ route('categoria_movimientos.store') }}" method="post" class="row g-3">
        @csrf
        <div class="col-12">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control">
            @error('descripcion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
@endsection
