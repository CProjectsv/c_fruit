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
            'jumlah'=> $this->request -> getPost('jumlah_komoditi')
            ];

            //insert data 
            $success = $this->model->addDataProduct($data);
            if ($success) {
                session()->setFlashdata('message','Ditambahkan');
                return redirect()->to(base_url('/product'));
            }
    }

    public function DeleteProduct($id){
        $success = $this->model->deleteProductById($id);
            if ($success) {
                session()->setFlashdata('message','Dihapus');
                return redirect()->to(base_url('/product'));
            }
        
    }
    public function editProduct()
    {

            $id_komoditi = $this->request->getPost('id_komoditi');
            $data = [
            'id_komoditi' => $id_komoditi,
            'nama_komoditi' => $this->request->getPost('nama_komoditi'),
            'jumlah'=> $this->request -> getPost('jumlah_komoditi')
            ];

            //update data 
            $success = $this->model->editProductDataById($data, $id_komoditi);
            if ($success) {
                session()->setFlashdata('message','Diubah');
                return redirect()->to(base_url('/product'));
            }
    }

    public function GetProductChart(){

        $data = $this->model->GetProductChart();
        if ($data) {
            $c = array( "caption"=> "Pemasukan Komoditas",
            "subCaption"=>"Komoditas Pangan",
            "xAxisName"=>"Nama Komoditi",
            "yAxisName"=>"Jumlah",
            "theme"=>"fint");

            $gab = array("chart"=>$c, "data"=>$data);   
            $j = json_encode($gab);
            echo $j;
        }
        
    }
        
        

        

}