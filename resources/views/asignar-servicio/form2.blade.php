<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="col-md-5 mb-4">
                {{ Form::label('Servicio Asignado') }}
                {{ Form::text('servicios_id', $asignarServicio->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicio', 'disabled' => 'disabled']) }}
                {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="col-md-5 mb-4">
                {{ Form::label('Detalle del servicio') }}
                {{ Form::select('detalles_servicios_id', $detallesServicio, $asignarServicio->detalles_servicios_id, ['class' => 'form-control' . ($errors->has('detalles_servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Detalle Servicio', 'disabled' => 'disabled']) }}
                {!! $errors->first('detalles_servicios_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-5 mb-4">
                {{ Form::label('total a pagar') }}
                {{ Form::select('detalles_servicios_id',$detallesServicios, $asignarServicio->detalles_servicios_id, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total', 'disabled' => 'disabled']) }}
                {!! $errors->first('detalles_servicios_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-md-5 mb-4">
                {{ Form::label('nombre del cliente') }}
                {{ Form::select('clientes_id', $clientes, $asignarServicio->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes', 'disabled' => 'disabled']) }}
                {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::hidden('estados_id', 1) }}
            {!! $errors->first('estados_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


            <div class="form-group">
                {{ Form::label('Seleccione el técnico para este servicio') }}
                {{ Form::select('tecnicos_id', $tecnico, $asignarServicio->tecnicos_id, [
                    'class' => 'form-control' . ($errors->has('tecnicos_id') ? ' is-invalid' : ''),
                    'placeholder' => 'Tecnicos',
                    'activated' => $asignarServicio->tecnicos_id == 'Tecnicos' ? 'disabled' : ''
                ]) }}
                {!! $errors->first('tecnicos_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
