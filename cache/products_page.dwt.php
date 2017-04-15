<?php /* Smarty version 2.6.26, created on 2017-04-08 18:01:44
         compiled from products_page.dwt */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="stylesheet" href="http://127.0.0.1/do/theme/demo/images/main.css">
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
	<link rel="stylesheet" href="http://127.0.0.1/do/theme/demo/images/assets/css/sangarSlider.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://127.0.0.1/do/theme/demo/images/assets/themes/default/default.css" type="text/css" media="all">
	<!--[if IE]>
		<script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body class="">
    <div id="app">
        <div id="container" >
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div class="Product" data-reactid=".a.1">
   <div class="Empty" id="" data-reactid=".a.1.0"></div>
   <div class="module-container" data-reactid=".a.1.2">
    <div class="page-crumbs" data-reactid=".a.1.2.0">
     <div class="wrapper" data-reactid=".a.1.2.0.0">
     </div>
    </div>
    <ul class="prod-viewport" data-reactid=".a.1.2.1">
     <li class="prod-overview clearfix" itemscope="" itemtype="http://schema.org/Product" data-reactid=".a.1.2.1.0">
      <div class="Carousel" data-reactid=".a.1.2.1.0.0">

       <div style="max-width:600px; width:100%; max-height:700px; height:auto;">
            <div class='sangar-slideshow-container' id='sangar-example'>
                <div class='sangar-content-wrapper' style='display:none;'>			
                    <div class='sangar-content'><img src="<?php echo $this->_tpl_vars['product']['image']; ?>
"/></div>
                    <?php if ($this->_tpl_vars['product']['i2']): ?><div class='sangar-content'><img src="/do/<?php echo $this->_tpl_vars['product']['i2']; ?>
"/></div><?php endif; ?> 
                    <?php if ($this->_tpl_vars['product']['i3']): ?><div class='sangar-content'><img src="/do/<?php echo $this->_tpl_vars['product']['i3']; ?>
"/></div><?php endif; ?> 
                    <?php if ($this->_tpl_vars['product']['i4']): ?><div class='sangar-content'><img src="/do/<?php echo $this->_tpl_vars['product']['i4']; ?>
"/></div><?php endif; ?> 
                    <?php if ($this->_tpl_vars['product']['i5']): ?><div class='sangar-content'><img src="/do/<?php echo $this->_tpl_vars['product']['i5']; ?>
"/></div><?php endif; ?> 
                    <?php if ($this->_tpl_vars['product']['i6']): ?><div class='sangar-content'><img src="/do/<?php echo $this->_tpl_vars['product']['i6']; ?>
"/></div><?php endif; ?> 
                    <?php if ($this->_tpl_vars['product']['i7']): ?><div class='sangar-content'><img src="/do/<?php echo $this->_tpl_vars['product']['i7']; ?>
"/></div><?php endif; ?> 
                    <?php if ($this->_tpl_vars['product']['i8']): ?><div class='sangar-content'><img src="/do/<?php echo $this->_tpl_vars['product']['i8']; ?>
"/></div><?php endif; ?> 
                    <?php if ($this->_tpl_vars['product']['i9']): ?><div class='sangar-content'><img src="/do/<?php echo $this->_tpl_vars['product']['i9']; ?>
"/></div><?php endif; ?> 
				</div>
			</div>	
       </div>
      </div>
      <div class="Information" id="information" data-reactid=".a.1.2.1.0.1">
       <div class="title" itemprop="name" data-reactid=".a.1.2.1.0.1.1">
        <?php echo $this->_tpl_vars['product']['name']; ?>

       </div>
        <div class="description" itemprop="description">
            <?php echo $this->_tpl_vars['product']['title']; ?>

        </div>
       <div style="display:none;">
              <?php $_from = $this->_tpl_vars['defined']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['defined'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['defined']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['defined']):
        $this->_foreach['defined']['iteration']++;
?>
              <?php echo $this->_tpl_vars['defined']['arr']; ?>
：<?php echo $this->_tpl_vars['defined']['value']; ?>

              <?php endforeach; endif; unset($_from); ?>
       </div>

      <div class="review" itemprop="aggregateRating" itemscope="" data-reactid=".a.1.2.1.0.1.2">
        <span class="average" itemprop="ratingValue" data-reactid=".a.1.2.1.0.1.2.1">4.4</span>
        <span data-reactid=".a.1.2.1.0.1.2.2.0"><span itemprop="reviewCount"><?php echo $this->_tpl_vars['product']['click']; ?>
</span> Reviews</span>
       </div>
       <div class="price" data-reactid=".a.1.2.1.0.1.4">
        <span class="price" data-reactid=".a.1.2.1.0.1.4.0"><span class="newPrice" data-reactid=".a.1.2.1.0.1.4.0.0"><span itemprop="priceCurrency" content="USD" data-reactid=".a.1.2.1.0.1.4.0.0.0"></span><span itemprop="price" data-reactid=".a.1.2.1.0.1.4.0.0.1"><?php echo $this->_tpl_vars['product']['price']; ?>
