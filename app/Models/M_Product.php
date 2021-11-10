<?php

namespace app\Models;

use CodeIgniter\Model;

class M_Product extends Model
{

    public function __construct()
    {
        $this->db= db_connect();
    }

    public function getAllData()
    {
        return $this->db-> table('komoditi')->get()->getResultArray();
        
    }

    public function addDataProduct($data)
    {
        return $this->db->table('komoditi')->insert($data);
    }
    public function deleteProductById($id)
    {
        return $this->db->table('komoditi')->delete(['id_komoditi'=> $id]);
    }
}
