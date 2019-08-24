<div class="table-responsive">
    <table class="table" id="tourismDests-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Desc</th>
        <th>Address</th>
        <th>Owner</th>
        <th>Id Des Cats</th>
        <th>Coords</th>
        <th>Email</th>
        <th>Tel</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tourismDests as $tourismDests)
            <tr>
                <td>{!! $tourismDests->name !!}</td>
            <td>{!! $tourismDests->desc !!}</td>
            <td>{!! $tourismDests->address !!}</td>
            <td>{!! $tourismDests->owner !!}</td>
            <td>{!! $tourismDests->id_des_cats !!}</td>
            <td>{!! $tourismDests->coords !!}</td>
            <td>{!! $tourismDests->email !!}</td>
            <td>{!! $tourismDests->tel !!}</td>
                <td>
                    {!! Form::open(['route' => ['tourismDests.destroy', $tourismDests->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tourismDests.show', [$tourismDests->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tourismDests.edit', [$tourismDests->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
