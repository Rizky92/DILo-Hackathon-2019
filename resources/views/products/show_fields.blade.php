<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $products->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $products->name !!}</p>
</div>

<!-- Id Prod Cats Field -->
<div class="form-group">
    {!! Form::label('id_prod_cats', 'Id Prod Cats:') !!}
    <p>{!! $products->id_prod_cats !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $products->price !!}</p>
</div>

<!-- Isavailable Field -->
<div class="form-group">
    {!! Form::label('isAvailable', 'Isavailable:') !!}
    <p>{!! $products->isAvailable !!}</p>
</div>

<!-- Contact Tel Field -->
<div class="form-group">
    {!! Form::label('contact_tel', 'Contact Tel:') !!}
    <p>{!! $products->contact_tel !!}</p>
</div>

<!-- Contact Email Field -->
<div class="form-group">
    {!! Form::label('contact_email', 'Contact Email:') !!}
    <p>{!! $products->contact_email !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $products->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $products->updated_at !!}</p>
</div>

