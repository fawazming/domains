<?php
namespace App\Models;

use CodeIgniter\Model;

class Domains extends Model
{
    protected $table      = 'domains';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['domain','tld','owner'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowCallbacks = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
