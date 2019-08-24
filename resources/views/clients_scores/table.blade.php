<div class="table-responsive">
    <table class="table" id="clientsScores-table">
        <thead>
            <tr>
                <th>Users Id</th>
        <th>Total Points</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientsScores as $clientsScores)
            <tr>
                <td>{!! $clientsScores->users_id !!}</td>
            <td>{!! $clientsScores->total_points !!}</td>
                <td>
                    {!! Form::open(['route' => ['clientsScores.destroy', $clientsScores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('clientsScores.show', [$clientsScores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('clientsScores.edit', [$clientsScores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
