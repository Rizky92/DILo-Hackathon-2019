<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::select('users_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Total Points Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_points', 'Total Points:') !!}
    {!! Form::number('total_points', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientsScores.index') !!}" class="btn btn-default">Cancel</a>
</div>
