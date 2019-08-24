<div class="table-responsive">
    <table class="table" id="clientsBookmarks-table">
        <thead>
            <tr>
                <th>Users Id</th>
        <th>Tourism Id</th>
        <th>Date</th>
        <th>Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientsBookmarks as $clientsBookmarks)
            <tr>
                <td>{!! $clientsBookmarks->users_id !!}</td>
            <td>{!! $clientsBookmarks->tourism_id !!}</td>
            <td>{!! $clientsBookmarks->date !!}</td>
            <td>{!! $clientsBookmarks->title !!}</td>
                <td>
                    {!! Form::open(['route' => ['clientsBookmarks.destroy', $clientsBookmarks->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('clientsBookmarks.show', [$clientsBookmarks->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('clientsBookmarks.edit', [$clientsBookmarks->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
