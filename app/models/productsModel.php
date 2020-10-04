<?php

class productsModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }
    public function setProduct($saveData)
    {
        $this->db->query("INSERT INTO producto VALUES(null, :nombre_producto, :marca, :tipo, now())");
        $this->db->bind(':nombre_producto', $saveData['nombre_producto']);
        $this->db->bind(':marca', $saveData['marca']);
        $this->db->bind(':tipo', $saveData['tipo']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getProduct($id){
        $this->db->query("SELECT * FROM producto WHERE id_producto = :id_producto");
        $this->db->bind(':id_producto', $id);
        return $this->db->register();
    }

    public function getAllProducts()
    {
        $this->db->query("SELECT * FROM producto");
        return $this->db->registers();
    }

    public function eliminarProducto($id)
    {
        $this->db->query("DELETE FROM producto WHERE id_producto = :id_producto");
        $this->db->bind(':id_producto', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editProduct($data) {
        $this->db->query("UPDATE producto SET nombre_producto = :nombre_producto, marca = :marca, tipo = :tipo WHERE id_producto =:id_producto");
        $this->db->bind(':id_producto', $data['id_producto']);
        $this->db->bind(':nombre_producto', $data['nombre_producto']);
        $this->db->bind(':marca', $data['marca']);
        $this->db->bind(':tipo', $data['tipo']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
