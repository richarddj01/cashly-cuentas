@extends('layouts.app')

@section('content')

    @foreach ($cuentas as $cuenta)
        <ul>
            <li>
                {{ $cuenta}}
            </li>
        </ul>
    @endforeach

@endsection
