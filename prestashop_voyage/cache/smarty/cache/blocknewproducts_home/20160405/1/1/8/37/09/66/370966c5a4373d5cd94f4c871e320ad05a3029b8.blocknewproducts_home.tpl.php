<?php /*%%SmartyHeaderCode:22812570387c2268de9-80281276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '370966c5a4373d5cd94f4c871e320ad05a3029b8' => 
    array (
      0 => 'C:\\wamp\\www\\Prestashop_voyage\\prestashop_voyage\\modules\\blocknewproducts\\views\\templates\\hook\\blocknewproducts_home.tpl',
      1 => 1459259732,
      2 => 'file',
    ),
    '0d3ed9ee8554431054269a54ee9f2310843a49e3' => 
    array (
      0 => 'C:\\wamp\\www\\Prestashop_voyage\\prestashop_voyage\\themes\\default-bootstrap\\product-list.tpl',
      1 => 1459259754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22812570387c2268de9-80281276',
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570387c4441ff9_21445563',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570387c4441ff9_21445563')) {function content_570387c4441ff9_21445563($_smarty_tpl) {?>		
									
		
	
	<!-- Products list -->
	<ul id="blocknewproducts" class="product_list grid row blocknewproducts tab-pane">
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 first-in-line last-line first-item-of-tablet-line first-item-of-mobile-line last-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://localhost/prestashop_voyage/prestashop_voyage/index.php?id_product=1&amp;controller=product" title="Italie" itemprop="url">
							<img class="replace-2x img-responsive" src="http://localhost/prestashop_voyage/prestashop_voyage/img/p/fr-default-home_default.jpg" alt="Italie" title="Italie"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
										300,00 €									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																												<span class="unvisible">
																								<link itemprop="availability" href="https://schema.org/InStock" />En stock																					</span>
																		
									
															</div>
																			<a class="new-box" href="http://localhost/prestashop_voyage/prestashop_voyage/index.php?id_product=1&amp;controller=product">
								<span class="new-label">Nouveau</span>
							</a>
																	</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://localhost/prestashop_voyage/prestashop_voyage/index.php?id_product=1&amp;controller=product" title="Italie" itemprop="url" >
							Italie
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						
					</p>
										<div class="content_price">
													
							<span class="price product-price">
								300,00 €							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://localhost/prestashop_voyage/prestashop_voyage/index.php?controller=cart&amp;add=1&amp;id_product=1&amp;token=4084d2cf679ffaf070b2f59c78dcff25" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="1" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://localhost/prestashop_voyage/prestashop_voyage/index.php?id_product=1&amp;controller=product" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
																		<span class="availability">
																	<span class=" label-success">
										En stock									</span>
															</span>
															</div>
							</div><!-- .product-container> -->
		</li>
		</ul>





<?php }} ?>
