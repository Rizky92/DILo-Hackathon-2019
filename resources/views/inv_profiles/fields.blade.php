<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Profile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc_profile', 'Desc Profile:') !!}
    {!! Form::text('desc_profile', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Owner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('owner', 'Owner:') !!}
    {!! Form::text('owner', null, ['class' => 'form-control']) !!}
</div>

<!-- Coords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coords', 'Coords:') !!}
    {!! Form::text('coords', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telp', 'Telp:') !!}
    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('invProfiles.index') !!}" class="btn btn-default">Cancel</a>
</div>
