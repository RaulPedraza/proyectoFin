@extends('layouts.layout')
@section('contenido')
    <div class="jumbotron jumbotron-fluid" id="jumbotron">
        <div class="container">
            <h1 class="display-4">Escuela de Hosteleria</h1>
            <p class="lead">Aqui tienes una lista de los platos que preparamos</p>
        </div>
    </div>
    @if($user == 2)
        <div class="container mt-3">
            <a href="/nuevoPlato" id="nuevoPlato" class="btn btn-outline-primary btn-lg btn-block mb-5">Añadir plato</a>
        </div>
    @endif
    <div class="container mt-3">
        <div class="row d-flex justify-content-around mb-3">
            @foreach($platos as $plato)
            <div class="card col-10 col-md-4 mt-3" style="width: 33%;">
                <img class="card-img-top" src="{{ $plato->ruta_imagen }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$plato->nombre}}</h5>
                    <p class="card-text">{{$plato->desc_pequeña}}</p>
                    <a href="/{{ $plato->id }}" id="mas" class="btn btn-lg btn-block btn-outline-primary">+ Mas</a>
                    @if($user == 2)
                        <a href="/{{ $plato->id }}/borrar" class="btn btn-lg btn-block btn-outline-danger">- Eliminar</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
@endsection
