
						<!-- Nav -->
						<div class="nav-container">
							<div class="container">
								<div class="horizontal-menu">
									<div class="visible-large">
										<div id="saharan_mega_main_menu" class="dropdowns_trigger-hover dropdowns_animation-anim_5">
											<div class="menu_holder">
												<div class="mmm_fullwidth_container"></div>
												<!-- class="fullwidth_container" -->




												<nav class="menu_inner">
													<!-- /class="nav_logo" -->

													

													<ul>
                                                                                                            <li class="active-menu-item first default_dropdown drop_to_right children-menu">
														<a href="<?= base_url(); ?>" class="item_link">
															<span class="link_content">
																<span class="link_text">Inicio</span>
															</span>
														</a>
                                                                                                            </li>
                                                                                                            
                                                                                                            <?php
                                                                                                            foreach ($menu AS $valorMenu){
                                                                                                                
                                                                                                            ?>
														<li class="default_dropdown drop_to_right children-menu">
															<a href="#" class="item_link">
																<span class="link_content">
																	<span class="link_text"><?= $valorMenu->descripcion_categoria; ?></span>
																</span>
															</a>
															<ul class="mega_dropdown">
                                                                                                                            <?php
                                                                                                                                foreach ($subMenu AS $sub){
                                                                                                                                
                                                                                                                                if($sub->id_categoria == $valorMenu->id_categoria)    
                                                                                                                                {
                                                                                                                            ?>
																<li class="default_dropdown drop_to_right children-menu">
																	<a href="<?= base_url(); ?>categoria/<?= $sub->id_sub_categoria; ?>" class="item_link ">
																		<span class="link_content">
																			<span class="link_text"><?= $sub->nombre_sub_categoria; ?></span>
																		</span>
																	</a>
																</li>
                                                                                                                                
                                                                                                                                <?php }} ?>	
															</ul>
															<!-- /.mega_dropdown -->
														</li>
                                                                                                            <?php } ?>



														
														
														<li class="default_dropdown drop_to_right children-menu">
															<a href="<?= base_url(); ?>pagina/contact-3.html" class="item_link ">
																<span class="link_content">
																	<span class="link_text">Contacto</span>
																</span>
															</a>
														</li>
													</ul>
												</nav>




												<!-- /class="menu_inner" -->
											</div>
											<!-- /class="menu_holder" -->
										</div>
										<!-- /id="saharan_mega_main_menu" -->
									</div>
									<!-- End Desktop Menu -->
									<div class="visible-small mobile-menu">
										<div class="nav-container">
											<div class="mbmenu-toggler">Menu<span class="mbmenu-icon"></span></div>
											<nav class="mobile-menu-container">
												<ul id="menu-horizontal-menu" class="nav-menu">
													<li class="first"><a href="<?= base_url(); ?>pagina/index-4-3.html">Home</a>
														<ul class="sub-menu">
															<li><a href="<?= base_url(); ?>pagina/index-5.html">Home Shop 5</a></li>
															<li><a href="<?= base_url(); ?>pagina/index-6.html">Home Shop 6</a></li>
														</ul>
													</li>
													<li class="children-menu"><a href="<?= base_url(); ?>pagina/shop-3.html">Shop</a>
														<ul class="sub-menu">
															<li class="children-menu"><a href="#">Shop Layouts</a>
																<ul class="sub-menu">
																	<li><a href="<?= base_url(); ?>pagina/shop-3.html">Full Width</a></li>
																	<li><a href="<?= base_url(); ?>pagina/shop-3.html">Sidebar Left</a></li>
																	<li><a href="<?= base_url(); ?>pagina/shop-sidebar-right-3.html">Sidebar Right</a></li>
																	<li><a href="<?= base_url(); ?>pagina/shop-list-view-3.html">List View</a></li>
																</ul>
															</li>
															<li class="children-menu"><a href="#">Shop Pages</a>
																<ul class="sub-menu">
																	<li><a href="<?= base_url(); ?>pagina/product-category-3.html">Category</a></li>
																	<li><a href="<?= base_url(); ?>pagina/my-account-3.html">My Account</a></li>
																	<li><a href="<?= base_url(); ?>pagina/cart-3.html">Shopping Cart</a></li>
																	<li><a href="<?= base_url(); ?>pagina/cart-3.html">Checkout</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="children-menu"><a href="#">Product Types</a>
														<ul class="sub-menu">
															<li><a href="<?= base_url(); ?>pagina/single-products-3.html">Simple Product</a></li>
															<li><a href="<?= base_url(); ?>pagina/single-products-3.html">Variable Product</a></li>
															<li><a href="<?= base_url(); ?>pagina/single-products-3.html">Grouped Product</a></li>
															<li><a href="<?= base_url(); ?>pagina/single-products-3.html">Downloadable</a></li>
															<li><a href="<?= base_url(); ?>pagina/single-products-3.html">External Product</a></li>
															<li><a href="<?= base_url(); ?>pagina/single-products-3.html">Virtual Product</a></li>
														</ul>
													</li>
													<li class="children-menu"><a href="<?= base_url(); ?>pagina/blog-3.html">Blog</a>
														<ul class="sub-menu">
															<li class="children-menu"><a href="#">Blog Layouts</a>
																<ul class="sub-menu">
																	<li><a href="<?= base_url(); ?>pagina/blog-3.html">None Sidebar</a></li>
																	<li><a href="<?= base_url(); ?>pagina/blog-sidebar-left-3.html">Sidebar Left</a></li>
																	<li><a href="<?= base_url(); ?>pagina/blog-sidebar-right-3.html">Sidebar Right</a></li>
																</ul>
															</li>
															<li class="children-menu"><a href="#">Blog Pages</a>
																<ul class="sub-menu">
																	<li><a href="<?= base_url(); ?>pagina/blog-author-3.html">Author</a></li>
																   <li><a href="<?= base_url(); ?>pagina/blog-archive-3.html">Archive</a></li>
																   <li><a href="<?= base_url(); ?>pagina/blog-category-3.html">Category</a></li>
																   <li><a href="<?= base_url(); ?>pagina/blog-tag-3.html">Blog Tag</a></li>
																</ul>
															</li>
															<li class="children-menu"><a href="#">Post Formats</a>
																<ul class="sub-menu">
																	<li><a href="<?= base_url(); ?>pagina/blog-single-3.html">Image Format</a></li>
																	<li><a href="<?= base_url(); ?>pagina/blog-single-post-gallery-3.html">Gallery Format</a></li>
																	<li><a href="<?= base_url(); ?>pagina/blog-single-post-audio-3.html">Audio Format</a></li>
																	<li><a href="<?= base_url(); ?>pagina/blog-single-post-video-3.html">Video Format</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="children-menu"><a href="#">Pages</a>
														<ul class="sub-menu">
															<li><a href="<?= base_url(); ?>pagina/faqs">Frequently Questions</a></li>
															<li><a href="<?= base_url(); ?>pagina/sample-3.html">Sample Page</a></li>
															<li><a href="<?= base_url(); ?>pagina/404-3.html">Error 404</a></li>
														</ul>
													</li>
													<li><a href="<?= base_url(); ?>pagina/about-us-3.html">About Us</a></li>
													<li><a href="<?= base_url(); ?>pagina/contact-3.html">Contact</a></li>
												</ul>
											</nav>
										</div>
									</div>
									<!-- End Mobile Menu -->
								</div>
							</div>
						</div>
						<!-- Nav -->





            <!-- NO BORRAR -->
					</div>
					<!-- End header -->
					<div class="clearfix"></div>
				</div>
				<!-- End Header Container -->
