<?php
$uri = service('uri');
?>

<nav class="navbar navbar-light bg-light">
	<div class="container d-flex flex-row">
		<a class="navbar-brand" href="#">
			<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
				class="d-inline-block align-text-top">
			CarrerHub
		</a>

		<ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex flex-row flex-1">
			<li class="nav-item px-4">
				<a class="nav-link <?= $uri->getSegment(1) === '' || $uri->getSegment(1) === 'home' ? 'active' : '' ?>"
					aria-current="page" href="<?= base_url('/') ?>">Home</a>
			</li>
			<li class="nav-item px-4">
				<a class="nav-link <?= $uri->getSegment(1) === 'about' ? 'active' : '' ?>"
					href="<?= base_url('/about') ?>">About</a>
			</li>
			<li class="nav-item px-4">
				<a class="nav-link <?= $uri->getSegment(1) === 'contact' ? 'active' : '' ?>" href="/contact">Contact</a>
			</li>
		</ul>

		<div>
			<a href="#" class="btn btn-outline-primary">Login</a>
			<a href="#" class="btn btn-primary">Register</a>
		</div>
	</div>
</nav>