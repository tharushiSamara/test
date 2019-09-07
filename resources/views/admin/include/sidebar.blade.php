<li class="nav-item">
    <a class="nav-link " href="{{route('manage-employee')}}">
        <i class="fas fa-users text-green"></i> {{__('menu.Employees')}}
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#navbar-vats" data-toggle="collapse" role="button" aria-expanded="false"
        aria-controls="navbar-vats">
        <i class="ni ni-align-left-2 text-default"></i>
        <span class="nav-link-text">VAT Categories</span>
    </a>
    <div class="collapse" id="navbar-vats">
        <ul class="nav nav-sm flex-column">
            @foreach (App\Vat::all() as $vat)
            <li class="nav-item">
                <a href="{{route($vat->route)}}" class="nav-link">{{$vat->name}}</a>
            </li>
            @endforeach

        </ul>
    </div>
</li>