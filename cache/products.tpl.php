<?php /* Smarty version 2.6.26, created on 2017-04-08 17:40:28
         compiled from inc/products.tpl */ ?>
<section class="section-features" id="products">        
<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Products</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
			<div class="row">
                            <?php if ($this->_tpl_vars['recommend_product']): ?>
                            <?php $_from = $this->_tpl_vars['recommend_product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recommend_product'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_product']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['recommend_product']['iteration']++;
?>
				<div class="col-md-4 animate-box">
					<a href="<?php echo $this->_tpl_vars['product']['url']; ?>
" class="item-grid text-center">
						<div class="image" style="background-image: url(<?php echo $this->_tpl_vars['product']['image']; ?>
)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title"><?php echo $this->_tpl_vars['product']['name']; ?>
</h3>
								<h5 class="category">Web Application</h5>
							</div>
						</div>
					</a>
				</div>
                              <?php endforeach; endif; unset($_from); ?>
                              <?php endif; ?>
				<div class="col-md-12 text-center animate-box">
					<p><a href="#" class="btn btn-primary with-arrow">View More Projects <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</section>                        