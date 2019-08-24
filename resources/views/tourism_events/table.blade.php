<div class="table-responsive">
    <table class="table" id="tourismEvents-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Id Event Cats</th>
        <th>Desc</th>
        <th>Event Holder</th>
        <th>Event Holder Tel</th>
        <th>Event Holder Email</th>
        <th>Date Start</th>
        <th>Date End</th>
        <th>Time Start</th>
        <th>Time End</th>
        <th>Isdays</th>
        <th>Quota</th>
        <th>Rundown Id</th>
        <th>Tourism Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tourismEvents as $tourismEvents)
            <tr>
                <td>{!! $tourismEvents->name !!}</td>
            <td>{!! $tourismEvents->id_event_cats !!}</td>
            <td>{!! $tourismEvents->desc !!}</td>
            <td>{!! $tourismEvents->event_holder !!}</td>
            <td>{!! $tourismEvents->event_holder_tel !!}</td>
            <td>{!! $tourismEvents->event_holder_email !!}</td>
            <td>{!! $tourismEvents->date_start !!}</td>
            <td>{!! $tourismEvents->date_end !!}</td>
            <td>{!! $tourismEvents->time_start !!}</td>
            <td>{!! $tourismEvents->time_end !!}</td>
            <td>{!! $tourismEvents->isDays !!}</td>
            <td>{!! $tourismEvents->quota !!}</td>
            <td>{!! $tourismEvents->rundown_id !!}</td>
            <td>{!! $tourismEvents->tourism_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['tourismEvents.destroy', $tourismEvents->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tourismEvents.show', [$tourismEvents->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tourismEvents.edit', [$tourismEvents->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
