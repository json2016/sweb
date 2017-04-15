<?php /* Smarty version 2.6.26, created on 2017-04-08 17:40:28
         compiled from inc/footer2.tpl */ ?>
            <div class="Footer" >
                <div class="Empty" ></div>
                <div class="module-container" >
                    <div class="table" >
                        <div class="cell" >
                            <div class="subscribe " >
<form id="subscribe" method="post" action="subscribe.php">
                                    <h3 >Subscribe</h3>
                                    <p >Be the first to know about our latest products.</p>
                                    <div class="input" >
                                        <input placeholder="Enter your email address" type="text" name="email" id="email">
                                    </div>
                                    <div class="" >
                                    <input type="submit" class="submit" value="SUBMIT" /></div>
</form>
                            </div>
                            <div class="follow" >
                            <a class="facebook" href="<?php echo $this->_tpl_vars['nav_link_list']['0']['url']; ?>
" ><i class="iconfont" ></i></a>
                            <a class="twitter" href="<?php echo $this->_tpl_vars['nav_link_list']['1']['url']; ?>
" ><i class="iconfont" ></i></a>
                            <a class="google" href="<?php echo $this->_tpl_vars['nav_link_list']['2']['url']; ?>
" ><i class="iconfont" ></i></a>
                            <a class="youtube" href="<?php echo $this->_tpl_vars['nav_link_list']['3']['url']; ?>
" ><i class="iconfont" ></i></a>
                            <a class="instagram" href="<?php echo $this->_tpl_vars['nav_link_list']['4']['url']; ?>
" ><i class="iconfont" ></i></a>
                            <a class="periscope" href="<?php echo $this->_tpl_vars['nav_link_list']['5']['url']; ?>
" ><i class="iconfont" ></i></a>
                            </div>
                        </div>
                        <div class="links cell" >
                            <div class="linklist " >
                                <h3 ><span >About</span><i class="iconfont" ></i></h3>
                                <ul >
  <?php $_from = $this->_tpl_vars['nav_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?> 
  <li class="" ><a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
"<?php if ($this->_tpl_vars['nav']['target']): ?> target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['nav']['nav_name']; ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
                                </ul>
                            </div>
                            <div class="linklist " >
                                <h3 ><span >Support</span><i class="iconfont" ></i></h3>
                                <ul >
<?php $_from = $this->_tpl_vars['nav_bottom_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
<li class="" ><a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
"><?php echo $this->_tpl_vars['nav']['nav_name']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="contact cell" >
                            <div class="tels" >
                                <h4 >Call us</h4>
                                <div >
                                    <p ><?php echo $this->_tpl_vars['site']['site_address']; ?>
</p>
                                </div>
                            </div>
                            <div class="email" >
                                <h4 >Email</h4>
                                <p ><a href="mailto:<?php echo $this->_tpl_vars['site']['email']; ?>
" ><?php echo $this->_tpl_vars['site']['email']; ?>
</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix sub" >
                        <p class="copyright" >Copyright © 2016 AUDBOS.COM</p>
                        <div class="country" style="display:none;">
                            <a href="javascript:void(0)" ><img src="" ><span >United States</span></a>
                        </div>
                    </div>
                </div>
                <div class="backTop" ><i class="iconfont" ></i><span >Back to the Top</span></div>
            </div>