<?php

namespace app\Models;

use CodeIgniter\Model;

class M_Product extends Model
{
    protected $table = 'product';

    public function __construct()
    {
        $this->db= db_connect();
        $this->builder= $this->db->table($this->table);
    }

    public function getAllData()
    {
        return $this->db-> table('komoditi')->get()->getResultArray();
        
    }

    public function getProductChart()
    {
        $builder = $this->db->table('komoditi');
        $builder->select('nama_komoditi, jumlah');
        $result = $builder->get()->getResultArray();
        dd($result);
        return $result;
        
    }


    public function addDataProduct($data)
    {
        return $this->db->table('komoditi')->insert($data);
    }
    public function deleteProductById($id)
    {
        return $this->db->table('komoditi')->delete(['id_komoditi'=> $id]);
    }
    public function editProductDataById($data, $id_komoditi)
    {
        return $this->db->table('komoditi')->update($data,['id_komoditi'=>$id_komoditi]);
    }
}