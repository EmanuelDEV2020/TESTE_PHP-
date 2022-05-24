@extends('layouts.app')

@section('template_title')
    {{ $atividade->name ?? 'Show Atividade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Atividade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('atividades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Datadeinicio:</strong>
                            {{ $atividade->datadeinicio }}
                        </div>
                        <div class="form-group">
                            <strong>Horadeinicio:</strong>
                            {{ $atividade->horadeinicio }}
                        </div>
                        <div class="form-group">
                            <strong>Datafinal:</strong>
                            {{ $atividade->datafinal }}
                        </div>
                        <div class="form-group">
                            <strong>Horafinal:</strong>
                            {{ $atividade->horafinal }}
                        </div>
                        <div class="form-group">
                            <strong>Descriçãoatividade:</strong>
                            {{ $atividade->descriçãoatividade }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
