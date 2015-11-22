<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="shortcut icon" href="#">
<title><?php echo lang('safe_camp')?></title>


<link rel="stylesheet"  href="/assets/FrontEnd/css/normalize.css" type="text/css" media="all">
<link rel="stylesheet"  href="/assets/FrontEnd/fonts/font-awesome/css/font-awesome.min.css" type="text/css" media="all">
<link rel="stylesheet"  href="/assets/FrontEnd/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet"  href="/assets/FrontEnd/css/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet"  href="/assets/FrontEnd/css/owl.theme.css" type="text/css" media="all">
<link rel="stylesheet"  href="/assets/FrontEnd/css/owl.transitions.css" type="text/css" media="all">
<script type="text/javascript" src="/assets/FrontEnd/js/jquery.js"></script>
<script type="text/javascript" src="/assets/FrontEnd/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/assets/FrontEnd/js/owl.carousel.min.js"></script>

<link href="/assets/FrontEnd/css/metro-icons.css" rel="stylesheet">
<!-- <link href="css/metro-bootstrap.css" rel="stylesheet"> -->
<link href="/assets/FrontEnd/css/metro.css" rel="stylesheet">


<link rel="stylesheet"  href="/assets/FrontEnd/css/style.css" type="text/css" media="all">
    <script src="/assets/FrontEnd/js/jquery(1).js"></script>
    <script src="/assets/FrontEnd/js/main.js"></script>
    <script src="/assets/FrontEnd/js/metro.js"></script>
</head>

<body class="metro">
<header>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand">Title</a> -->
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class=""><a href="/"><?php echo lang('safe_camp')?></a></li>
					<li><a href="<?php echo site_url()?>Orders/orderLogin"><?php echo lang('my_order')?></a></li>
<!--					<li><a href="orderlogin.php#">--><?php //echo lang('my_order')?><!--</a></li>-->
					<li class="dropdown">
						<a href="#" class="" data-toggle="dropdown">Languages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href='<?php echo site_url(); ?>LanguageSwitch/switchLanguage/french'>French</a></li>
							<li><a href='<?php echo site_url(); ?>LanguageSwitch/switchLanguage/english'>English</a></li>
							<li><a href='<?php echo site_url(); ?>LanguageSwitch/switchLanguage/spanish'>Spanish</a></li>
							
						</ul>
					</li>
				</ul>
                <ul class="nav navbar-nav">
                        <?php if(!empty($_SESSION['user_id'])) {?>
					<li><a href="<?php echo site_url(); ?>auth/logout"><?php echo lang('logout')?></a></li>
                    <?php }?>

				</ul>
                <!--<ul class="nav navbar-nav">
                    <div id="infoMessage"><?php /*echo $message;*/?></div>

				</ul>-->

				<ul class="nav navbar-nav navbar-right">
					
					<li class="dropdown">
						<a href="#" class="" data-toggle="dropdown"><?php echo lang('enter')?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a id="modal_trigger" href="#modal" class="btn">Login</a></li>
							<li><a id="" href="<?php echo site_url(); ?>Auth/create_user" class="btn">Create new account</a></li>
                            <li><a id="" href="<?php echo site_url(); ?>auth/front_change_password" class="btn">Change Password</a></li>
							
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
			</div>
		</div>
		
	</div>
</header>




       

<div id="modal" class="popupContainer" style="display:none;">
        <header class="popupHeader">
                <span class="header_title">Login To Service</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
        </header>

        <section class="popupBody">
                <!-- Social Login -->
                <div class="social_login">
                        <div class="user_login">


                        <form action="<?php echo site_url(); ?>auth/frontEndLogin" method="post">
                                <label>Email / Username</label>
                                <span class="mif-user"></span>
                                <input type="text"name="identity">
                                <br>

                                <label>Password</label>
                                <span class="mif-lock"></span>
                                <input type="password" name="password">
                                <br>
                                 <input type="checkbox" name="remember" id="rememberme" value="1" />
                                 <label for="remember">Remember me on this computer</label>


                                <div class="action_btns">

                                <div class="one_half last modal_close">
                                    <input type="submit" class="btn btn_red " value="Login">
                                <a href="#" >Cancel</a></div>
                                </div>
                        </form>

                        <!-- <a href="#" class="forgot_password">Forgot password?</a> -->
                </div>
                </div>

                <!-- Username & Password Login form -->
                
                <!-- Register Form -->
                <div class="user_register">
                        <form>
                                <label>Full Name</label>
                                <input type="text">
                                <br>

                                <label>Email Address</label>
                                <input type="email">
                                <br>

                                <label>Password</label>
                                <input type="password">
                                <br>

                                <div class="checkbox">
                                        <input id="send_updates" type="checkbox">
                                        <label for="send_updates">Send me occasional email updates</label>
                                </div>

            <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
            </div>
                                </form>
                        </div>
                </section>
        </div>

<!-- <div id="modal1" class="popupContainer" style="display:none;">
        <header class="popupHeader">
                <span class="header_title">Login</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
        </header>

        <section class="popupBody">
                <!-- Social Login -->
                <!-- <div class="social_login">
                        <div class="">
                                <a href="#" class="social_box fb">
                                        <span class="icon"><i class="fa fa-facebook"></i></span>
                                        <span class="icon_title">Connect with Facebook</span>

                                </a>

                                <a href="#" class="social_box google">
                                        <span class="icon"><i class="fa fa-google-plus"></i></span>
                                        <span class="icon_title">Connect with Google</span>
                                </a>
                        </div>

                        <div class="centeredText">
                                <span>Or use your Email address</span>
                        </div>

                        <div class="action_btns">
                                <div class="one_half"><a href="#" id="login_form1" class="btn">Login</a></div>
                                <div class="one_half last"><a href="#" id="register_form1" class="btn">Sign up</a></div>
                        </div>
                </div>

                <!-- Username & Password Login form -->
                
               <!--  </section>
        </div> --> 