<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productos_DAO
 *
 * @author pfrias
 */
class Productos_DAO extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listaProductos(){
        
        $this->db->SELECT('*');
        $this->db->FROM('producto_completa');
        $sql = $this->db->get();
        
        return $sql->result();
    }
   
    
    public function listaCategoria(){
        $this->db->SELECT('*');
        $this->db->FROM('categoria');
        $sql = $this->db->get();
        
        return $sql->result();
        
    }
    
    public function listaSubCategoria($idCategoria){
        $this->db->SELECT('*');
        $this->db->FROM('sub_categoria');
        $this->db->WHERE('id_categoria',$idCategoria);
        $sql = $this->db->get();
        
        return $sql->result();
    }
    
    /**
     * @name listaProductoXcod
     * 
     * Lista un producto segun el codigo ingresado
     * 
     * @param String $codigo
     * @return array
     */
    public function listaProductoXcod($codigo){
        
        $this->db->SELECT('*');
        $this->db->FROM('producto');
        $this->db->WHERE('codigo_fabricante',$codigo);
        $sql = $this->db->get();
        
        return $sql->row();
        
    }
    
    
}
