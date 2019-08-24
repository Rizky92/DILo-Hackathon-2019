<div class="table-responsive">
    <table class="table" id="clientsUsers-table">
        <thead>
            <tr>
                <th>Username</th>
        <th>Password</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientsUsers as $clientsUsers)
            <tr>
                <td>{!! $clientsUsers->username !!}</td>
            <td>{!! $clientsUsers->password !!}</td>
            <td>{!! $clientsUsers->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['clientsUsers.destroy', $clientsUsers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('clientsUsers.show', [$clientsUsers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('clientsUsers.edit', [$clientsUsers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
