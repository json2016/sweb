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
                            <a class="facebook" href="{$nav_link_list.0.url}" ><i class="iconfont" ></i></a>
                            <a class="twitter" href="{$nav_link_list.1.url}" ><i class="iconfont" ></i></a>
                            <a class="google" href="{$nav_link_list.2.url}" ><i class="iconfont" ></i></a>
                            <a class="youtube" href="{$nav_link_list.3.url}" ><i class="iconfont" ></i></a>
                            <a class="instagram" href="{$nav_link_list.4.url}" ><i class="iconfont" ></i></a>
                            <a class="periscope" href="{$nav_link_list.5.url}" ><i class="iconfont" ></i></a>
                            </div>
                        </div>
                        <div class="links cell" >
                            <div class="linklist " >
                                <h3 ><span >About</span><i class="iconfont" ></i></h3>
                                <ul >
  <!-- {foreach from=$nav_top_list item=nav} --> 
  <li class="" ><a href="{$nav.url}"{if $nav.target} target="_blank"{/if}>{$nav.nav_name}</a></li>
  <!-- {/foreach} -->
                                </ul>
                            </div>
                            <div class="linklist " >
                                <h3 ><span >Support</span><i class="iconfont" ></i></h3>
                                <ul >
<!-- {foreach from=$nav_bottom_list name=nav_bottom_list item=nav} -->
<li class="" ><a href="{$nav.url}">{$nav.nav_name}</a></li>
<!-- {/foreach} -->
                                </ul>
                            </div>
                        </div>
                        <div class="contact cell" >
                            <div class="tels" >
                                <h4 >Call us</h4>
                                <div >
                                    <p >{$site.site_address}</p>
                                </div>
                            </div>
                            <div class="email" >
                                <h4 >Email</h4>
                                <p ><a href="mailto:{$site.email}" >{$site.email}</a></p>
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