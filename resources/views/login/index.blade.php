@extends('layouts.main')

@section('container')
	<div class="row justify-content-center">
		<div class="col-md-4">
			@if (session()->has('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>{{ session('success') }}</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif

			@if (session()->has('error'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>{{ session('error') }}</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif

			<main class="form-signin w-100 m-auto">
				<h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
				<form action="/login" method="POST">
					@csrf
					<div class="form-floating">
						<input value="{{ old('email') }}" autofocus required type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
						<label for="email">Email address</label>
						@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="form-floating">
						<input required type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
						<label for="password">Password</label>
						@error('password')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
				</form>
				<small class="d-block text-center mt-3"><a href="/register" class="text-dark text-decoration-none">Don't have an account? <span class="text-primary text-decoration-underline">Register Now!</span></a></small>
			</main>	
		</div>
	</div>
@endsection