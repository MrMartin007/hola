@extends('layouts.app')

@section('template_title')
    Detalles Servicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalles Servicio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalles-servicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Detalle Servicio</th>
										<th>Servicios Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesServicios as $detallesServicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallesServicio->detalle_servicio }}</td>
											<td>{{ $detallesServicio->servicios_id }}</td>

                                            <td>
                                                <form action="{{ route('detalles-servicios.destroy',$detallesServicio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalles-servicios.show',$detallesServicio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalles-servicios.edit',$detallesServicio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detallesServicios->links() !!}
            </div>
        </div>
    </div>
@endsection
