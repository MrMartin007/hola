<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="col-md-5 mb-4 ">
                {{ Form::label('Seleccione el Cliente') }}
                {{ Form::select('clientes_id', $clientes,$asignarServicio->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes']) }}
                {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            <div class="col-md-5 mb-4 ">
            {{ Form::label('Seleccionar Servicio asignar') }}
            {{ Form::select('servicios_id',$servicios, $asignarServicio->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicio Disponibles']) }}
            {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="form-row">
            <div class="col-md-5 mb-4 ">
            {{ Form::label('detalle_servicio') }}
            {{ Form::text('detalle_servicio', $asignarServicio->detalle_servicio, ['class' => 'form-control' . ($errors->has('detalle_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Detalle Servicio']) }}
            {!! $errors->first('detalle_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-md-5 mb-4 ">
            {{ Form::label('total') }}
            {{ Form::text('total', $asignarServicio->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="form-group">
            {{ Form::hidden('estados_id', 2) }}
            {!! $errors->first('estados_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
