<?php /*%%SmartyHeaderCode:150241197956ded505980fd6-27805876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a726fb2df2cb9ec72ad9e78fe8394277e9816fe' => 
    array (
      0 => '/Users/admin/Documents/Sites/Dm_prestashop/prestashop_voyage/prestashop_voyage/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1457443971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150241197956ded505980fd6-27805876',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ded505ac9019_55858018',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ded505ac9019_55858018')) {function content_56ded505ac9019_55858018($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informations</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost:8888/Dm_prestashop/prestashop_voyage/prestashop_voyage/index.php?controller=prices-drop" title="Promotions">
						Promotions
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/Dm_prestashop/prestashop_voyage/prestashop_voyage/index.php?controller=new-products" title="Nouveaux produits">
					Nouveaux produits
				</a>
			</li>
										<li class="item">
					<a href="http://localhost:8888/Dm_prestashop/prestashop_voyage/prestashop_voyage/index.php?controller=best-sales" title="Meilleures ventes">
						Meilleures ventes
					</a>
				</li>
										<li class="item">
					<a href="http://localhost:8888/Dm_prestashop/prestashop_voyage/prestashop_voyage/index.php?controller=stores" title="Nos magasins">
						Nos magasins
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/Dm_prestashop/prestashop_voyage/prestashop_voyage/index.php?controller=contact" title="Contactez-nous">
					Contactez-nous
				</a>
			</li>
															<li class="item">
						<a href="http://localhost:8888/Dm_prestashop/prestashop_voyage/prestashop_voyage/index.php?id_cms=3&amp;controller=cms" title="Conditions d&#039;utilisation">
							Conditions d&#039;utilisation
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8888/Dm_prestashop/prestashop_voyage/prestashop_voyage/index.php?id_cms=4&amp;controller=cms" title="A propos">
							A propos
						</a>
					</li>
													<li>
				<a href="http://localhost:8888/Dm_prestashop/prestashop_voyage/prestashop_voyage/index.php?controller=sitemap" title="sitemap">
					sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
