<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#">Productos</a></li>
            </ol>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="page-header">Productos <small>Administracion de productos</small></h3>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="<?= base_url(); ?>index.php/productos/nuevoProducto"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Producto</a>
                        
                    </div>
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Clase</th>
                                <th>Sub Clase</th>
                                <th>Precio Vta</th>
                                <th>Oferta</th>
                                <th align="center">destacado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($productos AS $producto){
                            ?>
                            <tr>
                                <td>
                                    <a href="#">
                                        <?= $producto->codigo_categoria."-".$producto->codigo_sub_categoria."-".$producto->codigo_producto; ?>
                                    </a>    
                                </td>
                                <td><?= $producto->descripcion; ?></td>
                                <td><?= $producto->descripcion_categoria; ?></td>
                                <td><?= $producto->nombre_sub_categoria; ?></td>
                                <td><?= number_format($producto->precio_venta,0,',','.'); ?></td>
                                <td><?= number_format($producto->oferta_especial_web,0,',','.'); ?></td>
                                <td align="center">
                                    <?php
                                    if($producto->destacado == 1){
                                        $check = 'checked="checked"';
                                    }else{
                                        $check = '';
                                    }
                                    ?>
                                    <span class="input-group">
                                        <input type="checkbox" <?= $check; ?>  disabled="disabled">
                                    </span>
                                </td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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