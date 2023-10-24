@extends('adminlte::page')
@section('title', 'Dashboard')


@section('template_title')
    Servicios Registrados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __(' Servicios Registrados') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No de Servicio</th>
                                        <th>Cliente </th>
                                        <th>Servicio</th>
										<th>Detalle Servicio</th>
										<th>Total</th>




                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignarServicios as $asignarServicio)
                                        <tr>
                                            <td>{{ $asignarServicio->id }}</td>
                                            <td>{{ $asignarServicio->nombre_cliente }}</td>
                                            <td>{{ $asignarServicio->servicios_id }}</td>
                                            <td>{{ $asignarServicio->detalle_servicio}}</td>
                                            <td>{{ $asignarServicio->precio}}</td>

                                            <td>
                                                @if($asignarServicio->estados_id == 2)
                                                    <a class="btn btn-sm btn-primary " href="{{ route('edit2',$asignarServicio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Asignar Tecnico ') }}</a>                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route('asignar-servicios.destroy',$asignarServicio->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
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
