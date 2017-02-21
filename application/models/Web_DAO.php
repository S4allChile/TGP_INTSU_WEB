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
    
    
}
