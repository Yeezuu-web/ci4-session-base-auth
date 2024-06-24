<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table            = 'users';
	protected $primaryKey       = 'id';
	protected $useAutoIncrement = true;
	protected $returnType       = 'object';
	protected $useSoftDeletes   = false;
	protected $protectFields    = true;
	protected $allowedFields    = ['name', 'email', 'email_verified_at', 'password'];

	protected bool $allowEmptyInserts = false;
	protected bool $updateOnlyChanged = true;

	protected array $casts = [];
	protected array $castHandlers = [];

	// Dates
	protected $useTimestamps = false;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks = true;
	protected $beforeInsert   = ['hashPassword'];
	protected $afterInsert    = [];
	protected $beforeUpdate   = ['hashPassword'];
	protected $afterUpdate    = [];
	protected $beforeFind     = [];
	protected $afterFind      = [];
	protected $beforeDelete   = [];
	protected $afterDelete    = [];


	protected function hashPassword(array $data)
	{
		if (!isset($data['data']['password'])) return $data;

		$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

		return $data;
	}
}