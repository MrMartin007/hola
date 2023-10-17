@extends('adminlte::page')
@section('title', 'Dashboard')


@section('template_title')
    Asignar Servicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignar Servicio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asignar-servicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        <th>No de servicio</th>
										<th>Clientes </th>
                                        <th>tecnico </th>
                                        <th>estado </th>



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
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asignar-servicios.show',$asignarServicio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asignar-servicios.edit',$asignarServicio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
