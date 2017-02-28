<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productos
 *
 * @author pfrias
 */
class Productos extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('productos_DAO');
    }
    
    public function index(){
        // if($this->session->userdata('idUsr')){
            $this->load->view('admin/template/head');
            $this->load->view('admin/template/menu');
            $datos = array(
                'productos' => $this->productos_DAO->listaProductos()
            );
            $this->load->view('admin/productos',$datos);
       // }
       // else{
       //     redirect('admin');
        //}
    }
    
    public function nuevoProducto(){
        // if($this->session->userdata('idUsr')){
            $this->load->view('admin/template/head');
            $this->load->view('admin/template/menu');
            $datos = array(
                'productos' => $this->productos_DAO->listaProductos()
            );
            $this->load->view('admin/nuevoProducto',$datos);
       // }
       // else{
       //     redirect('admin');
        //}
        
        
    }
}
