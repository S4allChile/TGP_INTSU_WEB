<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('web_DAO');
    }


	public function index()
	{
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
                
                $datosWeb = array(
                    'banner' => $this->web_DAO->cargaBannerPrincipal() 
                );
		$this->load->view('public/web',$datosWeb);

		//******************************************************************************
		$this->load->view('public/template/footer');
		//******************************************************************************
		$this->load->view('public/modales/modalWeb');
		//******************************************************************************
		$this->load->view('public/js/webJs');
		//******************************************************************************


	}
}
