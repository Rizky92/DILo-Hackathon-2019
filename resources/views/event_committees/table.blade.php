<div class="table-responsive">
    <table class="table" id="eventCommittees-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Role</th>
        <th>Tel</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($eventCommittees as $eventCommittee)
            <tr>
                <td>{!! $eventCommittee->name !!}</td>
            <td>{!! $eventCommittee->role !!}</td>
            <td>{!! $eventCommittee->tel !!}</td>
            <td>{!! $eventCommittee->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['eventCommittees.destroy', $eventCommittee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('eventCommittees.show', [$eventCommittee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('eventCommittees.edit', [$eventCommittee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
