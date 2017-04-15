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
                            <!-- {if $recommend_product} -->
                            <!-- {foreach from=$recommend_product name=recommend_product item=product} -->
				<div class="col-md-4 animate-box">
					<a href="{$product.url}" class="item-grid text-center">
						<div class="image" style="background-image: url({$product.image})"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">{$product.name}</h3>
								<h5 class="category">Web Application</h5>
							</div>
						</div>
					</a>
				</div>
                              <!-- {/foreach} -->
                              <!-- {/if} -->
				<div class="col-md-12 text-center animate-box">
					<p><a href="#" class="btn btn-primary with-arrow">View More Projects <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</section>                        