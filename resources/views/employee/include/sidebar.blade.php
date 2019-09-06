@foreach (Auth::user()->userVAT->pluck('vat') as $vat)
<li class="nav-item">
    <a class="nav-link " href="{{route($vat->route)}}">
        <i class="fas fa-users text-green"></i> {{$vat->name}}
    </a>
</li>
@endforeach