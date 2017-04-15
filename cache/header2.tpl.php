<?php /* Smarty version 2.6.26, created on 2017-04-08 17:40:28
         compiled from inc/header2.tpl */ ?>
            <div class="Header clearfix Header-fixed" >
                <div >
                    <div class="registerTips" ></div>
                    <div class="navigator" >
                        <div class="module-container " >
                            <a href="/" class="logo"><img src="http://127.0.0.1/do/theme/demo/images/logo.png"></a><a class="menu"><i class="iconfont" ></i></a>
                            <ul class="list" >
<?php $_from = $this->_tpl_vars['nav_middle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?> 
<?php if ($this->_tpl_vars['nav']['nav_name'] == 'HOME'): ?><li class="cur" ><?php else: ?><li class="" ><?php endif; ?><a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
"<?php if ($this->_tpl_vars['nav']['target']): ?> target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['nav']['nav_name']; ?>
</a><i class="iconfont" ></i></li>
<?php endforeach; endif; unset($_from); ?>
                                <span ></span></ul>
                               <!-- <li class="search " ><a href="javascript:void(0)" >SEARCH</a><i class="iconfont" ></i></li>-->
                            <div class="mask" ></div>
                            <div class="tools" >
                                <div class="tool search searchInput" >
                                    <form action="/product_category.php" method="get" name="forms">
                                        <input type="search" name="s"><a href='javascript:document.forms.submit();' class="q_forms">
                                        <i class="iconfont"></i></a>
                                    </form>
                                </div><a title="Profile" class="tool member" href="/user" ><i class="iconfont" ></i></a>
                                <a href="/user" title="Search" class="tool search searchBtn" ><i class="iconfont" ></i></a>
                                <a class="tool cart" href="/order/cart" ><i class="iconfont" ></i>
                                <i class="cartCount" id="cartCount">0</i></a></div>
                        </div>
                    </div>
                </div>
            </div>