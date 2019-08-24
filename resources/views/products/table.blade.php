<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Id Prod Cats</th>
        <th>Price</th>
        <th>Isavailable</th>
        <th>Contact Tel</th>
        <th>Contact Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $products)
            <tr>
                <td>{!! $products->name !!}</td>
            <td>{!! $products->id_prod_cats !!}</td>
            <td>{!! $products->price !!}</td>
            <td>{!! $products->isAvailable !!}</td>
            <td>{!! $products->contact_tel !!}</td>
            <td>{!! $products->contact_email !!}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('products.show', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('products.edit', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
