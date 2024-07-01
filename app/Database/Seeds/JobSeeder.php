<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JobSeeder extends Seeder
{
	public function run()
	{
		$now = date('Y-m-d H:i:s');

		$data = [
			'job_position' => 'Software dev',
			'company_name' => 'CoodeHub',
			'work_time' => 'Part Time',
			'salary' => '$1500',
			'feature_job' => true,
			'image_url' => 'test.com/image',
			'created_at' => $now,
			'updated_at' => $now,
		];

		$this->db->table('jobs')->insert($data);
	}
}
