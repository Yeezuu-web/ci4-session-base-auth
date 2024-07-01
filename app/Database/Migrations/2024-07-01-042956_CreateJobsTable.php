<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJobsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'job_position' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'company_name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'salary' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'work_time' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'image_url' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'feature_job' => [
				'type' => 'boolean',
				'default' => false
			],
			'created_at' => [
				'type' => 'datetime',
				'null' => true
			],
			'updated_at' => [
				'type' => 'datetime',
				'null' => true
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('jobs');
	}

	public function down()
	{
		$this->forge->dropTable('jobs');
	}
}
