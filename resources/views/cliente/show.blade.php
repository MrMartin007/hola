@extends('layouts.app')

@section('template_title')
    {{ $cliente->nombre_cliente ?? __('Show Cliente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show Cliente') }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}">{{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($cliente)
                            <div class="form-group">
                                <strong>Cuenta Cliente:</strong>
                                {{ $cliente->id }}
                            </div>
                            <div class="form-group">
                                <strong>Nombre Cliente:</strong>
                                {{ $cliente->nombre_cliente }}
                            </div>
                            <div class="form-group">
                                <strong>Apellido Cliente:</strong>
                                {{ $cliente->apellido_cliente }}
                            </div>
                            <div class="form-group">
                                <strong>Dpi Cliente:</strong>
                                {{ $cliente->dpi_cliente }}
                            </div>
                            <div class="form-group">
                                <strong>Direccion Cliente:</strong>
                                {{ $cliente->direccion_cliente }}
                            </div>
                            <div class="form-group">
                                <strong>Correo Cliente:</strong>
                                {{ $cliente->correo_cliente }}
                            </div>
                            <div class="form-group">
                                <strong>Telefono Cliente:</strong>
                                {{ $cliente->telefono_cliente }}
                            </div>
                            <div class="form-group">
                                <strong>Nit Cliente:</strong>
                                {{ $cliente->nit_cliente }}
                            </div>
                        @else
                            <p>{{ __('Cliente not found.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

