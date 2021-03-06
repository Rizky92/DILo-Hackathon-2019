<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $achievements->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $achievements->name !!}</p>
</div>

<!-- Length Field -->
<div class="form-group">
    {!! Form::label('length', 'Length:') !!}
    <p>{!! $achievements->length !!}</p>
</div>

<!-- Points Field -->
<div class="form-group">
    {!! Form::label('points', 'Points:') !!}
    <p>{!! $achievements->points !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $achievements->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $achievements->updated_at !!}</p>
</div>

