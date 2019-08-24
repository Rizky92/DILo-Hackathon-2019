<div class="table-responsive">
    <table class="table" id="reports-table">
        <thead>
            <tr>
                <th>Date</th>
        <th>Target</th>
        <th>Achieved</th>
        <th>Num Of Reservations</th>
        <th>Num Of Visitors</th>
        <th>Income Amount</th>
        <th>Costs</th>
        <th>Profit</th>
        <th>Margin</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reports as $reports)
            <tr>
                <td>{!! $reports->date !!}</td>
            <td>{!! $reports->target !!}</td>
            <td>{!! $reports->achieved !!}</td>
            <td>{!! $reports->num_of_reservations !!}</td>
            <td>{!! $reports->num_of_visitors !!}</td>
            <td>{!! $reports->income_amount !!}</td>
            <td>{!! $reports->costs !!}</td>
            <td>{!! $reports->profit !!}</td>
            <td>{!! $reports->margin !!}</td>
                <td>
                    {!! Form::open(['route' => ['reports.destroy', $reports->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('reports.show', [$reports->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('reports.edit', [$reports->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
