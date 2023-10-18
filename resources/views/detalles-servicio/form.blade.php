<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('detalle_servicio') }}
            {{ Form::text('detalle_servicio', $detallesServicio->detalle_servicio, ['class' => 'form-control' . ($errors->has('detalle_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Detalle Servicio']) }}
            {!! $errors->first('detalle_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servicios_id') }}
            {{ Form::text('servicios_id', $detallesServicio->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
            {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>