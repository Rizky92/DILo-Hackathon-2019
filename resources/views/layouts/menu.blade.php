
<li class="{{ Request::is('admProfiles*') ? 'active' : '' }}">
    <a href="{!! route('admProfiles.index') !!}"><i class="fa fa-edit"></i><span>Adm Profiles</span></a>
</li>


<li class="{{ Request::is('tourismDesCats*') ? 'active' : '' }}">
    <a href="{!! route('tourismDesCats.index') !!}"><i class="fa fa-edit"></i><span>Tourism Des Cats</span></a>
</li>

<li class="{{ Request::is('tourismDests*') ? 'active' : '' }}">
    <a href="{!! route('tourismDests.index') !!}"><i class="fa fa-edit"></i><span>Tourism Dests</span></a>
</li>

<li class="{{ Request::is('prodCats*') ? 'active' : '' }}">
    <a href="{!! route('prodCats.index') !!}"><i class="fa fa-edit"></i><span>Prod Cats</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>




<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{!! route('employees.index') !!}"><i class="fa fa-edit"></i><span>Employees</span></a>
</li>

<li class="{{ Request::is('reports*') ? 'active' : '' }}">
    <a href="{!! route('reports.index') !!}"><i class="fa fa-edit"></i><span>Reports</span></a>
</li>

