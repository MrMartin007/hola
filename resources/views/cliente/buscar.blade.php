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
                                    <label for="search">Buscar por Nombre, DPI o Numero de Cuenta</label>
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
                                <h4>Resultados de la búsqueda:</h4>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre del Cliente</th>
                                        <th>DPI del Cliente</th>
                                        <!-- Agrega más columnas según tus necesidades -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->id }}</td>
                                            <td>{{ $cliente->nombre_cliente }}</td>
                                            <td>{{ $cliente->dpi_cliente }}</td>
                                            <!-- Agrega más columnas según tus necesidades -->
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No se encontraron resultados.</p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
