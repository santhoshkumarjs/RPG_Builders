<?php
	require_once('autoload.php');
	if(isset($_GET['t'])){
		$project_type	=	$_GET['t'];
		$title	=	'';
		if($project_type	==	"going"){
			$title	=	"GOING PROJECTS";
		}else if($project_type	==	"upcoming"){
			$title	=	"UPCOMING PROJECTS";
		}else if($project_type	==	"complete"){
			$title	=	"COMPLETE PROJECTS";
		}
		$main_location	=	$main->getLocationDetails($project_type);
		$location_view	=	array_chunk($main_location, 3, true);
	}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Just another WordPress site">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WordPress site</title>
	
	<link rel='stylesheet' id='contact-form-7-css'  href='assets/css/styles.css?ver=4.5.1' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css-css'  href='assets/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css'  href='assets/css/font-awesome.min.css?ver=4.12' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-flaticon-css'  href='assets/css/flaticon.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-animate-css'  href='assets/css/animate.min.css?ver=1.0' type='text/css' media='all' />
	
	<link rel='stylesheet' id='drill-raleway-font-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A300%2C400%2C500%2C600%2C700%2C800%2C900&#038;ver=4.6.10' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
	<link rel='stylesheet' id='drill-main-css-css'  href='assets/css/style_1.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-main-css-css'  href='assets/css/custom.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='drill-responsive-css-css'  href='assets/css/responsive.css?ver=1.0' type='text/css' media='all' />
	
	<link rel='stylesheet' id='drill-root-css-css'  href='assets/css/main_style.css?ver=4.6.10' type='text/css' media='all' />
	
	<script type='text/javascript' src='assets/js/jquery.js?ver=1.12.4'></script>

	
<style>

</style>


</head>
<body>
	<!-- FIXED MENU BAR START -->
	<!-- Index Page Layout -->
	<!--
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
				<div class="object" id="object_five"></div>
				<div class="object" id="object_six"></div>
				<div class="object" id="object_seven"></div>
				<div class="object" id="object_eight"></div>
				<div class="object" id="object_big"></div>
			</div>
		</div>
	</div>-->
	
	<header>
		<?php include 'header.php';?>
	</header>
	  
	<div class="container-fluid drill-wrapper">
		<div class="row">
			<!-- HEADER -->
			<div class="container-fluid drill-other-header" style="background: url(assets/images/project_bg.jpg) no-repeat top center fixed; background-size: cover;">
				<div class="row">
					<div class="container other-header-content">
						<ul id="crumbs" class="drill-track">
							<li><a href="index.html" class="drill-txt-p">home</a></li>
							<li><a href="all_project.html" class="drill-txt-p"> &nbsp;Projects</a> </li>
						</ul>
						<div class="drill-txt-lg">
							<h2> Projects </h2>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER END -->
			
			
			<div>
			<div class="clr section-divider"></div>
			<div class="container">
				<div class="row">
					<div class="drill-txt-lg dtl-center title_bg_content">
						<h2 class=""><?php echo $title; ?></h2>
					</div>
					<div class="recommended_items box-shadow padd0">
						
						<?php
						  foreach($location_view as $chunk_index => $main_val){ 
						    echo '<div class="portfolio-items isotopeWrapper" id="4"><!--clearfix-->';
						  foreach($main_val as $index => $values){
							  $imgpath	=	LOCATION_IMG_PATH.$values['img'];
							  $pro_location	=	$values['name'];
							  $project_count	=	$values['count'];
						 ?>
							<article class="col-md-4 col-sm-6 isotopeItem wow bounceIn">
								<a href="project.php?q=<?php echo $index;?>&s=<?php echo $project_type; ?>">
									<div class="portfolio-item">
										<div data-animation-delay="4.8s">
											<img src=<?php echo $imgpath; ?> alt="" />
										</div>
										<div class="caption-text">
											<h3 style="margin:0px;"><?php echo $pro_location; ?></h3>
										</div>
										<div class="portfolio-desc-product padtopleft">
											<div class="folio-info">
												<h5><?php echo $pro_location; ?></h5>
												<p><?php echo $project_count; ?> Projects</p>
											</div>
										</div>
									</div>
								</a>
							</article>
						  <?php } echo '</div>'; } ?>
							

					</div>
				</div>
			</div>
			
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</div>
</div>

	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
		
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"></div>
	
	<script type='text/javascript' src="assets/js/jquery.1.10.2.js"></script>
	<script type='text/javascript' src="assets/js/bootstrap.3.0.3.min.js"></script>
	
	<!--<script type='text/javascript' src='assets/js/bootstrap.min.js?ver=3.3.5'></script>-->
	<script type='text/javascript' src='assets/js/wow.min.js?ver=1.1.2'></script>
	<script type='text/javascript' src='assets/js/custom.js?ver=1.1.2'></script>
	<script>
	 wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
</body>
</html>