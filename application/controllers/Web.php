<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('web_DAO');
    }

//******************************************************************************
        /**
         * Funcion Base carga la pagina principal de controlador
         */
//******************************************************************************    
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
                $destacado = $this->web_DAO->productosDestacados();
                if(empty($destacado)){
                    $destacado = 1;
                }
                
                $datosWeb = array(
                    'banner' => $this->web_DAO->cargaBannerPrincipal(),
                    'destacados' => $destacado
                );
		$this->load->view('public/web',$datosWeb);

		//******************************************************************************
                $datoPie = array(
                    'encabezadoPie' => TRUE
                );
		$this->load->view('public/template/footer',$datoPie);
		//******************************************************************************
		$this->load->view('public/modales/modalWeb');
		//******************************************************************************
                $datosJs = array(
                    'marcaMenu' => 0
                );
		$this->load->view('public/js/webJs',$datosJs);
		//******************************************************************************


	}
        
        
        public function categoria(){
        //Capturo el segmento de la url para reconocer cual es la categoria que 
        //se esta solicitando
            $seg = $this->uri->segment(3);
            //desencripto la variable
            $idSubCategoria = desencriptarUrl($seg);
            
            //traigo los datos de la subcategoria
            $subCategoria = $this->web_DAO->consultaSubCategoria($idSubCategoria);
            
            //Traigo los datos de la categoria
            $categoria = $this->web_DAO->consultaCategoria($subCategoria->id_categoria);
            
            //Busco los productos segun la subcategoria
            $productos = $this->web_DAO->productosSubCategoria($subCategoria->id_sub_categoria);
            
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
                    'nomCategoria' => $categoria->descripcion_categoria,
                    'nomSubCategoria' => $subCategoria->nombre_sub_categoria,
                    'productos' => $productos
                );
		 $this->load->view('public/categoria',$datosWeb);

		//******************************************************************************
                 $datoPie = array(
                    'encabezadoPie' => FALSE
                );
		$this->load->view('public/template/footer',$datoPie);
		//******************************************************************************
		$this->load->view('public/modales/modalWeb');
		//******************************************************************************
                $datosJs = array(
                    'marcaMenu' => $categoria->id_categoria
                );
		$this->load->view('public/js/webJs',$datosJs);
		//******************************************************************************
        }
}
