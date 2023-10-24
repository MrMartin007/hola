@extends('adminlte::page')
@section('title', 'Dashboard')


@section('template_title')
   Tecnicos Asignados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tecnicos Asignados') }}
                            </span>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-active">
                                <tr>
                                        <th>No de servicio</th>
										<th>Clientes </th>
                                        <th>Tecnico Asignado </th>
                                        <th>Estado </th>

                                        <th> </th>

                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignarServicios as $asignarServicio)
                                        <tr>

                                            <td>{{ $asignarServicio->id }}</td>
                                            <td>{{ $asignarServicio->cliente->nombre_cliente }}</td>
                                            <td>{{ $asignarServicio->tecnico->nombre_tecnico }}</td>
                                            <td>{{ $asignarServicio->estado->estado }}</td>
                                            <td>
                                                <form action="{{ route('asignar-servicios.destroy',$asignarServicio->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                            <td>
                                                @if ($asignarServicio->estados_id != 3)
                                                    <!-- Formulario para marcar como completado -->
                                                    <form action="{{ route('marcar-completado', $asignarServicio->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT') <!-- Usamos el método PUT para actualizar el estado -->
                                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> {{ __('Completado') }}</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asignarServicios->links() !!}
            </div>
        </div>
    </div>
@endsection
