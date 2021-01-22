@extends('master.master')

@if (isset($error))
    
  @section('title')
    Coche {{ $id }} no encontrado
  @endsection

  @section('header')
      <h1>Coche {{ $id }} no encontrado</h1>
  @endsection

  @section('content')
    <div class="row">
      <div class="col-sm-12">
          <div class="alert alert-danger fade show">
              <strong>¡Sin resultados!</strong> No existe ningún coche con id <strong>{{ $id }}</strong>. <a href="/coche/create" class="alert-link">Prueba a crearlo</a>.
          </div>
      </div>
    </div>
  @endsection

@else
    
  @section('title')
    Coche {{ $coche->id }}
  @endsection

  @section('header')
    <h1>Concesionario Sánchez</h1>
    <h2>Coche {{ $coche->id }}</h2>
  @endsection

  @section('content')
    @if (isset($updated))
        <div class="row">
          <div class="col-sm-12">

            @if ($updated)
              <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>¡Éxito!</strong> Se ha editado correctamente el coche.
              </div>    
            @else
              <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>¡Error!</strong> No se ha editar el coche. Pruébalo de nuevo.
              </div>
            @endif

          </div>
        </div>
    @endif

    <div class="row">
      <div class="col-sm-6">
        <div class="card bg-light" style="width:100%">
          <div class="card-header text-center">
            <img class="card-img-top" src="{{ URL::to('/') }}/images/coche.png" alt="Car image">
            <h4 class="card-title">Coche {{ $coche->id }}</h4>
          </div>
          <div class="card-body">
            <h5 class="card-text">{{ $coche->make }}</h5>
            <p class="card-text">{{ $coche->model }}</p>
          </div>
          <div class="card-footer">
            <p>Producido en: {{ $coche->produced_on }}</p>
              <div class="text-right">
                <a href="/coche/{{ $coche->id }}/edit" class="btn btn-success"><i class="fas fa-edit"></i></a>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <h4>Datos técnicos</h4>
        <ul>
          <li>
            <strong>#ID:</strong> {{ $coche->id }}
          </li>
          <li>
            <strong>Creador:</strong> {{ $coche->make }}
          </li>
          <li>
            <strong>Modelo:</strong> {{ $coche->model }}
          </li>
          <li>
            <strong>Producido en:</strong> {{ $coche->produced_on }}
          </li>
        </ul>
      </div>
    </div>
  @endsection

@endif