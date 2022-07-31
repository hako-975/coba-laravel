@extends('dashboard.layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Create New Post</h1>
	</div>
	<div class="col-lg-8 mb-5">
		<form action="/dashboard/posts" method="POST">
			@csrf
			<div class="mb-3">
				<label for="title" class="form-label">Title</label>
				<input value="{{ old('title') }}" autofocus required type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
				@error('title')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="slug" class="form-label">Slug</label>
				<input value="{{ old('slug') }}" required type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
				@error('slug')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="category" class="form-label">Category</label>
				<select class="form-select" id="category" name="category_id">
					@foreach ($categories as $category)
						@if (old('category_id') == $category->id)
							<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
						@else
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endif
					@endforeach
				</select>
			</div>
			<div class="mb-3">
				<label for="body">Body</label>
				@error('body')
					<p class="text-danger">
						{{ $message }}
					</p>
				@enderror
				<input id="body" type="hidden" name="body" value="{{ old('body') }}">
  				<trix-editor input="body"></trix-editor>
			</div>
			<button type="submit" class="btn btn-primary">Create Post</button>
		</form>
	</div>
	<script>
		const title = document.querySelector('#title');
		const slug = document.querySelector('#slug');

		title.addEventListener('change', function() {
			fetch('/dashboard/posts/checkSlug?title=' + title.value)
				.then(response => response.json())
				.then(data => slug.value = data.slug)
		});
	</script>
@endsection