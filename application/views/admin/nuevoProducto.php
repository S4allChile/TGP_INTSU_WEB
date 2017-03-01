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
                                
                                <div class="row">
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
                                </div>
                                  
                                <div class="row">
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
                                    <div class="col-xs-4">

                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="input">Categoria</label>
                                            <select class="form-control" id="categoria">
                                                  <option value="0"> Seleccione Categoria</option>
                                                  <?php
                                                  foreach($categorias AS $categoria){
                                                  ?>
                                                  <option value="<?= $categoria->id_categoria; ?>"> <?= $categoria->descripcion_categoria; ?></option>
                                                  <?php } ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="input">Sub Categoria</label>
                                            <select class="form-control" id="subCategoria" disabled="disabled">
                                                  <option value="0"> Seleccione Categoria</option>

                                            </select>

                                        </div>
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
        <script>
            $(document).ready(function(){
                $('#categoria').change(function(){
                    var id = $(this).find(':selected').val();
                    
                    $('#subCategoria').load('../ajax/cargaSubCategoria','id='+id);
                    $('#subCategoria').removeAttr('disabled');
                    
                });
            });
        </script>
        
        
    </body>
</html>
