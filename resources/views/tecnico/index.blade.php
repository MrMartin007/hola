@extends('adminlte::page')
@section('title', 'Dashboard')

@section('template_title')
    Tecnicos Registrados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center; flex-direction: column;">
    <span id="card_title" style="font-size: 24px; font-weight: bold; margin: auto;">
        {{ __('Tecnicos Disponibles') }}
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
                            <table  class="table table-bordered">
                                <thead class="thead">
                                <tr>

										<th>Nombre Tecnico</th>
										<th>Apellido Tecnico</th>
										<th>Direccion Tecnico</th>
										<th>Correo Tecnico</th>
										<th>Telefono Tecnico</th>

                                        <th>Accion </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tecnicos as $tecnico)
                                        <tr>
											<td>{{ $tecnico->nombre_tecnico }}</td>
											<td>{{ $tecnico->apellido_tecnico }}</td>
											<td>{{ $tecnico->direccion_tecnico }}</td>
											<td>{{ $tecnico->correo_tecnico }}</td>
											<td>{{ $tecnico->telefono_tecnico }}</td>
                                            <td>
                                                <form action="{{ route('tecnicos.destroy',$tecnico->id) }}" method="POST">
                                                    <a class="btn btn-warning btn-sm" href="{{ route('tecnicos.edit',$tecnico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $tecnicos->links() !!}
            </div>
        </div>
    </div>
@endsection