</span></span><span class="oldPrice" data-reactid=".a.1.2.1.0.1.4.0.1"></span></span>
        <span data-reactid=".a.1.2.1.0.1.4.1"></span>
       </div>
       <dl class="color" data-reactid=".a.1.2.1.0.1.5" >
        <dt data-reactid=".a.1.2.1.0.1.5.0">
         <span data-reactid=".a.1.2.1.0.1.5.0.0">Color</span>
         <span data-reactid=".a.1.2.1.0.1.5.0.1">:</span>
        </dt>
        <dd class="cur" style="background-color:<?php echo $this->_tpl_vars['product']['color']; ?>
">
         <img src="http://127.0.0.1/do/theme/demo/images/color.png"/>
        </dd>
       </dl>
<form action="<?php echo $this->_tpl_vars['site']['root_url']; ?>
order.php?rec=insert" method="post">

       <div class="quantity" data-reactid=".a.1.2.1.0.1.6">
        <div class="quantity-name" data-reactid=".a.1.2.1.0.1.6.0">
         <span data-reactid=".a.1.2.1.0.1.6.0.0">Quantity</span>
         <span data-reactid=".a.1.2.1.0.1.6.0.1">:</span>
        </div>

        <div class="quantity-number">
         <a class="reduce_2" onclick="changeNumberp('minus')"><i class="iconfont"></i></a>
         <input type="text" value="1" name="number" id="number"/>
         <a class="add_2" onclick="changeNumberp('add')"><i class="iconfont"></i></a>
        </div>

       </div>
    
       <ul class="action" data-reactid=".a.1.2.1.0.1.7">
              <input type="hidden" name="product_id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
" />
           <?php if ($this->_tpl_vars['open']['order']): ?>
           <?php else: ?>
           <?php endif; ?>
              <input type="submit" name="submit" class="store" value="ADD TO CART" />
         <li class="amazon" data-reactid=".a.1.2.1.0.1.7.1:$0"><a href="<?php echo $this->_tpl_vars['product']['keywords']; ?>
" target="_blank" data-reactid=".a.1.2.1.0.1.7.1:$0.0"><span data-reactid=".a.1.2.1.0.1.7.1:$0.0.0">BUY AT AMAZON &nbsp;US</span></a></li>
       </ul>
</form>
<dl class="properties">
		<dt>
			Product Specs:
		</dt>
		<dd data-reactid="185">
			<span>
				<?php echo $this->_tpl_vars['product']['content2']; ?>

            </span>
		</dd>
</dl>

       
       <span data-reactid=".a.1.2.1.0.1.8"></span>
       <div class="share">
        <!--<a href="#" target="_blank"><i class="iconfont" data-reactid=".a.1.2.1.0.1.9.0.0"></i></a>-->
        <a href="https://twitter.com/intent/tweet?text=<?php echo $this->_tpl_vars['product']['name']; ?>
" target="_blank"><i class="iconfont" data-reactid=".a.1.2.1.0.1.9.1.0"></i></a>
       </div>
      </div></li>
     <li class="prod-tabs" id="detail" data-reactid=".a.1.2.1.1">
      <div class="cur_ wrapper " data-reactid=".a.1.2.1.1.0">
       <div class="module-container" data-reactid=".a.1.2.1.1.0.0">
        <span data-reactid=".a.1.2.1.1.0.0.0"><a class="detail" data-reactid=".a.1.2.1.1.0.0.0.0"><?php echo $this->_tpl_vars['lang']['product_content']; ?>
</a>
              

        <span data-reactid=".a.1.2.1.1.0.0.0.3"></span><a class="fixed_cart" data-reactid=".a.1.2.1.1.0.0.0.4"><i class="iconfont" data-reactid=".a.1.2.1.1.0.0.0.4.0"></i></a></span>
       </div>
      </div></li>
     <li class="prod-description viewPC" data-reactid=".a.1.2.1.2">
      <div class="pd-content" data-reactid=".a.1.2.1.2.0">
       <div><?php echo $this->_tpl_vars['product']['content']; ?>
</div>
      </div></li>
     <span data-reactid=".a.1.2.1.3"></span>
    </ul>
   </div>
  </div>
  
 
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>
<script src="http://127.0.0.1/do/theme/demo/images/jquery.js"></script>
<script src="http://127.0.0.1/do/theme/demo/images/jquery.form.js"></script>
<script src="/do/layer/layer.js"></script>


	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/jquery.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/imagesloaded.min.js"></script>
	<!-- jQuery Sangar Slider -->
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarBaseClass.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarSetupLayout.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarSizeAndScale.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarShift.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarSetupBulletNav.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarSetupNavigation.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarSetupSwipeTouch.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarSetupTimer.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarBeforeAfter.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarLock.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarResponsiveClass.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarResetSlider.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider/sangarTextbox.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/do/theme/demo/images/assets/js/sangarSlider.js"></script>
	<script type="text/javascript" src="do/product_js.php?id=<?php echo $this->_tpl_vars['product']['id']; ?>
"></script>
<script src="http://127.0.0.1/do/theme/demo/images/main.js"></script>
</body>
</html>