@extends('master.master')
@if (isset($error))
    
    @section('title')
        Editar coche {{ $id }}
    @endsection

    @section('header')
        <h1>No se puede editar el coche {{ $id }}</h1>
        <h2>No se ha encontrado el coche</h2>
    @endsection

    @section('content')
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger fade show">
                    <strong>¡No se puede editar!</strong> No existe ningún coche con id <strong>{{ $id }}</strong>. <a href="/coche/create" class="alert-link">Prueba a crearlo.</a>
                </div>
            </div>
        </div>
    @endsection

@else
    
    @section('title')
        Editar coche {{ $coche->id }}
    @endsection

    @section('header')
        <h1>Editar coche {{ $coche->id }}</h1>
        <h2>Rellena el formulario para editar los datos del coche</h2>
    @endsection

    @section('content')
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
                  </div>
              </div>
            </div>
          </div>
        <div class="col-sm-6">
            <form action="/coche/{{ $coche->id }}" method="POST" class="was-validated" style="width: 100%">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="creador">Creador:</label>
                    <input type="text" name="make" id="make" class="form-control" placeholder="Creador" value="{{ $coche->make }}" required />
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <textarea name="model" id="model" class="form-control" placeholder="Modelo" rows="3" required>{{ $coche->model }}</textarea>
                </div>
                <div class="form-group">
                    <label for="producido">Producido en:</label>
                    <input type="date" name="produced_on" id="produced_on" class="form-control" value="{{ $coche->produced_on }}" required />
                </div>

                <div class="row">
                    <div class="col text-left">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <div class="col text-right">

                        <!-- BOTÓ QUE OBRE EL MODAL DE CONFIRMACIÓ -->
                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </div>

      <!-- MODAL DE CONFIRMACIÓ -->
      <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Eliminar coche {{ $coche->id }}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              ¿Estás seguro que quieres eliminar el coche <strong>{{ $coche->model }}</strong>, con id <strong>{{ $coche->id }}</strong>?
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
                <form action="/coche/{{ $coche->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
      
          </div>
        </div>
      </div>
    @endsection

@endif