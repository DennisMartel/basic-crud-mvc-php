<?php

class Main extends Controller{
    public function __construct(){
        $this->products = $this->model('productsModel');
    }

    public function listarProductos() {
        $allProducts = $this->products->getAllProducts();   
        $data = [
            'productos' => $allProducts
        ];
        $this->view('pages/productos/listar', $data);
    }

    public function agregarProducto() {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =[
                'nombre_producto' => rtrim($_POST['nombre_producto']),
                'marca' => rtrim($_POST['marca']),
                'tipo' => rtrim($_POST['tipo']),
            ];

            if($this->products->setProduct($data)){
                redirect('/Main/listarProductos');
            } else {
                echo 'algo salio mal';
            }

        }else{
            $this->view('pages/productos/agregar');
        }
    }

    public function deleteProduct($id) {
        if($this->products->eliminarProducto($id)){
            redirect('/Main/listarProductos');
        } else {
            echo 'error';
        }
    }

    public function updateProduct($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =[
                'id_producto' => $id,
                'nombre_producto' => rtrim($_POST['nombre_producto']),
                'marca' => rtrim($_POST['marca']),
                'tipo' => rtrim($_POST['tipo']),
            ];

            if($this->products->editProduct($data)){
                redirect('/Main/listarProductos');
            } else {
                echo 'error';
            }

        }else{
            $getProductId = $this->products->getProduct($id);
            $data = [
                'id_producto' => $getProductId->id_producto,
                'nombre_producto' => $getProductId->nombre_producto,
                'marca' => $getProductId->marca,
                'tipo' => $getProductId->tipo,
            ];
            $this->view('pages/productos/editar', $data);
        }
    }
}