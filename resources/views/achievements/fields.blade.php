<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('length', 'Length:') !!}
    {!! Form::text('length', null, ['class' => 'form-control']) !!}
</div>

<!-- Points Field -->
<div class="form-group col-sm-6">
    {!! Form::label('points', 'Points:') !!}
    {!! Form::number('points', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('achievements.index') !!}" class="btn btn-default">Cancel</a>
</div>
