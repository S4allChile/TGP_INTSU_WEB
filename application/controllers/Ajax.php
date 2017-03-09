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
        
        
    }
    
    
    public function cargaSubCategoria(){
        
        $this->load->model('productos_DAO');
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
    
    public function validaLogin(){
        $this->load->model('admin_DAO');
        //Capturo las variables
        $usuario = $this->input->post('user');
        $pass = $this->input->post('pass');
        
        //encripto la contraseña
        $pass = sha1($pass);
        //pasamos el usuario a minusculas
        $user = strtolower($usuario);
        
        $validar = $this->admin_DAO->validarUsuario($user,$pass);
        if(empty($validar)){
            
            echo '0';
        }else{
            
            $valores = array(
                'idUsr' => $validar->id_usuario,
                'nomUsr' => $validar->nombre_usuario." ".$validar->apellido_usuario
            );
            $this->session->set_userdata($valores);
            
            echo '1';
            
        }
        
        
        
        
        
        
    }
}
