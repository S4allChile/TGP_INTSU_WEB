<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error404
 *
 * @author pfrias
 */
class Error404 extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        //******************************************************************************
		$dataHead = array(
			'titulo' => 'Intsu SPA | Herramientas y Mauqinarias para la construccion'
		);
		$this->load->view('public/template/head',$dataHead);
		//******************************************************************************
		$this->load->view('public/template/topBar');
		//******************************************************************************
		$this->load->view('public/template/logo');
		//******************************************************************************
		$this->load->view('public/template/carro');
		//******************************************************************************
		$datoMenu = array(
			'menu' => $this->web_DAO->cargaMenu(),
                        'subMenu' => $this->web_DAO->cargaSubMenu()
		);
		$this->load->view('public/template/menu',$datoMenu);
		//******************************************************************************
		// PAGINA PRINCIPAL
		//******************************************************************************

		$this->load->view('public/404');

		//******************************************************************************
		$this->load->view('public/template/footer');
		//******************************************************************************
		$this->load->view('public/modales/modalWeb');
		//******************************************************************************
		$this->load->view('public/js/webJs');
		//******************************************************************************
    }
}
