@extends('layouts.app')

@section('title','Dashboard')

@section('sidebar')
@include('admin.include.sidebar')
@endsection

@section('header')

<div class="container-fluid d-flex align-items-center">
	<div class="row">
		<div class="col">
			<h1 class="display-2 text-white text-uppercase">{{$employee->name}}'s Profile</h1>
			<p class="text-white mt-0 mb-5">Role : <span class="text-uppercase">{{$employee->role}}</span></p>

		</div>
	</div>
</div>
@endsection

@section('pageContent')
<div class="row ">
	<div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
		<div class="card card-profile shadow">
			<div class="row justify-content-center">
				<div class="col-lg-3 order-lg-2">
					<div class="card-profile-image">
						<a href="#">
							<img src="{{asset('assets/img/theme/girl.png')}}" class="rounded-circle">
						</a>
					</div>
				</div>
			</div>

			<div class="card-body pt-0 pt-md-4">
				<div class="text-center pt-9">
					<h3>
						{{$employee->name}}
					</h3>
					<div class="h5 font-weight-300">
						<i class="far fa-user"></i> Username : {{$employee->userName}}
					</div>

					<div>
						{{$employee->nic}}
					</div>
					<hr class="my-4">
					<div class="h5 mt-4">
						<a href="#">{{$employee->email}}</a>
					</div>
					<div>{{$employee->phone}}</div>

				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-8 order-xl-1">
		<div class="card bg-secondary shadow">
			<div class="card-header bg-white border-0">
				<div class="row align-items-center">
					<div class="col-8">
						<h3 class="mb-0 text-uppercase">{{$employee->name}}'s details</h3>
					</div>
					<div class="col-4 text-right">
						<a href="#!" class="btn btn-sm
              @if($employee->status)
                btn-danger
              @else
                btn-success
							@endif">
							{!! $employee->status ? 'Block' : 'Unblock' !!}
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<form>
					<h6 class="heading-small text-muted mb-4">Employee information</h6>
					<div class="pl-lg-4">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group focused">
									<label class="form-control-label" for="input-username">Username</label>
									<input type="text" id="input-username" class="form-control form-control-alternative"
										placeholder="Username" value="lucky.jesse">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label" for="input-email">Email address</label>
									<input type="email" id="input-email" class="form-control form-control-alternative"
										placeholder="jesse@example.com">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group focused">
									<label class="form-control-label" for="input-first-name">First name</label>
									<input type="text" id="input-first-name" class="form-control form-control-alternative"
										placeholder="First name" value="Lucky">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group focused">
									<label class="form-control-label" for="input-last-name">Last name</label>
									<input type="text" id="input-last-name" class="form-control form-control-alternative"
										placeholder="Last name" value="Jesse">
								</div>
							</div>
						</div>
					</div>
					<hr class="my-4">
					<!-- Address -->
					<h6 class="heading-small text-muted mb-4">Contact information</h6>
					<div class="pl-lg-4">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group focused">
									<label class="form-control-label" for="input-address">Address</label>
									<input id="input-address" class="form-control form-control-alternative" placeholder="Home Address"
										value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group focused">
									<label class="form-control-label" for="input-city">City</label>
									<input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City"
										value="New York">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group focused">
									<label class="form-control-label" for="input-country">Country</label>
									<input type="text" id="input-country" class="form-control form-control-alternative"
										placeholder="Country" value="United States">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label class="form-control-label" for="input-country">Postal code</label>
									<input type="number" id="input-postal-code" class="form-control form-control-alternative"
										placeholder="Postal code">
								</div>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection