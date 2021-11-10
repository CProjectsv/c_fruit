<?php
namespace App\Controllers;

use App\Models\M_Product;

class Product extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Product;
    }

    public function index()
    {

        $data = [
            'judul' => 'Data Produk',
            'product' =>$this->model-> getAllData()
        ];

        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('product/index'); 
        echo view('templates/v_footer');

    }
    public function AddProduct()
    {


            $data = [
            'id_komoditi' => '',
            'nama_komoditi' => $this->request->getPost('nama_komoditi'),
            'jumlah'=> $this->request -> getPost('jumlah')
            ];

            //insert data 
            $success = $this->model->addDataProduct($data);
            if ($success) {
            session()->setFlashdata('message','Ditambahkan');
            return redirect()->to(base_url('product'));
            }
    }
        
        

        

}