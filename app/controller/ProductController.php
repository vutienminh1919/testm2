<?php

namespace App\controller;

use App\model\ProductModel;

class ProductController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();

    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once "app/view/product/list.php";
    }

    public function showFormCreate()
    {
        include_once "app/view/product/create.php";
    }

    public function create($data)
    {
        $data2 = [
            "name" => $data['name'],
            "price" => $data['price'],
            "description" => $data['description'],
            "amount" => $data['amount'],
            "category" => $data['category']
        ];
        $this->productModel->create($data2);
        header("Location:index.php?page=product-list");
    }
    public function delete($id)
    {
        $this->productModel->delete($id);
        include_once "app/view/product/delete.php";
        header("Location:index.php?page=product-list");

    }

        public function showFormEdit()
    {
        $id = $_REQUEST["id"];
        $product = $this->productModel->getById($id);
        include_once "app/view/product/edit.php";
    }

    public function edit($id,$request)
    {
        $id = $_REQUEST["id"];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                "name" => $request['name'],
                "price" => $request['price'],
                "description" => $request['description'],
                "amount" => $request['amount'],
                "category" => $request['category'],
                "id" => $id
            ];
        }
        $this->productModel->edit($data);
        header("Location:index.php?page=product-list");
    }

    public function search()
    {
        $key = $_GET["search"];
        if (empty($key)){
            echo "hay nhap vao";
        }else{
            $this->productModel->search($key);
            include "app/view/product/list.php";
        }

    }

    public function showDetail($id)
    {
        $id = $_REQUEST["id"];
        include "app/view/product/detail.php";
    }

}