<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Event Cats Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_event_cats', 'Id Event Cats:') !!}
    {!! Form::select('id_event_cats', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Holder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_holder', 'Event Holder:') !!}
    {!! Form::text('event_holder', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Holder Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_holder_tel', 'Event Holder Tel:') !!}
    {!! Form::text('event_holder_tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Holder Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_holder_email', 'Event Holder Email:') !!}
    {!! Form::email('event_holder_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_start', 'Date Start:') !!}
    {!! Form::date('date_start', null, ['class' => 'form-control','id'=>'date_start']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date_start').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Date End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_end', 'Date End:') !!}
    {!! Form::date('date_end', null, ['class' => 'form-control','id'=>'date_end']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date_end').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Time Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_start', 'Time Start:') !!}
    {!! Form::text('time_start', null, ['class' => 'form-control']) !!}
</div>

<!-- Time End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_end', 'Time End:') !!}
    {!! Form::text('time_end', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Isdays Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('isDays', 'Isdays:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isDays', 0) !!}
        {!! Form::checkbox('isDays', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Quota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quota', 'Quota:') !!}
    {!! Form::number('quota', null, ['class' => 'form-control']) !!}
</div>

<!-- Rundown Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rundown_id', 'Rundown Id:') !!}
    {!! Form::select('rundown_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Tourism Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tourism_id', 'Tourism Id:') !!}
    {!! Form::select('tourism_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tourismEvents.index') !!}" class="btn btn-default">Cancel</a>
</div>
