<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'inventoryppe';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['entityname', 'classification', 'code', 'article', 'particulars', 'modelno', 'serialno', 'fulldescription', 'quantity', 'arrival', 'status', 'image', 'created_at'];

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


    public function saveInventory($data)
    {
        // your save logic here
        return $this->insert($data);
    }

    public function updateInventory($id, $data)
    {
        // your update logic here
        return $this->update($id, $data);
    }

    public function delInventory($id)
    {
        // your delete logic here
        return $this->delete($id);
    }

    public function getInventory()
    {
        // your get logic here
        return $this->findAll();
    }

        public function isNewRecordAdded()
    {
        // Get the latest record from the table
        $latestRecord = $this->orderBy('created_at', 'desc')
                             ->first();

        if ($latestRecord) {
            // Here you can compare the latest record's creation time with a known time
            // For example, you might have a timestamp indicating the last check
            $lastCheckedTime = strtotime('2024-01-01 00:00:00');

            // Convert the latest record's creation time to a timestamp
            $latestRecordTime = strtotime($latestRecord['created_at']);

            // If the latest record is newer than the last check, consider it new
            if ($latestRecordTime > $lastCheckedTime) {
                return true;
            }
        }

        return false;
    }
}
