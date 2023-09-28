<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_tecnico') }}
            {{ Form::text('nombre_tecnico', $tecnico->nombre_tecnico, ['class' => 'form-control' . ($errors->has('nombre_tecnico') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tecnico']) }}
            {!! $errors->first('nombre_tecnico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_tecnico') }}
            {{ Form::text('apellido_tecnico', $tecnico->apellido_tecnico, ['class' => 'form-control' . ($errors->has('apellido_tecnico') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Tecnico']) }}
            {!! $errors->first('apellido_tecnico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion_tecnico') }}
            {{ Form::text('direccion_tecnico', $tecnico->direccion_tecnico, ['class' => 'form-control' . ($errors->has('direccion_tecnico') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Tecnico']) }}
            {!! $errors->first('direccion_tecnico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo_tecnico') }}
            {{ Form::text('correo_tecnico', $tecnico->correo_tecnico, ['class' => 'form-control' . ($errors->has('correo_tecnico') ? ' is-invalid' : ''), 'placeholder' => 'Correo Tecnico']) }}
            {!! $errors->first('correo_tecnico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono_tecnico') }}
            {{ Form::text('telefono_tecnico', $tecnico->telefono_tecnico, ['class' => 'form-control' . ($errors->has('telefono_tecnico') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Tecnico']) }}
            {!! $errors->first('telefono_tecnico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>