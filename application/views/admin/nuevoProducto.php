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
                            <form method="get" action="#" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="input">Codigo</label>
                                            <input type="text" name="codigo" class="form-control" id="codigo" placeholder="Codigo" >
                                        </div>
                                    </div>

                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="input">Fecha</label>
                                            <input type="text" class="form-control" id="fecha" align="right" value="<?= date('d-m-Y'); ?>" readonly="readonly">
                                        </div>
                                    </div>
                                </div>
                                  
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="input">Descripcion</label>
                                            <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripcion">
                                        </div>
                                    </div>

                                    <div class="col-xs-1">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="activo" value="on" checked="checked" />
                                              Activo
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="on" name="destacado">
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
                                            <select class="form-control" id="categoria" name="categoria">
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
                                            <select class="form-control" id="subCategoria" name="subcategoria" disabled="disabled">
                                                  <option value="0"> Seleccione Categoria</option>

                                            </select>

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                
                                    <div class="row">
                                        <div class="col-xs-10">
                                            <div class="form-group">
                                                <label for="exampleInputAmount">Precio Venta</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon">$</div>
                                                  <input type="text" name="precioVenta" class="form-control" id="precioVenta" onkeyup="formato_numero(this)" onchange="formato_numero(this)" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xs-10">
                                            <div class="form-group">
                                                <label for="exampleInputAmount">Oferta Especial</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon">$</div>
                                                  <input type="text" name="ofertaEspecial" class="form-control" id="ofertaEspecial" onkeyup="formato_numero(this)" onchange="formato_numero(this)" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xs-10">
                                            <div class="form-group">
                                                <label for="exampleInputAmount">Arriendo Dia</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon">$</div>
                                                  <input type="text" name="arriendoDia" class="form-control" id="arriendoDia" onkeyup="formato_numero(this)" onchange="formato_numero(this)" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-10">
                                            <div class="form-group">
                                                <label for="exampleInputAmount">Arriendo Mes</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon">$</div>
                                                  <input type="text" name="arriendoMes" class="form-control" id="arriendoMes" onkeyup="formato_numero(this)" onchange="formato_numero(this)" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-10">
                                            <div class="form-group">
                                                <label for="exampleInputAmount">Precio Garantia</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon">$</div>
                                                  <input type="text" name="valorGarantia" class="form-control" id="exampleInputAmount" onkeyup="formato_numero(this)" onchange="formato_numero(this)"  />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="control-label">Imagen Principal</label>
                                        <input id="input-2" name="imagenP" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-10">
                                        <div class="form-group">
                                            <label>Descripcion detallada</label>
                                            <textarea class="form-control textarea" name="descDetallada" rows="10" id="descDetallada"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
                                <button type="submit" class="btn btn-success" value="Guardar"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar</button>
                                
                                
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
        <script src="<?= base_url(); ?>pagina/lib/bootstrap3-wysiwyg/dist/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>pagina/lib/bootstrap-fileinput/js/fileinput.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $('.textarea').wysihtml5();
                 
                $('#categoria').change(function(){
                    var id = $(this).find(':selected').val();
                    
                    $('#subCategoria').load('../ajax/cargaSubCategoria','id='+id);
                    $('#subCategoria').removeAttr('disabled');
                    
                });
                
              
            });
        </script>
        
        
    </body>
</html>
