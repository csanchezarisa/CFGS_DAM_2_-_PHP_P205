@extends('master.master')

@section('title')
    Insertar coche nuevo
@endsection

@section('active-insertarcoche')
    active
@endsection

@section('header')
    <h1>Insertar coche nuevo</h1>
    <h2>Rellena el siguiente formulario para introducir un nuevo coche</h2>
@endsection

@section('content')

    @if (session('errorCreating'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>¡Error!</strong> No se ha podido crear el coche. Pruébalo de nuevo.
                </div>
            </div>
        </div>   
    @endif
    
    <div class="row">
        <div class="col-sm-12">
            <form action="/coche" method="post" class="was-validated" style="width: 100%;">

                @csrf

                <div class="form-group">
                    <label for="creador">Creador:</label>
                    <input type="text" name="make" id="make" class="form-control" placeholder="Creador" required />
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <textarea name="model" id="model" class="form-control" placeholder="Modelo" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="producido">Producido en:</label>
                    <input type="date" name="produced_on" id="produced_on" class="form-control" required />
                </div>
                <button type="submit" class="btn btn-dark">
                    <i class="fas fa-plus-circle"></i>
                </button>
            </form>
        </div>
    </div>
    <script>
        window.onload = maxDate;

        function maxDate() {

            var hoy = new Date();
            var dd = String(hoy.getDate()).padStart(2, '0');
            var mm = String(hoy.getMonth() + 1).padStart(2, '0');
            var yyyy = hoy.getFullYear();

            hoy = yyyy + '-' + mm + '-' + dd;

            var dateInput = document.getElementById('produced_on');
            dateInput.setAttribute('max', hoy);
        }
    </script>
@endsection