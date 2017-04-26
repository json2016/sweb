<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="images/images/logos.png" alt=""></a>
					
				</div>
				
				<!-- Navigation Menu -->

				<div class="navbar-collapse collapse" id="men-navigation">
					<ul class="nav navbar-nav navbar-right main-navigation">
						<li><a href="#home">Home</a></li>
                                                <!-- {foreach item = item key = key from = $nav_middle_list} -->
                                                        {if $item.is_index eq 0}
                                                            <li><a href="#{$item.nav_name}" >{$item.nav_name}</a></li>
                                                        {else}
                                                             <li class="dropdown">
                                                                <a href="{$item.url}" class="dropdown-toggle" data-toggle="dropdown">
                                                                    {$item.nav_name} <b class="caret"></b>
                                                                </a>
                                                                <!-- {if $item.child} -->
                                                                    <ul class="dropdown-menu">
                                                                     <!-- {foreach from=$item.child item=child} -->
                                                                     <li><a href="{$child.url}"{if $child.child} class="parent"{/if}>{$child.nav_name}</a> 
                                                                     <!-- {/foreach} -->
                                                                    </ul>
                                                                    <!-- {/if} -->
                                                             </li>
                                                        {/if}
                                                <!-- {/foreach} -->
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

{*<div class="modal fade login" id="loginModal" style="display: none;">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
    		      </div>
		      </div>
</div>    *}                                    
                                        
</header>

