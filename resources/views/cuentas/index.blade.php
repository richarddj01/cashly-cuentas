@extends('layouts.app')

@section('title', 'Cuentas')

@section('content')

<a href="{{ route('cuentas.create') }}" class="btn btn-primary">Nueva</a>

    <div class="row m-2 justify-content-center">
        @foreach ($cuentas as $cuenta)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <strong>{{strtoupper($cuenta->descripcion)}}</strong>
                        </div>
                        <div class="card-text">
                            Saldo Inicial: L {{number_format($cuenta->saldo_inicial,2)}}

                            <a href="{{ route('cuentas.edit', $cuenta) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('cuentas.destroy', $cuenta) }}" method="post" onsubmit="return confirm('¿Está seguro de eliminar?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if (session('success'))
            <div class="alert alert-success m-3">
                {{  session('success') }}
            </div>
        @endif
    </div>

@endsection
