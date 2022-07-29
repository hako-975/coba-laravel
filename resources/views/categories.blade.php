@extends('layouts.main')

@section('container')
	<h1 class="mb-5">List Category</h1>
	<div class="container">
		<div class="row">
			@foreach ($categories as $category)
				<div class="col-md-4 mb-3">
					<a href="/posts?category={{ $category->slug }}">
						<div class="card bg-dark text-white">
							<img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
							<div class="p-0 card-img-overlay d-flex align-items-center">
								<h5 class="fs-3 text-center text-white card-title flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
@endsection