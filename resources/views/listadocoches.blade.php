@extends('master.master')

@section('title')
    Listado de coches disponibles
@endsection

@section('active-vercoches')
    active
@endsection

@section('header')
    <h1>Coches disponibles</h1>
@endsection

@section('content')
    <table class="table table-responsive-sm table-dark table-striped table-hover">
        <tr class="text-center">
            <th>#</th>
            <th>Creador</th>
            <th>Modelo</th>
            <th>Fecha producción</th>
        </tr>

        <!-- BUCLE QUE PINTA LES LINIES DE LA TAULA AMB LA INFORMACIÓ DELS COTXES -->
        @foreach ($coches as $coche)
            <tr onclick="cocheSeleccionado({{ $coche->id }})">
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
    </script>
@endsection