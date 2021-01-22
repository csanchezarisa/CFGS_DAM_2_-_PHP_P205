@extends('master.master')

@section('title')
    Concesionario Sánchez - Inicio
@endsection

@section('header')
  <h1>Concesionario Sánchez</h1>
  <h2>Donde tus sueños cobran vida</h2>
  <h6>y se cobran...</h6>
@endsection

@section('content')
    @if (session('deleted'))
      <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Éxito!</strong> Se ha eliminado el coche correctamente.
            </div>
        </div>
      </div>
    @endif

    @if (session('not_deleted'))
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Error!</strong> No se ha podido eliminar el coche. Pruébalo de nuevo.
          </div>
        </div>
      </div>
    @endif
    <div class="text-center">
      <img src="https://i.pinimg.com/originals/6e/c8/fa/6ec8fa35800b339aa060d70d67edcf03.gif" alt="Running Car" width="75%" />
    </div>
@endsection