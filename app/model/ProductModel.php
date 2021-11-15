<?php

namespace App\model;

class ProductModel extends BaseModel
{
    protected string $table = "products";

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`,`price`,`description`,`amount`,`category`) VALUES (?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["price"]);
        $stmt->bindParam(3, $data["description"]);
        $stmt->bindParam(4, $data["amount"]);
        $stmt->bindParam(5, $data["category"]);
        $stmt->execute();
    }

    public function edit($data)
    {

        $sql = "UPDATE $this->table SET `name` = ?, `price` = ?, `description` = ?,`amount` = ?, `category` = ? where `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["price"]);
        $stmt->bindParam(3, $data['description']);
        $stmt->bindParam(4, $data['amount']);
        $stmt->bindParam(5, $data['category']);
        $stmt->bindParam(6, $data['id']);
        $stmt->execute();
    }

    public function search($key)
    {
        $sql = "SELECT * FROM $this->table WHERE `name` LIKE '%$key%'";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }
}