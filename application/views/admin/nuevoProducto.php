<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="<?= base_url(); ?>productos">Productos</a></li>
                <li><a href="#">Nuevo Producto</a></li>
            </ol>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="page-header">Productos <small>Creacion de producto</small></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="input">Codigo</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Codigo" >
                                    </div>
                                </div>
                                
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="input">Fecha</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" align="right" value="<?= date('d-m-Y'); ?>" disabled="disabled">
                                    </div>
                                </div>
                                
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="input">Descripcion</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Descripcion">
                                    </div>
                                </div>
                                
                                <div class="col-xs-1">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" checked="checked" />
                                          Activo
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" value="">
                                          Destacado
                                        </label>
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                        </div>
                    </div>
                  
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>       
        
      
        
        
        <script src="<?= base_url(); ?>pagina/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>pagina/js/bootstrap.min.js" type="text/javascript"></script>
        
    </body>
</html>
