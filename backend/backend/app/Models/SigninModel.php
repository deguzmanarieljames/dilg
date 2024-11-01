<?php

namespace App\Models;

use CodeIgniter\Model;

class SigninModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'signin';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'fullname', 'position', 'email', 'image', 'password', 'token', 'usertype', 'status', 'verify'];

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
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function updateVerifyColumn($token)
    {
        $user = $this->where('token', $token)->first();

        if ($user) {
            $data = ['verify' => 'Successful'];
            $this->update(['id' => $user['id']], $data);
            return true;
        } else {
            return false;
        }
    }
}
