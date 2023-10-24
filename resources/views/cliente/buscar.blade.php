@extends('adminlte::page')
@section('title', 'Dashboard')

@section('template_title')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h3>Buscar Cliente</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('resultados') }}">
                            <div class="form-row">
                                <div class="col-md-7 mb-4">
                                    <label for="search">Buscar por Nombre, o numero de DPI</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="Ingrese Nombre, DPI o Numero de Cuenta">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary  offset-3"  >
                                <i class="fas fa-plus">  Buscar</i></button>

                        </form>

                    </div>



                    @if(isset($clientes))
                        <div class="container mt-4">
                            @if($clientes->count() > 0)
                                <h4>Cliente:</h4>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Nombre del Cliente</th>
                                        <th>Direccion del Cliente</th>
                                        <th>DPI del Cliente</th>
                                        <th>Telefono del Cliente</th>
                                        <!-- Agrega más columnas según tus necesidades -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clientes as $cliente)
                                        <tr>

                                            <td>{{ $cliente->nombre_cliente }}</td>
                                            <td>{{ $cliente->direccion_cliente }}</td>
                                            <td>{{ $cliente->dpi_cliente }}</td>
                                            <td>{{ $cliente->telefono_cliente }}</td>
                                            <!-- Agrega más columnas según tus necesidades -->
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @if($asignar->count() > 0)
                                    <h4>Servicios Asignados:</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>No. de Servicios</th>
                                            <th>Servicios Asociados</th>
                                            <th>Tecnico Asignado</th>
                                            <th>Estado de Servicio</th>

                                            <!-- Agrega más columnas según tus necesidades -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($asignar as $asignars)
                                            <tr>
                                                <td>{{ $asignars->id }}</td>
                                                <td>{{ $asignars->servicios_id }}</td>
                                                <td>
                                                    @if(isset($asignars->tecnico))
                                                        {{ $asignars->tecnico->nombre_tecnico }}
                                                    @else
                                                        No tiene técnico asignado
                                                    @endif
                                                </td>
                                                <td>{{ $asignars->estado->estado }}</td>



                                                <!-- Agrega más detalles de la multa según tus necesidades -->
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>No se encontraron Servicios asociadas a este Cliente.</p>
                                @endif
                            @else
                                <p>No se encontraron resultados para la búsqueda.</p>
                            @endif
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
