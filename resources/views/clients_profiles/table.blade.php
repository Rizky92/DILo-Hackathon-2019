<div class="table-responsive">
    <table class="table" id="clientsProfiles-table">
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
        @foreach($clientsProfiles as $clientsProfiles)
            <tr>
                <td>{!! $clientsProfiles->nama !!}</td>
            <td>{!! $clientsProfiles->tgl_lahir !!}</td>
            <td>{!! $clientsProfiles->jk !!}</td>
            <td>{!! $clientsProfiles->alamat !!}</td>
            <td>{!! $clientsProfiles->no_hp !!}</td>
            <td>{!! $clientsProfiles->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['clientsProfiles.destroy', $clientsProfiles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('clientsProfiles.show', [$clientsProfiles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('clientsProfiles.edit', [$clientsProfiles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
