<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_DAO
 *
 * @author pfrias
 */
class Admin_DAO extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function login($user,$pass){
        
        $this->db->SELECT('username');
        $this->db->FROM('usuario');
        $this->db->WHERE('username',$user);
        $sql = $this->db->get();
        
        
    }
}
