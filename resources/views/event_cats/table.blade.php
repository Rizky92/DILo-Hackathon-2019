<div class="table-responsive">
    <table class="table" id="eventCats-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($eventCats as $eventCats)
            <tr>
                <td>{!! $eventCats->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['eventCats.destroy', $eventCats->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('eventCats.show', [$eventCats->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('eventCats.edit', [$eventCats->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
