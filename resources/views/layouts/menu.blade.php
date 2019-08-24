
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

<li class="{{ Request::is('eventCats*') ? 'active' : '' }}">
    <a href="{!! route('eventCats.index') !!}"><i class="fa fa-edit"></i><span>Event Cats</span></a>
</li>

<li class="{{ Request::is('clientsUsers*') ? 'active' : '' }}">
    <a href="{!! route('clientsUsers.index') !!}"><i class="fa fa-edit"></i><span>Clients Users</span></a>
</li>

<li class="{{ Request::is('clientsProfiles*') ? 'active' : '' }}">
    <a href="{!! route('clientsProfiles.index') !!}"><i class="fa fa-edit"></i><span>Clients Profiles</span></a>
</li>

<li class="{{ Request::is('clientsScores*') ? 'active' : '' }}">
    <a href="{!! route('clientsScores.index') !!}"><i class="fa fa-edit"></i><span>Clients Scores</span></a>
</li>

<li class="{{ Request::is('clientsBookmarks*') ? 'active' : '' }}">
    <a href="{!! route('clientsBookmarks.index') !!}"><i class="fa fa-edit"></i><span>Clients Bookmarks</span></a>
</li>

<li class="{{ Request::is('tourismEvents*') ? 'active' : '' }}">
    <a href="{!! route('tourismEvents.index') !!}"><i class="fa fa-edit"></i><span>Tourism Events</span></a>
</li>

