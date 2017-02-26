<div class="main-container">
        <div class="blog_header"><?= $nomCategoria; ?></div>
        <div class="container">
                <div class="row">
                        <div class="col-xs-12 col-md-12">
                                <div class="page-content blog-page blog-nosidebar">
                                        <header class="archive-header">
                                            <h2 class="archive-title"><strong>CATEGORIA: </strong><span><?= $nomSubCategoria; ?></span></h2>
                                        </header>
                                        
                                    <?php
                                    foreach ($productos AS $producto){
                                    ?>
                                        <article class="post format-standard category-image">
                                            <div class="post-thumbnail" style="width: 25%">
                                                        <a href="">
                                                            <img src="<?= base_url(); ?>pagina/images/tienda/productos/<?= $producto->nombre_archivo; ?>" width="300" class="attachment-road-post-thumb" alt="blog-1" />
                                                        </a>
                                                </div>
                                                <div class="postinfo-wrapper ">
                                                    <div class="post-info">
                                                                <header class="entry-header">
                                                                        <h2 class="entry-title">
                                                                                <a href="single-blog.html"><?= $producto->descripcion; ?></a>
                                                                        </h2>
                                                                </header>
                                                                <hr/>
                                                                    <h5>Precio de Venta: $ <?= number_format($producto->precio_venta,0,',','.'); ?></h5>	
                                                                <hr/>
                                                                <div class="entry-summary">
                                                                        <p><?= $producto->descripcion_detallada; ?> </p>
                                                                </div>
                                                                <a class="readmore" href="single-blog.html">Mas informacion<i class="fa fa-arrow-right"></i></a>
                                                        </div>
                                                </div>
                                        </article>
                                    <?php } ?>    
                                        
                                        
                                </div>
                        </div>
                </div>
        </div>
</div>