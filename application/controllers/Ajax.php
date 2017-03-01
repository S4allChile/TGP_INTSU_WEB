<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ajax
 *
 * @author pfrias
 */
class Ajax extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('productos_DAO');
    }
    
    
    public function cargaSubCategoria(){
        //Capturo la variable
        $idCategoria = $this->input->get('id');
        $valores = $this->productos_DAO->listaSubCategoria($idCategoria);
        
        if(empty($valores)){
            
            echo '<option value="0">No existen Sub Categorias</option>';
            
        }else{
        
        foreach ($valores AS $valor){
            
                echo '<option value="'.$valor->id_sub_categoria.'">'.$valor->nombre_sub_categoria.'</option>';
            }
        }
    }
}
