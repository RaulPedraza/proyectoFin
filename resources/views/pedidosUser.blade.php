@extends('layouts.layout')
@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-1 col-md-2"></div>
            <div class="col-10 col-md-8">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" class="tablehead">Dirección</th>
                        <th scope="col" class="tablehead">Piso</th>
                        <th scope="col" class="tablehead">Puerta</th>
                        <th scope="col" class="tablehead">Plato</th>
                    </tr>

                    </thead>
                    @foreach($pedidos as $pedido)
                        <tr>
                            <td scope="row">{{ $pedido->direccion }}</td>
                            <td>{{ $pedido->piso }}</td>
                            <td>{{ $pedido->puerta }}</td>
                            @foreach($platos as $plato)
                                @if($plato->id == $pedido->plato_id)
                                    <td>{{ $plato->nombre }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
