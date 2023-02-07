<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mascotas_id') }}
            {{ Form::text('mascotas_id', $mascota->mascotas_id, ['class' => 'form-control' . ($errors->has('mascotas_id') ? ' is-invalid' : ''), 'placeholder' => 'Mascotas Id']) }}
            {!! $errors->first('mascotas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idDueño') }}
            {{ Form::text('idDueño', $mascota->idDueño, ['class' => 'form-control' . ($errors->has('idDueño') ? ' is-invalid' : ''), 'placeholder' => 'Iddueño']) }}
            {!! $errors->first('idDueño', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $mascota->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $mascota->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>