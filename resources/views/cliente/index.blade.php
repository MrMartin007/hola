@extends('adminlte::page')
@section('title', 'Dashboard')
@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No. Cuenta</th> <!-- Agregar la clase small para el encabezado -->
                                        <th >Nombre</th>
                                        <th>Apellido</th>
                                        <th >Dpi</th>
                                        <th >Direccion</th>
                                        <th >Correo</th>
                                        <th >Telefono</th>
                                        <th >Nit</th>
                                        <th >  Accion </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td class="small">{{ $cliente->id }}</td> <!-- Agregar la clase small para las celdas de la tabla -->
                                            <td class="small">{{ $cliente->nombre_cliente }}</td>
                                            <td class="small">{{ $cliente->apellido_cliente }}</td>
                                            <td class="small">{{ $cliente->dpi_cliente }}</td>
                                            <td class="small">{{ $cliente->direccion_cliente }}</td>
                                            <td class="small">{{ $cliente->correo_cliente }}</td>
                                            <td class="small">{{ $cliente->telefono_cliente }}</td>
                                            <td class="small">{{ $cliente->nit_cliente }}</td>
                                            <td >
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
