<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productos
 *
 * @author pfrias
 */
class Productos extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('productos_DAO');
    }
    
    public function index(){
        if($this->session->userdata('idUsr')){
            $this->load->view('admin/template/head');
            $this->load->view('admin/template/menu');
            $datos = array(
                'productos' => $this->productos_DAO->listaProductos()
            );
            $this->load->view('admin/productos',$datos);
        }
        else{
            redirect('admin');
        }
    }
    
    public function nuevoProducto(){
         if($this->session->userdata('idUsr')){
            $this->load->view('admin/template/head');
            $this->load->view('admin/template/menu');
            $datos = array(
                'productos' => $this->productos_DAO->listaProductos(),
                'categorias' => $this->productos_DAO->listaCategoria()
            );
            $this->load->view('admin/nuevoProducto',$datos);
        }
        else{
            redirect('admin');
        }
        
        
    }
    
    public function addProducto(){
        
        if(empty($this->input->post('activo'))){
            $activo = 0;
        }else{
            $activo = 1;
        }
        
        if(empty($this->input->post('destacado'))){
            $destacado = 0;
        }else{
            $destacado = 1;
        }
        
        $codigo = $this->input->post('codigo');
        //Creamos el id si viene vacio
        if($codigo == ""){
            //obtenemos el ultimo id
            $id = $this->productos_DAO->ultimoId();
            $cant = strlen($id->id_producto);
            $num = 5;
            $falta = $num - $cant;
            $ceros = "";
            for($i=1;$i<=$falta; $i++){
                $va = 0;
                $ceros = $ceros.$va;
            }
            $codigo = $ceros.(string)$id->id_producto +1;
            
        }
        
        $serie = date('YmdHis');
        
        $config['upload_path'] = "./pagina/images/tienda/productos";
        $config['file_name'] = $serie."_".$codigo;
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "50000";
        $config['max_width'] = "2024";
        $config['max_height'] = "2024";
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('imagenP')) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
           
        }

        $infoImg = $this->upload->data();
        
        $precioVenta = str_replace(".","",$this->input->post('precioVenta'));
        $ofertaEspecial = str_replace(".","",$this->input->post('ofertaEspecial'));
        $arriendoDia = str_replace(".","",$this->input->post('arriendoDia'));
        $arriendoMes = str_replace(".","",$this->input->post('arriendoMes'));
        $valorGarantia = str_replace(".","",$this->input->post('valorGarantia'));
        
        $activoWeb = $this->input->post('descripcion');
        //Capturamos las variables
        $datosProducto = array(
            'codigo_producto' => $codigo,
            'descripcion' => $this->input->post('descripcion'),
            'activo_web' => $activo,
            'destacado' => $destacado,
            'id_categoria' => $this->input->post('categoria'),
            'id_sub_categoria' => $this->input->post('subcategoria'),
            'precio_venta' => $precioVenta,
            'oferta_especial_web' => $ofertaEspecial,
            'precio_arriendo_dia' => $arriendoDia,
            'precio_mes' => $arriendoMes,
            'precio_garantia' => $valorGarantia,
            'descripcion_detallada' => $this->input->post('descDetallada')           
        );
        
        $idProducto = $this->productos_DAO->createProducto($datosProducto);
        if($idProducto == 0){
            echo 0;//PRoblemas al crear el producto
        }else{
            
            $datosImagen = array(
                'id_producto' => $idProducto,
                'nombre_archivo' => $infoImg['file_name'],
                'principal' => 1
                
            );
            
            if($this->productos_DAO->createImagen($datosImagen)){
                echo 1; //Imagen y producto OK
            }else{
                echo 2; //Problemas al insertar la imagen
            }
            
        }
        
        
    }
    
    
}
