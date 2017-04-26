            <div class="Header clearfix " >
                <div >
                    <div class="registerTips" ></div>
                    <div class="navigator" >
                        <div class="module-container " >
                            <a href="/" class="logo"><img src="images/logo.png"></a><a class="menu"><i class="iconfont" ></i></a>
                            <ul class="list" >
<!-- {foreach from=$nav_middle_list item=nav} --> 
<!-- {if $nav.nav_name eq 'HOME'} --><li class="cur" ><!-- {else} --><li class="" ><!-- {/if} --><a href="{$nav.url}"{if $nav.target} target="_blank"{/if}>{$nav.nav_name}</a><i class="iconfont" ></i></li>
<!-- {/foreach} -->
                                <span ></span></ul>
                            <div class="mask" ></div>
                            <div class="tools" >
                                <a title="Profile" href="/user" ><i class="fa fa-user fa-fw"></i></a>
                                <a class="tool cart" href="/order/cart" ><i class="fa fa-shopping-cart" ></i>
                                <i class="fa fa-shopping-cart" id="cartCount">0</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>