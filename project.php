<?php
	require_once('autoload.php');
	if(isset($_GET['q']) && isset($_GET['s'])){
		$location_id	=	$_GET['q'];
		$project_status	=	$_GET['s'];
		
		$project_q_result	=	$main->getProjectLocation($location_id, $project_status);
		if(!isset($project_q_result['status_code'])){
			$location_name = current($project_q_result)['location_name'];
			$view_result	=	array_chunk($project_q_result, 3, true);
		}else if(isset($project_q_result['status_code'])){
			$status_msg	=	$project_q_result['status_msg'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en-US">
<head><selvi nu oru pona love panuna, ana anga onu sera mudila, avaluku yena putikama pochu last la, ana avala yenaku romba putikum yevalo santa potalum nanga pesma iruka matom
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

	
	<link href="css/responsive.css" rel="stylesheet">

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
							<div class="drill-txt-lg dtl-center title_bg_content price">
							<h2 class=""> <?php echo ucwords($location_name); ?> </h2>
						</div>
						<?php
						  foreach($project_q_result as $first_index => $real_val){
							  $project_id	=	$real_val['project_id'];
							  $no_available	=	$real_val['no_available'];
							  $project_name	=	$real_val['project_name'];
							  $poject_loc	=	$real_val['innerlocation_name'];
							  $poject_sqrt	=	$real_val['sqrft'];
							  if($no_available > 0){
								  $available_msg	=	$no_available." Available";
							  }else{
								  $available_msg	=	"Not Available";
							  }
						?>
						<div class="col-md-4 col-sm-6 col-xs-12 wow bounceIn">
							<div class="grid">
								<div class="product-wrapper" >
									<img class="product-image" src="<?php echo PROJECT_IMG_PATH.$real_val['project_img'];?>" />
									
									<div class="product-overlay">
										<a href="view_project.php?p=<?php echo $project_id; ?>" class="drill-btn btn-center plus-sign"> VIEW DETAILS </a>
									</div>
									
									<div class="available">
										<?php echo $available_msg; ?>
									</div>
								</div>
								<div class="thirdrow">
									<h4><?php echo ucwords($project_name); ?><span class="small pull-right"> <i class="fa fa-th"></i> <?php echo $poject_sqrt; ?> sq ft</span></h4>
									<a href="google.co.in" target="_blank">
										<p><i class="fa fa-map-marker"></i> <?php echo ucwords($poject_loc); ?></p>
									</a>
								</div>
							</div>
						</div>
						  <?php } ?>
						
						

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
	
	<script src="assets/js/jquery.1.10.2.js"></script>
	<script src="assets/js/bootstrap.3.0.3.min.js"></script>
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