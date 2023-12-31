<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-row">
            <div class="col-md-5 mb-4 ">
            {{ Form::label('nombre_cliente') }}
            {{ Form::text('nombre_cliente', $cliente->nombre_cliente, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-md-5 mb-4 ">
            {{ Form::label('apellido_cliente') }}
            {{ Form::text('apellido_cliente', $cliente->apellido_cliente, ['class' => 'form-control' . ($errors->has('apellido_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Cliente']) }}
            {!! $errors->first('apellido_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
            <div class="form-row">
                <div class="col-md-5 mb-4 ">
            {{ Form::label('dpi_cliente') }}
            {{ Form::number('dpi_cliente', $cliente->dpi_cliente, ['class' => 'form-control' . ($errors->has('dpi_cliente') ? ' is-invalid' : ''), 'placeholder' => 'dpi Cliente']) }}
            {!! $errors->first('dpi_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
                <div class="col-md-5 mb-4 ">
            {{ Form::label('direccion_cliente') }}
            {{ Form::text('direccion_cliente', $cliente->direccion_cliente, ['class' => 'form-control' . ($errors->has('direccion_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Cliente']) }}
            {!! $errors->first('direccion_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="form-row">
        <div class="col-md-10 mb-4 ">
            {{ Form::label('correo_cliente') }}
            {{ Form::email('correo_cliente', $cliente->correo_cliente, ['class' => 'form-control' . ($errors->has('correo_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Correo Cliente']) }}
            {!! $errors->first('correo_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="form-row">
            <div class="col-md-5 mb-4 ">
            {{ Form::label('telefono_cliente') }}
            {{ Form::text('telefono_cliente', $cliente->telefono_cliente, ['class' => 'form-control' . ($errors->has('telefono_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Cliente']) }}
            {!! $errors->first('telefono_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-md-5 mb-4 ">
            {{ Form::label('nit_cliente') }}
            {{ Form::text('nit_cliente', $cliente->nit_cliente, ['class' => 'form-control' . ($errors->has('nit_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nit Cliente']) }}
            {!! $errors->first('nit_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
