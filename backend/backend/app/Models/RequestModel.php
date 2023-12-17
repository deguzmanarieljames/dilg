<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'requestppe';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['empfullname', 'particulars', 'description', 'status', 'created_at'];

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

    public function approvedRepord($data)
    {
        // your save logic here
        return $this->update($id, $data);
    }

    public function declineRecord($id, $data)
    {
        // your update logic here
        return $this->update($id, $data);
    }

    public function deleteRecord($id)
    {
        // your delete logic here
        return $this->delete($id);
    }

}
