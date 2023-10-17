@extends('layouts.app')

@section('template_title')
    {{ $asignarServicio->name ?? "{{ __('Show') Asignar Servicio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asignar Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignar-servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Detalle Servicio:</strong>
                            {{ $asignarServicio->detalle_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $asignarServicio->total }}
                        </div>
                        <div class="form-group">
                            <strong>Clientes Id:</strong>
                            {{ $asignarServicio->clientes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estados Id:</strong>
                            {{ $asignarServicio->estados_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tecnicos Id:</strong>
                            {{ $asignarServicio->tecnicos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $asignarServicio->servicios_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
