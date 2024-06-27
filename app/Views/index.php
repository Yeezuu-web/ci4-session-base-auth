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

<?= $this->section('header') ?>
<?= $this->include('templates/frontend/header') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Feature Jobs -->
<section class="container d-flex flex-column py-5">
	<h3 class="mx-auto">Feature Jobs</h3>
	<div class="d-flex flex-row justify-content-around pt-5">
		<?= view(
			'components/feature_job_card',
			[
				'company_name' => 'Careerhub.io',
				'job_position' => 'Software Developer',
				'salary' => '$1000-$1500',
				'work_time' => 'Part Time',
				'image_url' => 'test.com',
				'tag' => 'Backend'
			]
		) ?>
		<?= view(
			'components/feature_job_card',
			[
				'company_name' => 'ITE Company',
				'job_position' => 'Video Editor',
				'salary' => '$500-$800',
				'work_time' => 'Full Time',
				'image_url' => 'test.com',
				'tag' => 'Editor'
			]
		) ?>
		<?= view(
			'components/feature_job_card',
			[
				'company_name' => 'SC Media',
				'job_position' => 'Web Developer',
				'salary' => '$500-$1000',
				'work_time' => 'Full Time',
				'image_url' => 'test.com',
				'tag' => 'Backend'
			]
		) ?>
	</div>
</section>
<!-- End Feature Jobs -->

<!-- Recent Jobs -->
<section class="container d-flex flex-column py-5">
	<h3>Recent Jobs</h3>
	<div class="py-4">
		<?= view(
			'components/recent_job_card',
			[
				'company_name' => 'Careerhub.io',
				'job_position' => 'Software Developer',
				'salary' => '$1000-$1500',
				'work_time' => 'Part Time',
				'image_url' => 'test.com',
				'tag' => 'Backend'
			]
		) ?>
		<?= view(
			'components/recent_job_card',
			[
				'company_name' => 'ITE Company',
				'job_position' => 'Video Editor',
				'salary' => '$500-$800',
				'work_time' => 'Full Time',
				'image_url' => 'test.com',
				'tag' => 'Editor'
			]
		) ?>
		<?= view(
			'components/recent_job_card',
			[
				'company_name' => 'SC Media',
				'job_position' => 'Web Developer',
				'salary' => '$500-$1000',
				'work_time' => 'Full Time',
				'image_url' => 'test.com',
				'tag' => 'Backend'
			]
		) ?>
		<?= view(
			'components/recent_job_card',
			[

				'company_name' => 'Careerhub.io',
				'job_position' => 'Software Developer',
				'salary' => '$1000-$1500',
				'work_time' => 'Part Time',
				'image_url' => 'test.com',
				'tag' => 'Backend'
			]
		) ?>
		<?= view(
			'components/recent_job_card',
			[
				'company_name' => 'Careerhub.io',
				'job_position' => 'Software Developer',
				'salary' => '$1000-$1500',
				'work_time' => 'Part Time',
				'image_url' => 'test.com',
				'tag' => 'Backend'
			]
		) ?>
		<?= view(
			'components/recent_job_card',
			[
				'company_name' => 'Careerhub.io',
				'job_position' => 'Software Developer',
				'salary' => '$1000-$1500',
				'work_time' => 'Part Time',
				'image_url' => 'test.com',
				'tag' => 'Backend'
			]
		) ?>
	</div>
</section>
<!-- End Recent Jobs -->

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<?= view('templates/frontend/footer') ?>
<?= $this->endSection() ?>