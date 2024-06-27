<a href="#" class="nav-link text-dark">
	<div class="card my-3" style="border-radius: 20px;">
		<div class="card-body d-flex">
			<div class="logo">

			</div>
			<div class="flex-grow-1 mx-4 d-flex flex-column">
				<p class="card-title"><?= esc($company_name) ?></p>
				<h3 class="card-title my-2"><?= esc($job_position) ?></h3>
				<div class="d-flex align-items-end">
					<p class="card-title"><?= esc($salary) ?></p>
					<p class="card-title mx-2">-</p>
					<p class="card-title"><?= esc($work_time) ?></p>
				</div>
			</div>
			<div class="card-text">
				<p>Tag: <?= esc($tag) ?></p>
			</div>
		</div>
	</div>
</a>