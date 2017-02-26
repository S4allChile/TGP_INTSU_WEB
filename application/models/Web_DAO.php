<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Web_DAO
 *
 * @author pfrias
 */
class Web_DAO extends CI_Model {
   
    public function __construct() {
        parent::__construct();
    }
    
    public function cargaMenu(){
        $this->db->SELECT('*');
        $this->db->FROM('categoria');
        $this->db->WHERE('categoria_web',1);
        $sql = $this->db->get();
        
        return $sql->result();
    }
    
    public function cargaSubMenu(){
        $this->db->SELECT('*');
        $this->db->FROM('sub_categoria');
        $this->db->WHERE('sub_categoria_web',1);
        $sql = $this->db->get();
        
        return $sql->result();
    }
    
    public function cargaBannerPrincipal(){
        $this->db->SELECT('*');
        $this->db->FROM('banners');
        $this->db->WHERE('activo',1);
        $sql = $this->db->get();
        
        return $sql->result();
    }
    
    public function productosDestacados(){
        
        $this->db->SELECT('*');
        $this->db->FROM('producto');
        $this->db->WHERE('activo_web',1);
        $this->db->WHERE('destacado',1);
        $sql = $this->db->get();
        
        return $sql->result();
        
    }
    
    //**************************************************************************
    /**
     * CONSULTA LOS DATOS DE UNA SUB CATEGORIA X ID
     * 
     * 
     * @param type INT       $idSubCategoria
     */
    //**************************************************************************
    public function consultaSubCategoria($idSubCategoria){
        $this->db->SELECT('*');
        $this->db->FROM('sub_categoria');
        $this->db->WHERE('id_sub_categoria',$idSubCategoria);
        $sql = $this->db->get();
        
        return $sql->row();
        
    }
    
    //**************************************************************************
    /**
     * CONSULTA LOS DATOS DE UNA SUB CATEGORIA X ID
     * 
     * 
     * @param type INT       $idSubCategoria
     */
    //**************************************************************************
    public function consultaCategoria($idCategoria){
        $this->db->SELECT('*');
        $this->db->FROM('categoria');
        $this->db->WHERE('id_categoria',$idCategoria);
        $sql = $this->db->get();
        
        return $sql->row();
        
    }
    
    //**************************************************************************
    /**
     * TRAE TODOS LOS PRODUCTOS SEGUN SU SUBCATEGORIA
     * 
     * 
     * @param type INT       $idSubCategoria
     */
    //**************************************************************************
    public function productosSubCategoria($idSubCategoria){
        $this->db->SELECT('*');
        $this->db->FROM('producto_imagen_principal');
        $this->db->WHERE('id_sub_categoria',$idSubCategoria);
        $sql = $this->db->get();
        
        return $sql->result();
    }
    
    
    //**************************************************************************
    /**
     * Busca la imagen principal de un producto
     * 
     * 
     * @param type INT       $idProducto
     */
    //**************************************************************************
    public function buscaImagenPrincipal($idProducto){
        $this->db->SELECT('*');
        $this->db->FROM('imagen_producto');
        $this->db->WHERE('activo',1);
        $this->db->WHERE('principal',1);
        $this->db->WHERE('id_producto',$idProducto);
        $sql = $this->db->get();
        
        return $sql->row();
        
    }
    
}
