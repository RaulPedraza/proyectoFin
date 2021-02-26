@extends('layouts.layout')
@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-md-center mt-3">
        <div class="col">
            <h1 style="text-align: center">{{ $plato->nombre }}</h1>
        </div>
    </div>
    <div class="row justify-content-md-center mt-3">
        <div class="col">
            <img class="card-img-top" src="{{ $plato->ruta_imagen }}" alt="Card image cap">
        </div>
    </div>
    <div class="row justify-content-md-around mt-3">
        <div class="col-3">
            <h2 style="text-align: center">Tipo de plato: {{ $plato->tipo_plato }}</h2>
        </div>
        <div class="col-3">
            <h2 style="text-align: center">Tipo de comida: {{ $plato->tipo_comida }}</h2>
        </div>
    </div>
    <div class="row justify-content-md-center mt-3">
        <div class="col">
            <p>{{ $plato->description}}</p>
        </div>
    </div>
    <div class="row">
        <form action="/{{ $plato->id }}" method="POST" class="col-12 mb-5" id="form">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="plato_id" name="plato_id" value="{{ $plato->id }}" hidden>
            </div>
        </form>
    </div>
    @if($user == "")
        <a href="/login" id="pedir" class="btn btn-primary btn-lg btn-block mb-5">Pedir</a>
    @else
        <a href="#" id="pedir2" class="btn btn-primary btn-lg btn-block mb-5" onclick="nuevoPedido()">Pedir</a>
    @endif

@endsection
