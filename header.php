<?php
echo '
<div class="top_bar">
	<nav>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<ul class="left-topbar">
						<li><a href="mailto:rpg@rpgbuilders.in"><i class="fa fa-envelope"></i> rpg@rpgbuilders.in</a></li>
						<li><a href="tel:+919025121212 "><i class="fa fa-phone"></i> +91 9025121212</a><span class="hidden-sm hidden-xs">&nbsp;&nbsp;|&nbsp;&nbsp;044-48611188</span></li>
					</ul><!--end left-topbar-->
				</div>
				<div class="col-sm-6 tb_right hidden-xs hidden-sm">
					<ul class="social_media padd0 list-inline right-topbar pull-right">
						<li class="circle"><a href="https://www.facebook.com/login/" title="facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
						<li class="circle"><a href="https://twitter.com/login" title="twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
						<li class="circle"><a href="https://plus.google.com/collections/featured" title="google+" target="blank"><i class="fa fa-google-plus"></i></a></li>
						<li class="circle"><a href="https://in.pinterest.com/login/" title="pinterest" target="blank"><i class="fa fa-linkedin"></i></a></li>					
					</ul>
				</div>
			</div>
		</div>
	</nav>
</div>

<nav class="navbar navbar-default menu" data-spy="affix" data-offset-top="50">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/rpg_logo.png" alt="RPG" width="100px"></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav menu_bar">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about-us.php">About us</a></li>
					<li class="test"><a href="services.php">Services</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Projects  <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="all_project.php?t=going">Going Projects</a></li>
							<li><a href="all_project.php?t=upcoming">Upcoming Projects</a></li>
							<li><a href="all_project.php?t=complete">Complete Projects</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact us </a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right enquiry_btn">
				  <li><a href="model.php" data-toggle="modal" data-target="#login-modal" class="drill-btn ">  ENQURIY </a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
';
?>