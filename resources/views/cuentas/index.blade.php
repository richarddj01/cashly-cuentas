@extends('layouts.app')

@section('title', 'Cuentas')

@section('content')

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
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
