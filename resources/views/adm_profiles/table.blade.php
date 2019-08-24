<div class="table-responsive">
    <table class="table" id="admProfiles-table">
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
        @foreach($admProfiles as $admProfiles)
            <tr>
                <td>{!! $admProfiles->nama !!}</td>
            <td>{!! $admProfiles->tgl_lahir !!}</td>
            <td>{!! $admProfiles->jk !!}</td>
            <td>{!! $admProfiles->alamat !!}</td>
            <td>{!! $admProfiles->no_hp !!}</td>
            <td>{!! $admProfiles->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['admProfiles.destroy', $admProfiles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('admProfiles.show', [$admProfiles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('admProfiles.edit', [$admProfiles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
