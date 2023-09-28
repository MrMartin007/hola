<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_servicio') }}
            {{ Form::text('nombre_servicio', $servicio->nombre_servicio, ['class' => 'form-control' . ($errors->has('nombre_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Servicio']) }}
            {!! $errors->first('nombre_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_servicio') }}
            {{ Form::text('descripcion_servicio', $servicio->descripcion_servicio, ['class' => 'form-control' . ($errors->has('descripcion_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Servicio']) }}
            {!! $errors->first('descripcion_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>