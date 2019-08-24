<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Point Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('point_cost', 'Point Cost:') !!}
    {!! Form::number('point_cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rewards.index') !!}" class="btn btn-default">Cancel</a>
</div>
