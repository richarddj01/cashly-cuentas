@extends('layouts.app')

@section('title', 'Editar Cuenta')

@section('content')
    <div class="row m-3 justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Editar cuenta: {{ $cuenta->descripcion }}
                </div>
                <div class="card-text">
                    <form action="{{ route('cuentas.update', $cuenta) }}" method="post" class="row g-3">
                        @csrf
                        @method('PUT')
                        <label for="descripcion" class="form-label">Nombre de la cuenta:</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control is-valid" value="{{ $cuenta->descripcion }}">
                        @error('descripcion')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <label for="saldo_inicial" class="form-label">Saldo Inicial:</label>
                        <input type="text" name="saldo_inicial" id="saldo_inicial" class="form-control is-valid" value="{{ $cuenta->saldo_inicial }}">
                        @error('saldo_inicial')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
