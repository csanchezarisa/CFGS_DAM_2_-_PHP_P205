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
              <strong>¡Sin resultados!</strong> No existe ningún coche con id {{ $id }}. Prueba a crearlo.
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
    <div class="row">
      <div class="col-sm-6">
        <div class="card bg-light" style="width:100%">
          <div class="card-header text-center">
            <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/V-7AXXZHpgVr3J6QdJjt143czm0NJUEap9CPRpueHrfS8vBTrCtK3dw9eNMSsafFzW-Qo9_5gLzhx2xYfUCIL1BBlmLy4PsS5vIhO-hcR2kFdR7MWhd9MJ_rC2d2ej1wpRhtLqL1bSQirPtgCg" alt="Car image">
            <h4 class="card-title">Coche {{ $coche->id }}</h4>
          </div>
          <div class="card-body">
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