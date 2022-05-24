<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('datadeinicio') }}
            {{ Form::text('datadeinicio', $atividade->datadeinicio, ['class' => 'form-control' . ($errors->has('datadeinicio') ? ' is-invalid' : ''), 'placeholder' => 'Datadeinicio']) }}
            {!! $errors->first('datadeinicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horadeinicio') }}
            {{ Form::text('horadeinicio', $atividade->horadeinicio, ['class' => 'form-control' . ($errors->has('horadeinicio') ? ' is-invalid' : ''), 'placeholder' => 'Horadeinicio']) }}
            {!! $errors->first('horadeinicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datafinal') }}
            {{ Form::text('datafinal', $atividade->datafinal, ['class' => 'form-control' . ($errors->has('datafinal') ? ' is-invalid' : ''), 'placeholder' => 'Datafinal']) }}
            {!! $errors->first('datafinal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horafinal') }}
            {{ Form::text('horafinal', $atividade->horafinal, ['class' => 'form-control' . ($errors->has('horafinal') ? ' is-invalid' : ''), 'placeholder' => 'Horafinal']) }}
            {!! $errors->first('horafinal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriçãoatividade') }}
            {{ Form::text('descriçãoatividade', $atividade->descriçãoatividade, ['class' => 'form-control' . ($errors->has('descriçãoatividade') ? ' is-invalid' : ''), 'placeholder' => 'Descriçãoatividade']) }}
            {!! $errors->first('descriçãoatividade', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>