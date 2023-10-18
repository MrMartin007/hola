@extends('layouts.app')

@section('template_title')
    {{ $detallesServicio->name ?? "{{ __('Show') Detalles Servicio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalles Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles-servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Detalle Servicio:</strong>
                            {{ $detallesServicio->detalle_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $detallesServicio->servicios_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
