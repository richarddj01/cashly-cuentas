@extends('layouts.app')

@section('title', 'Crear Cuenta')

@section('content')
    <div class="row m-3 justify-content-center">
        <div class="col-12 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Crear una nueva cuenta
                    </div>
                    <div class="card-text">
                        <form action="{{ route('cuentas.store') }}" method="post" class="row g-3">
                            @csrf
                            <label for="descripcion" class="form-label">Nombre de la cuenta:</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control is-valid">
                            @error('descripcion')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            <label for="saldo_inicial" class="form-label">Saldo Inicial</label>
                            <input type="text" name="saldo_inicial" id="saldo-inicial" class="form-control is-valid">
                            @error('saldo_inicial')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
