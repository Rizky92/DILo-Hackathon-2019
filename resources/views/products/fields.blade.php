<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Prod Cats Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_prod_cats', 'Id Prod Cats:') !!}
    {!! Form::select('id_prod_cats', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Isavailable Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('isAvailable', 'Isavailable:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isAvailable', 0) !!}
        {!! Form::checkbox('isAvailable', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Contact Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_tel', 'Contact Tel:') !!}
    {!! Form::text('contact_tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_email', 'Contact Email:') !!}
    {!! Form::text('contact_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
