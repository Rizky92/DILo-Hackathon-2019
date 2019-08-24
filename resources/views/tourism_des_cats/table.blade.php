<div class="table-responsive">
    <table class="table" id="tourismDesCats-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tourismDesCats as $tourismDesCats)
            <tr>
                <td>{!! $tourismDesCats->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['tourismDesCats.destroy', $tourismDesCats->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tourismDesCats.show', [$tourismDesCats->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tourismDesCats.edit', [$tourismDesCats->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
