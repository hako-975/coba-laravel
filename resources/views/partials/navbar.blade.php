<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<div class="container">
		<a class="navbar-brand" href="/">Andri Blog</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link {{ ((isset($active) ? $active : '') === 'home') ? 'active' : '' }}" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ((isset($active) ? $active : '') === 'about') ? 'active' : '' }}" href="/about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ((isset($active) ? $active : '') === 'posts') ? 'active' : '' }}" href="/posts">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ((isset($active) ? $active : '') === 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link {{ ((isset($active) ? $active : '') === 'login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>