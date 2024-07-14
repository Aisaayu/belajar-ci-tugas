<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'total_harga', 'alamat', 'ongkir', 'status', 'created_at', 'updated_at'
    ];
    public function getTransaksi()
    {
        return $this->findAll();
    }

    public function updateStatus($id, $status)
    {
        $this->update($id, ['status' => $status]);
    }
    

}
