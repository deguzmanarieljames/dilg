<?php

namespace App\Models;

use CodeIgniter\Model;

class DatabasePPETransfered extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'databaseppetransfered';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['entityname', 'classification', 'code', 'article', 'particulars', 'modelno', 'serialno', 'fulldescription', 'propertynumber', 'propertydate', 'icsnumber', 'jevnumber', 'rec_quantity', 'rec_unit', 'rec_unitcost', 'rec_totalcost', 'isstranadjamount', 'accimploss', 'adjustedcost', 'repair_nature', 'repair_amount', 'issue_itemno', 'issue_date', 'issue_quantity', 'issue_officeofficer', 'transfer_date', 'transfer_quantity', 'transfer_officeofficer', 'disposal_date', 'disposal_quantity', 'disposal_officeofficer', 'balancequantity', 'balanceamount', 'remarks', 'estimatedlife', 'issued_officer', 'issued_offposition', 'issued_date', 'acc_officer', 'acc_empposition', 'acc_date', 'itr_no', 'itr_date', 'rrsp_no', 'rrsp_date', 'reasonfortrans', 'reg_semiissuedserialno', 'reg_returned_qty', 'reg_returned_off', 'reg_reissued_qty', 'reg_reissued_off', 'reg_disposed_qty', 'reg_balance_quantity', 'reg_amount', 'reg_remarks', 'property_officer', 'approving_authority', 'image', 'imageverification', 'returned_image', 'transfered_image', 'disposed_image', 'date_returned', 'status', 'created_at'];

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
