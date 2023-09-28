@extends('layouts.app')

@section('template_title')
    {{ $tecnico->name ?? "{{ __('Show') Tecnico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tecnico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tecnicos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Tecnico:</strong>
                            {{ $tecnico->nombre_tecnico }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Tecnico:</strong>
                            {{ $tecnico->apellido_tecnico }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Tecnico:</strong>
                            {{ $tecnico->direccion_tecnico }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Tecnico:</strong>
                            {{ $tecnico->correo_tecnico }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Tecnico:</strong>
                            {{ $tecnico->telefono_tecnico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
