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
						Name : {{$employee->name}}
					</h3>
					<div class="h5 font-weight-300">
						<i class="far fa-user"></i> Username : {{$employee->userName}}
					</div>

					<div>
						<i class="far fa-id-card"></i> NIC : {{$employee->nic}}
					</div>
					<hr class="my-4">
					<div class="h5 mt-4">
						<i class="fas fa-at"></i> E-Mail : <a href="#">{{$employee->email}}</a>
					</div>
					<div>
						<i class="fas fa-phone"></i> Phone No : {{$employee->phone}}
					</div>

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

				<form method="POST" action="{{route('register')}}">
					<h6 class="heading-small text-muted mb-4">Employee information</h6>

					@csrf
					<div class="form-group row pt-3">
						<label for="example-text-input" class="col-md-2 col-form-label form-control-label ">Name</label>
						<div class="col-md-10 ">
							<input class="form-control @error('name') is-invalid  @enderror" type="text"
								value="{{old('name')}}" id="name" name="name">
							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="example-search-input"
							class="col-md-2 col-form-label form-control-label">Username</label>
						<div class="col-md-10">
							<input class="form-control @error('userName') is-invalid @enderror" type="text"
								value="{{old('userName')}}" id="userName" name="userName">
							@error('userName')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="example-email-input"
							class="col-md-2 col-form-label form-control-label">Email</label>
						<div class="col-md-10">
							<input class="form-control @error('email') is-invalid @enderror" type="email"
								value="{{old('email')}}" id="email" name="email">
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="example-week-input" class="col-md-2 col-form-label form-control-label">NIC</label>
						<div class="col-md-10">
							<input class="form-control @error('nic') is-invalid @enderror" type="text"
								value="{{old('nic')}}" id="nic" name="nic">
							@error('nic')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="example-time-input" class="col-md-2 col-form-label form-control-label">Phone
							No</label>
						<div class="col-md-10">
							<input class="form-control @error('phone') is-invalid @enderror" type="text"
								value="{{old('phone')}}" id="phone" name="phone">
							@error('phone')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<div class="form-group">
						<input class=" btn btn-primary float-right" type="submit">
					</div>

				</form>
				<form>
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
									<input type="text" id="input-first-name"
										class="form-control form-control-alternative" placeholder="First name"
										value="Lucky">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group focused">
									<label class="form-control-label" for="input-last-name">Last name</label>
									<input type="text" id="input-last-name"
										class="form-control form-control-alternative" placeholder="Last name"
										value="Jesse">
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
									<input id="input-address" class="form-control form-control-alternative"
										placeholder="Home Address"
										value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group focused">
									<label class="form-control-label" for="input-city">City</label>
									<input type="text" id="input-city" class="form-control form-control-alternative"
										placeholder="City" value="New York">
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
									<input type="number" id="input-postal-code"
										class="form-control form-control-alternative" placeholder="Postal code">
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