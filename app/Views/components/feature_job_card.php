<a href="#" class="nav-link text-dark">
	<div class="card" style="width: 20rem; border-radius: 20px;">
		<div class="card-body">
			<p class="card-title text-center"><?= esc($company_name) ?></p>
			<h3 class="card-text text-center my-5"><?= esc($job_position) ?></h3>
			<div class="d-flex flex-row justify-content-between align-items-end">
				<div class="">
					<p class="card-text mb-0"><?= esc($work_time) ?></p>
					<p class="card-text mb-0"><?= esc($salary) ?></p>
					<p class="card-text mb-0">Tag: <?= esc($tag) ?></p>
				</div>
				<div class="logo">
					<!-- <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
				</div>
			</div>
		</div>
	</div>
</a>