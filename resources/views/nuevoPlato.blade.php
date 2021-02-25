@extends('layouts/layout')
@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class=" offset-3 col-6 d-flex justify-content-between">
                <h2>Nuevo Plato</h2>
                <a class="btn btn-primary btn-lg" href="/" role="button">Volver</a>
            </div>

        </div>

        <div class="row">
            <form action="/" method="POST" enctype='multipart/form-data' class="offset-3 col-6">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="desc_pequeña">Descripcion pequeña</label>
                    <textarea class="form-control" id="desc_pequeña" name="desc_pequeña" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="tipo_plato">Tipo de plato</label>
                    <input type="text" class="form-control" id="tipo_plato" name="tipo_plato" placeholder="Tipo de plato">
                </div>
                <div class="form-group">
                    <label for="tipo_comida">Tipo de comida</label>
                    <input type="text" class="form-control" id="tipo_comida" name="tipo_comida" placeholder="Tipo de comida">
                </div>
                <div class="form-group">
                    <label for="Imagen">Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
                    <input type="submit" value="Añadir" class="btn btn-lg btn-primary">
            </form>
        </div>
    </div>
@endsection
