@extends('layouts.app')

@section('content')

<div class="text-success">

    @foreach($categorias as $categoria)
    <ul>
        <li>
            {{ $categoria->descripcion }}
        </li>
    </ul>

    @endforeach
</div>

@endsection
