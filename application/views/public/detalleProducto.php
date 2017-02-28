<div class="main-container">
    <div class="page-content">
            <div class="product-page">
                    <div class="container">
                            <nav class="bootexpert-breadcrumb">
                                    <a href="#"><?= $categoria->descripcion_categoria; ?></a>	
                                    <span class="separator">&gt;</span>	
                                    <a href="<?= base_url(); ?>index.php/web/categoria/<?= encriptarUrl($subCategoria->id_sub_categoria); ?>"><?= $subCategoria->nombre_sub_categoria; ?></a>
                            </nav>
                    </div>
                    <div class="product-view">
                            <div class="product">
                                    <div class="container">
                                            <div class="row">
                                                    <div class="col-xs-12 col-md-9">
                                                            <div class="single-product-image">
                                                                    <div class="images single-images gallery">
                                                                        
                                                                            <?php
                                                                            foreach ($imagenes AS $imagen){
                                                                                
                                                                            ?>
                                                                            <a href="<?= base_url(); ?>pagina/images/tienda/productos/<?= $imagen->nombre_archivo; ?>" class="bootexpert-main-image zoom" title="image1xxl-59" data-gal="prettyPhoto[gallery1]">
                                                                                    <img src="<?= base_url(); ?>pagina/images/tienda/productos/<?= $imagen->nombre_archivo; ?>" class="attachment-shop_single" alt="image1xxl (59)"
                                                                                    title="image1xxl (59)" />
                                                                            </a>
                                                                            <?php } ?>
                                                                        
                                                                    </div>
                                                                    <div class="thumbnails single-thumbnails columns-3">
                                                                            <?php
                                                                            foreach ($imagenes AS $imagen){
                                                                            ?>
                                                                            <div>
                                                                                    <img src="<?= base_url(); ?>pagina/images/tienda/productos/<?= $imagen->nombre_archivo; ?>" alt="image1xxl (59)" />
                                                                            </div>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                           
                                                                    </div>
                                                            </div>
                                                            <div class="summary entry-summary single-product-info">
                                                                    <h1 class="product_title entry-title"><?= $producto->descripcion; ?></h1>
                                                                    <div class="bootexpert-product-rating">
                                                                            
                                                                    </div>
                                                                    <div class="short-description">
                                                                            <p><?= $producto->descripcion_detallada; ?></p>
                                                                    </div>
                                                                    <?php
                                                                    if($producto->oferta_especial_web == 0){
                                                                    ?>
                                                                    <div class="price-box">
                                                                            <p class="price">
                                                                                <ins>Precio de Venta:  <span class="amount"> <strong>   &dollar; <?= number_format($producto->precio_venta,0,',','.'); ?></strong></span></ins>
                                                                            </p>
                                                                    </div>
                                                                    <?php
                                                                    }else{
                                                                    ?>
                                                                    <div class="price-box">
                                                                            <p class="price">
                                                                                <del>Precio Normal<span class="amount">&dollar; <?= number_format($producto->precio_venta,0,',','.'); ?></span></del>  
                                                                                <ins>OFERTA ESPECIAL:  <span class="amount"> <strong>   &dollar; <?= number_format($producto->oferta_especial_web,0,',','.'); ?></strong></span></ins>
                                                                            </p>
                                                                    </div>
                                                                    <?php } ?>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    <form class="cart" method="post" enctype='multipart/form-data'>
                                                                            <div class="variations">
                                                                                    
                                                                            </div>									
                                                                            <div class="quantity">
                                                                                    <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" />
                                                                            </div>
                                                                            <button type="submit" class="single_add_to_cart_button button alt">Cotizar</button>
                                                                    </form>
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                            <div>
                                                                                    <a href="" class="add_to_wishlist">Add to Wishlist</a>
                                                                            </div>
                                                                            <div class="clear"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a href="" class="compare button">Compare</a>
                                                                    <a class="sharefriend" href="mailto:yourfriend@domain.com">Email your friend</a>
                                                                    <div class="product_meta">
                                                                            <select class="wcml_currency_switcher">
                                                                                    <option value="GBP" selected="selected">GBP</option>
                                                                                    <option value="EUR">EUR</option>
                                                                            </select>
                                                                            <span class="posted_in">Categories: 
                                                                                    <a href="">Accessories</a>, 
                                                                                    <a href="">Kids</a>, 
                                                                                    <a href="">Women</a>
                                                                            </span>
                                                                            <span class="tagged_as">Tags: 
                                                                                    <a href="">electronic</a>, 
                                                                                    <a href="">laptop</a>
                                                                            </span>
                                                                    </div>
                                                                    <div class="share_buttons">
                                                                            <div class="addthis_native_toolbox"></div>
                                                                    </div>
                                                            </div>
                                                            <!-- .summary -->
                                                            <div class="bootexpert-tabs wc-tabs-wrapper">
                                                                    <ul class="tabs parveztabs">
                                                                            <li rel="tab-description" class="tab active"><a>Descripcion</a></li>
                                                                            <li rel="tab-addi-info" class="tab"><a>Ficha Tecnica</a></li>
                                                                            <li rel="tab-reviews" class="tab"><a>Descargas</a></li>
                                                                    </ul>
                                                                    <div class="panel active" id="tab-description">
                                                                        <table>
                                                                            <tr>
                                                                                <td class="ficha-producto">
                                                                                    <li>Inducido</li>
                                                                                    <hr/>
                                                                                    <p>obre de trenzado profesional, con barniz reforzado para aguantar altas temperaturas y trabajos de esfuerzo, esto mantiene al cobre fuera de peligro de sufrir quemaduras y lo aísla para no producir fugas de corriente. 
La parte  mecánica del inducido (encargada de sostener el piñón que produce el movimiento de la corona) es de fierro fundido de alta calidad, este material es templado, lo que permite resistir la potencia y el esfuerzo sin producir desgaste. </p>
                                                                                </td>
                                                                                <td class="ficha-producto">
                                                                                    <li>Campo</li>
                                                                                    <hr/>
                                                                                    <p>Es de excelente calidad eléctrica, su cobre está protegido por barniz resistente a altas temperaturas lo que evita que el cobre se dañe con quemaduras y lo aísla frente a las fugas de corriente. </p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <li>Piñon</li>
                                                                                </td>
                                                                                <td>
                                                                                    <li>Corona</li>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <li>Rodamientos</li>
                                                                                </td>
                                                                                <td>
                                                                                    <li>Carbones</li>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <li>Interruptor</li>
                                                                                </td>
                                                                                <td>
                                                                                    <li>Cordon Electrico</li>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <li>Cobertor</li>
                                                                                </td>
                                                                                <td>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="panel" id="tab-addi-info">
                                                                            <table class="shop_attributes">
                                                                                    <tbody>
                                                                                            <tr class="">
                                                                                                    <th>Color</th>
                                                                                                    <td class="product_weight">Rad, Black</td>
                                                                                            </tr>
                                                                                            <tr class="alt">
                                                                                                    <th>Dimensions</th>
                                                                                                    <td class="product_dimensions">10 x 20 x 30 cm</td>
                                                                                            </tr>
                                                                                            <tr class="">
                                                                                                    <th>Size</th>
                                                                                                    <td><p>L, M, S, XL</p></td>
                                                                                            </tr>
                                                                                    </tbody>
                                                                            </table>
                                                                    </div>
                                                                    <div class="panel" id="tab-reviews">
                                                                            <div id="reviews">
                                                                                    <div id="comments">
                                                                                            <h2>1 review for Nulla sed libero</h2>
                                                                                            <ol class="commentlist">
                                                                                                    <li class="comment byuser comment-author-admin bypostauthor even thread-even">
                                                                                                            <div class="comment_container">
                                                                                                                    <img alt="" src="images/fashion/blog/avatar.png" class="avatar avatar-60 photo" />
                                                                                                                    <div class="comment-text">
                                                                                                                            <div class="star-rating" title="Rated 5 out of 5"> 
                                                                                                                                    <span class="width100"><strong>5</strong> out of 5</span>
                                                                                                                            </div>
                                                                                                                            <p class="meta"> 
                                                                                                                                    <strong>admin</strong> &ndash; 
                                                                                                                                    <span>October 12, 2014</span>:
                                                                                                                            </p>
                                                                                                                            <div class="description">
                                                                                                                                    <p>Very nice shoes! I will buy it.</p>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </li>
                                                                                            </ol>
                                                                                    </div>
                                                                                    <div id="review_form_wrapper">
                                                                                            <div id="review_form">
                                                                                                    <div id="respond" class="comment-respond">
                                                                                                            <h3 id="reply-title" class="comment-reply-title">Add a review</h3>
                                                                                                            <form action="#" method="post" id="commentform" class="comment-form">
                                                                                                                    <div class="comment-input">
                                                                                                                            <p class="comment-form-author">
                                                                                                                                    <label for="author">Name <span class="required">*</span></label>
                                                                                                                                    <input id="author" name="author" type="text" value="" size="30" />
                                                                                                                            </p>
                                                                                                                            <p class="comment-form-email">
                                                                                                                                    <label for="email">Email <span class="required">*</span></label>
                                                                                                                                    <input id="email" name="email" type="text" value="" size="30" />
                                                                                                                            </p>
                                                                                                                    </div>
                                                                                                                    <div class="comment-form-rating">
                                                                                                                            <label>Your Rating</label>
                                                                                                                            <p class="stars">
                                                                                                                                    <span>
                                                                                                                                            <a href="#" class="star-1">1</a>
                                                                                                                                            <a href="#" class="star-2">2</a>
                                                                                                                                            <a href="#" class="star-3">3</a>
                                                                                                                                            <a href="#" class="star-4">4</a>
                                                                                                                                            <a href="#" class="star-5">5</a>
                                                                                                                                    </span>
                                                                                                                            </p>
                                                                                                                    </div>
                                                                                                                    <p class="comment-form-comment">
                                                                                                                            <label>Your Review</label>
                                                                                                                            <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                                                                                    </p>
                                                                                                                    <p class="form-submit">
                                                                                                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit" />
                                                                                                                    </p>
                                                                                                            </form>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="clear"></div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-3">
                                                            <div class="widget related_products_widget">
                                                                    <h3 class="widget-title"><span>Productos Relacionados</span></h3>
                                                                    <div class="related products">
                                                                            <div class="shop-products row grid-view">
                                                                                
                                                                                    <?php
                                                                                    foreach ($relacionados AS $relacionado){
                                                                                        if($relacionado->id_producto != $producto->id_producto){
                                                                                    ?>
                                                                                    <div class="first last item-col col-xs-12 col-sm-12">
                                                                                            <div class="product-wrapper">
                                                                                                    <div class="list-col4">
                                                                                                            <div class="product-image">
                                                                                                                    <a href="" title="Phasellus vel hendrerit">
                                                                                                                            <img src="images/fashion/product/image1xxl-11-480x606.jpg" class="primary_image" alt="image1xxl (11)" />
                                                                                                                            <img src="images/fashion/product/image1xxl-4-480x606.jpg" class="secondary_image" alt="image1xxl (4)" />
                                                                                                                    </a>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="list-col8">
                                                                                                            <div class="listview">
                                                                                                                    <h2 class="product-name"><a href="">Phasellus vel hendrerit</a></h2>
                                                                                                                    <div class="ratings">
                                                                                                                            <div class="star-rating" title="Rated 5.00 out of 5">
                                                                                                                                    <span class="width100"><strong class="rating">5.00</strong> out of 5</span>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                    <div class="price-box">
                                                                                                                            <span class="amount">&pound;55.00</span>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="clearfix"></div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <?php }} ?>
                                                                                    
                                                                                    
                                                                                    
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                           
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                            
                    </div>
                    <div class="clearfix"></div>
            </div>
    </div>
</div>
