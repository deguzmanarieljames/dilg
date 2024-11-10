<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeSuppliesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'employeesupplies';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['item_code', 'fullname', 'issue_quantity', 'no_days', 'status', 'issued_date', 'end_date'];

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


    // public function getMonthlyIssueQuantity($itemCode) {
    //     $builder = $this->db->table($this->table);
    //     $builder->select("DATE_FORMAT(issued_date, '%Y-%m') AS month, SUM(issue_quantity) AS total_issued");
    //     $builder->where('item_code', $itemCode);
    //     $builder->groupBy('month');
    //     $builder->orderBy('month', 'ASC');
    //     return $builder->get()->getResultArray();
    // }
    

    public function getMonthlyIssueQuantity($itemCode) {
        $builder = $this->db->table($this->table);
        $builder->select("DATE_FORMAT(issued_date, '%Y-%m') AS month, CAST(SUM(issue_quantity) AS UNSIGNED) AS total_issued");
        $builder->where('item_code', $itemCode);
        $builder->groupBy('month');
        $builder->orderBy('month', 'ASC');
        
        // Fetch result as an array
        $result = $builder->get()->getResultArray();
    
        // Ensure total_issued is an integer in the result array
        foreach ($result as &$row) {
            $row['total_issued'] = (int) $row['total_issued']; // Cast to int
        }
    
        return $result;
    }


    




    public function delEmployeeSupplies($id)
    {
        // your delete logic here
        return $this->delete($id);
    }
}
