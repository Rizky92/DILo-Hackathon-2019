<div class="table-responsive">
    <table class="table" id="invProfiles-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Desc Profile</th>
        <th>Address</th>
        <th>Owner</th>
        <th>Coords</th>
        <th>Email</th>
        <th>Telp</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invProfiles as $invProfiles)
            <tr>
                <td>{!! $invProfiles->name !!}</td>
            <td>{!! $invProfiles->desc_profile !!}</td>
            <td>{!! $invProfiles->address !!}</td>
            <td>{!! $invProfiles->owner !!}</td>
            <td>{!! $invProfiles->coords !!}</td>
            <td>{!! $invProfiles->email !!}</td>
            <td>{!! $invProfiles->telp !!}</td>
                <td>
                    {!! Form::open(['route' => ['invProfiles.destroy', $invProfiles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('invProfiles.show', [$invProfiles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('invProfiles.edit', [$invProfiles->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
