<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Target Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target', 'Target:') !!}
    {!! Form::number('target', null, ['class' => 'form-control']) !!}
</div>

<!-- Achieved Field -->
<div class="form-group col-sm-6">
    {!! Form::label('achieved', 'Achieved:') !!}
    {!! Form::number('achieved', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Of Reservations Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_of_reservations', 'Num Of Reservations:') !!}
    {!! Form::number('num_of_reservations', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Of Visitors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_of_visitors', 'Num Of Visitors:') !!}
    {!! Form::number('num_of_visitors', null, ['class' => 'form-control']) !!}
</div>

<!-- Income Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('income_amount', 'Income Amount:') !!}
    {!! Form::number('income_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Costs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costs', 'Costs:') !!}
    {!! Form::number('costs', null, ['class' => 'form-control']) !!}
</div>

<!-- Profit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profit', 'Profit:') !!}
    {!! Form::number('profit', null, ['class' => 'form-control']) !!}
</div>

<!-- Margin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('margin', 'Margin:') !!}
    {!! Form::text('margin', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('reports.index') !!}" class="btn btn-default">Cancel</a>
</div>
