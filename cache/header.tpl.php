<?php /* Smarty version 2.6.26, created on 2017-04-08 17:40:28
         compiled from inc/header.tpl */ ?>
<!-- Header -->
<header id="home">

<!-- Over color Image -->
<div class="background-overlay">
	
	<div class="container-header mask">
		
		<!-- Sticky Navigation -->
		<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation">
			<div class="container">
				<div class="navbar-header">
					
					<!-- Logo on Sticky Navigation Bar -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#men-navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="http://127.0.0.1/do/theme/demo/images/images/logos.png" alt=""></a>
					
				</div>
				
				<!-- Navigation Menu -->
				<div class="navbar-collapse collapse" id="men-navigation">
					<ul class="nav navbar-nav navbar-right main-navigation">
						<li><a href="#home">Home</a></li>
                                                <?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                                    <li><a href="#<?php echo $this->_tpl_vars['item']['nav_name']; ?>
"><?php echo $this->_tpl_vars['item']['nav_name']; ?>
</a></li>
                                                <?php endforeach; endif; unset($_from); ?>
																	</ul>
				</div>
				
			</div>
			
		</div>
		
		<!-- End Sticky Navigation -->
		
	</div>
	
	<!-- Welcome -->
	<div class="container mask">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 distance-header">
				
				<h1>
				    <strong>Ridpackrat</strong> - Welcome to ourSite
				</h1>
				<div class="line"></div>
				<p class="sub-heading">
				   we have best products,pls lsdod sdjiosd joixidk jdike kdick ksidek kdiekds
				</p>
				
				<!-- Call To Action Button -->
				<div id="call_to_action-5" class="distance-button">
				
				<a href="#section-about" class="btn standard-button">Read fMore</i>
</a>
				
				</div>
				
			</div>

		</div>
		
	</div>
	<!-- End Welcome -->
	
</div>

</header>