            <div class="Header clearfix Header-fixed" >
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