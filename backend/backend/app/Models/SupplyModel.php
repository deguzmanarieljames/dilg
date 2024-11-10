<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplyModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'databasesupplies';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['image', 'date', 'supplier', 'item', 'description', 'unit_measurement', 'item_code', 'rec_quantity', 'rec_unitcost', 'rec_totalcost', 'issue_quantity', 'issue_unitcost', 'issue_totalcost', 'bal_quantity', 'bal_unitcost', 'bal_totalcost', 'no_days'];

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
}
