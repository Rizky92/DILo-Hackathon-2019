<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Isavailable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isAvailable', 'Isavailable:') !!}
    {!! Form::select('isAvailable', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_tel', 'Contact Tel:') !!}
    {!! Form::text('contact_tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_email', 'Contact Email:') !!}
    {!! Form::email('contact_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('services.index') !!}" class="btn btn-default">Cancel</a>
</div>
