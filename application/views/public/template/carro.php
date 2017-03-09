<?php
$ci = &get_instance();
$ci->load->model("web_DAO");
?>
									<div class="col-xs-12 col-md-4">
										<div class="widget bootexpert widget_shopping_cart">
											<div class="widget_shopping_cart_content">
                                                                                            
												<div class="cart-toggler">
													<a href="">
														<i class="fa fa-shopping-cart"></i>
														<span class="mini-cart-link">
															<span class="cart-title">Carro de Cotizacion </span>
															<span class="cart-quantity"><?= $this->cart->total_items(); ?> Productos -
																<span class="cart-total">
                                                                                                                                    <span class="amount">&dollar;<?= number_format($this->cart->total(),0,",","."); ?></span>
																</span>
															</span>
														</span>
													</a>
												</div>
                                                                                            
												<div class="mini_cart_content">
													<div class="mini_cart_inner">
														<div class="mini_cart_arrow"></div>
														<ul class="cart_list">
                                                                                                                    <?php $i = 1; ?>
                                                                                                                    <?php foreach ($this->cart->contents() as $items){ 
                                                                                                                        
                                                                                                                        $img = $ci->web_DAO->buscaImagenCarro($items['id']);
                                                                                                                    ?>
                                                                                                                    
                                                                                                                    
															<li><a href="" class="product-image">
                                                                                                                                
																	<img alt="image1xxl (6)" class="attachment-shop_thumbnail" src="<?= base_url(); ?>pagina/images/tienda/productos/<?= $img->nombre_archivo; ?>">
																<span class="quantity"><?= $items['qty']; ?></span>
																</a>
																<div class="product-details">
																	<a title="Remove this item" class="remove" href=""><i class="fa fa-times-circle"></i></a>
																	<a href="" class="product-name"><?= $items['name']; ?> &nbsp;</a>
                                                                                                                                        <span class="quantity"><span class="amount">&dollar;<?= number_format($items['price'],0,",","."); ?></span></span>
																</div>
															</li>
                                                                                                                       
                                                                                                                    <?php } ?>   
															
														</ul><!-- end product list -->
                                                                                                                <p class="total">Subtotal: <span class="amount"><span class="amount">&dollar;<?= number_format($items['subtotal'],0,",","."); ?></span></span></p>
														<p class="buttons">
															<a class="button checkout wc-forward" href="<?= base_url(); ?>pagina/checkout-3.html">Cotizar</a>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="header-search">
											<div class="widget bootexpert widget_product_search">

												<form method="get" id="searchform" action="#">
													<input type="text" value="" name="s" id="ws" placeholder="Buscar Producto..." />
													<button class="btn btn-primary" type="submit" id="wsearchsubmit"><i class="fa fa-search"></i></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
