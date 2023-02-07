<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idCita') }}
            {{ Form::text('idCita', $cita->idCita, ['class' => 'form-control' . ($errors->has('idCita') ? ' is-invalid' : ''), 'placeholder' => 'Idcita']) }}
            {!! $errors->first('idCita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.1/index.global.min.js'></script>
        <script>

            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
                });
                calendar.render();
            });

        </script>
            {{ Form::label('fechaHora') }}
            {{ Form::text('fechaHora', $cita->fechaHora, ['class' => 'form-control' . ($errors->has('fechaHora') ? ' is-invalid' : ''), 'placeholder' => 'Fechahora']) }}
            {!! $errors->first('fechaHora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mascota') }}
            {{ Form::text('mascota', $cita->mascota, ['class' => 'form-control' . ($errors->has('mascota') ? ' is-invalid' : ''), 'placeholder' => 'Mascota']) }}
            {!! $errors->first('mascota', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>