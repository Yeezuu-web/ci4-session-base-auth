<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
<style>
.logo {
	width: 90px;
	height: 90px;
	background-color: gray;
	border-radius: 10px;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<!-- Start section header -->
<?= $this->section('header') ?>
<?= $this->include('templates/frontend/header') ?>
<!-- End Section header -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Feature Jobs -->
<section class="container d-flex flex-column py-5">
	<h3 class="mx-auto">Feature Jobs</h3>
	<div class="d-flex flex-row justify-content-around pt-5">
		<?php foreach ($feature_jobs as $feature_job) : ?>
		<?= view(
				'components/feature_job_card',
				[
					'company_name' => $feature_job->company_name,
					'job_position' => $feature_job->job_position,
					'salary' => $feature_job->salary,
					'work_time' => $feature_job->work_time,
					'image_url' => $feature_job->image_url,
					'tag' => 'Backend'
				]
			) ?>
		<?php endforeach; ?>
	</div>
</section>
<!-- End Feature Jobs -->

<!-- Recent Jobs -->
<section class="container d-flex flex-column py-5">
	<h3>Recent Jobs</h3>
	<div class="py-4">

		<?php foreach ($recent_jobs as $recent_job) : ?>
		<?= view(
				'components/recent_job_card',
				[
					'company_name' => $recent_job->company_name,
					'job_position' => $recent_job->job_position,
					'salary' => $recent_job->salary,
					'work_time' => $recent_job->work_time,
					'image_url' => $recent_job->image_url,
					'tag' => 'Backend'
				]
			) ?>
		<?php endforeach; ?>
	</div>
</section>
<!-- End Recent Jobs -->

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= view('templates/frontend/footer') ?>
<?= $this->endSection() ?>