<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Tgl Lahir</th>
        <th>Jk</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employees)
            <tr>
                <td>{!! $employees->nama !!}</td>
            <td>{!! $employees->tgl_lahir !!}</td>
            <td>{!! $employees->jk !!}</td>
            <td>{!! $employees->alamat !!}</td>
            <td>{!! $employees->no_hp !!}</td>
            <td>{!! $employees->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['employees.destroy', $employees->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('employees.show', [$employees->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('employees.edit', [$employees->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
