@extends('master.master')

@section('title')
    Listado de coches disponibles
@endsection

@section('active-vercoches')
    active
@endsection

@section('header')
    <h1>Coches disponibles</h1>
    <h2>Listado con los coches disponibles</h2>
    <h5>Click para ver información, doble click para editar</h5>
@endsection

@section('content')
    <table class="table table-responsive-sm table-striped table-hover">
        <tr class="text-center">
            <th>#</th>
            <th>Creador</th>
            <th>Modelo</th>
            <th>Fecha producción</th>
        </tr>

        <!-- BUCLE QUE PINTA LES LINIES DE LA TAULA AMB LA INFORMACIÓ DELS COTXES -->
        @foreach ($coches as $coche)
            <tr onclick="cocheSeleccionado({{ $coche->id }})" ondblclick="editarCoche({{ $coche->id }})">
                <td>{{ $coche->id }}</td>
                <td>{{ $coche->make }}</td>
                <td>{{ $coche->model }}</td>
                <td>{{ $coche->produced_on }}</td>
            </tr>
        @endforeach

    </table>
    <script>
        function cocheSeleccionado(id) {
            window.location = "/coche/" + id;
        }

        function editarCoche(id) {
            window.location = "/coche/" + id + "/edit";
        }
    </script>
@endsection