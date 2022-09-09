<?php
namespace App\Models;

use CodeIgniter\Model;

class Siteconfig extends Model
{
    protected $table      = 'siteconfig';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['site_type','record_type','data'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowCallbacks = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
