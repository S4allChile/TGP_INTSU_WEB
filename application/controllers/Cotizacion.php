<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cotizacion
 *
 * @author pfrias
 */
class Cotizacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('productos_DAO');
    }

public function index() {

        $this->load->view('nombreVista');
    }
    
    public function add_producto(){
        
        //Capturo las variables
        $codigo = $this->input->post('codigo');
        $cantidad = $this->input->post('cantidad');
        
        //Busco los datos del producto
        $producto = $this->productos_DAO->listaProductoXcod($codigo);
        
        $data = array(
            'id'      => $producto->codigo_producto,
            'qty'     => $cantidad,
            'price'   => $producto->precio_venta,
            'name'    => $producto->descripcion
        );

$carro = $this->cart->insert($data);

echo $carro;
//
//if(empty($carro)){
//    echo 0;
//}else{
//    echo 1;
//}

        
        
        
    }

}
