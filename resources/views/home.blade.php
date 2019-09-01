@extends('layouts.app')

@section('title','Dashboard')

@section('sidebar')
<li class="nav-item">
        <a class="nav-link " href="./examples/icons.html">
          <i class="ni ni-planet text-blue"></i> Icons
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./examples/maps.html">
          <i class="ni ni-pin-3 text-orange"></i> Maps
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./examples/profile.html">
          <i class="ni ni-single-02 text-yellow"></i> User profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./examples/tables.html">
          <i class="ni ni-bullet-list-67 text-red"></i> Tables
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./examples/login.html">
          <i class="ni ni-key-25 text-info"></i> Login
        </a>
      </li>
@endsection