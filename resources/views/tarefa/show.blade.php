@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Consulta: {{ $tarefa->tarefa }}</div>

                <div class="card-body">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label class="form-label">Data Agendada:</label>
                            <input type="date" class="form-control" value="{{ $tarefa->data_limite_conclusao }}">
                        </div>
                    </fieldset>
                    <a href="{{ route('tarefa.create') }}" class="btn btn-primary">Cadastrar Outra</a>
                    <a href="{{ route('tarefa.index') }}" class="btn btn-primary">Visualizar Consultas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection