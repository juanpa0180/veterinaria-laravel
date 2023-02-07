@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? 'Show Cita' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcita:</strong>
                            {{ $cita->idCita }}
                        </div>
                        <div class="form-group">
                            <strong>Fechahora:</strong>
                            {{ $cita->fechaHora }}
                        </div>
                        <div class="form-group">
                            <strong>Mascota:</strong>
                            {{ $cita->mascota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
