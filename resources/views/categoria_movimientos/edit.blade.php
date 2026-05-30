@extends('layouts.app')

@section('title', 'Categorias de Movimientos')

@section('content')
<div class="row justify-content-center m-4">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                </div>
                <div class="card-text">
                    <form action="{{ route('categoria_movimientos.update', $categoria_movimiento) }}" method="post" class="row g-3">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $categoria_movimiento->descripcion }}">
                            @error('descripcion')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
