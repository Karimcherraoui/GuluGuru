<?php

class Pages extends Controller{
    protected $productModel;
    public function __construct(){
        $this -> productModel = $this->model('Product');
    }

    public function index(){
        $products = $this->productModel->getProducts();
        $data = [
            'products' => $products
        ];
        $this->view('pages/index', $data);
    }

    public function product(){
        $products = $this->productModel->getProducts();
        $data = [
            'products' => $products
        ];
        
        $this->view('pages/product',$data);

    }


    public function login(){
        $this->view('pages/users/login');
    }
}
