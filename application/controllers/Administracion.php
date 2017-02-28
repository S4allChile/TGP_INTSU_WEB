<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administracion
 *
 * @author pfrias
 */
class Administracion extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
       // if($this->session->userdata('idUsr')){
            $this->load->view('admin/template/head');
            $this->load->view('admin/template/menu');
            $this->load->view('admin/escritorio');
       // }
       // else{
       //     redirect('admin');
        //}
        
    }
}
