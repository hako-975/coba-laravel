@extends('layouts.main')

@section('container')
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<main class="form-registration w-100 m-auto">
				<h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
				<form action="/register" method="POST">
					@csrf
					<div class="form-floating">
						<input value="{{ old('name') }}" required type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name">
						<label for="name">Name</label>
						@error('name')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="form-floating">
						<input value="{{ old('username') }}" required type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username">
						<label for="username">Username</label>
						@error('username')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="form-floating">
						<input value="{{ old('email') }}" required type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
						<label for="email">Email address</label>
						@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<div class="form-floating">
						<input required type="password" name="password" class="form-control @error('password') is-invalid @enderror rounded-bottom" id="password" placeholder="Password">
						<label for="password">Password</label>
						@error('password')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					<button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
				</form>
				<small class="d-block text-center mt-3"><a href="/login" class="text-dark text-decoration-none">Already have an account? <span class="text-primary text-decoration-underline">Login</span></a></small>
			</main>	
		</div>
	</div>
@endsection