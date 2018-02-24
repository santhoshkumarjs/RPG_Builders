<?php
	require_once('autoload.php');
	if($_GET['p'] != ''){
		$plot_img_query	=	"select plot_img from project where project_id='".$_GET['p']."'";
		$plot_img_result	=	$db_obj->getResult($plot_img_query);
		$plot_img			=	current($plot_img_result)['plot_img'];
		$project_detail	=	$main->getProjectDetail($_GET['p']);
		
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

	<script src="https://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	
	<script type='text/javascript' src='assets/js/jquery.js?ver=1.12.4'></script>

<style>

.profile_bg p, .profile_bg li {
	line-height: 25px;
	list-style: none;
	padding: 0px !important;
	font-weight: 500;
	color: #606669;
	font-family: 'Raleway', sans-serif;
}

.profile_bg ul {
    padding-left: 40px !important;
	padding: 0px;
}

.profile_bg h5, h5 {
    font-size: 14px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.main_area img{height: 300px !important;}
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
							<li><a href="project.html" class="drill-txt-p"> &nbsp;Projects</a> </li>
						</ul>
						<div class="drill-txt-lg">
							<h2> Projects </h2>
						</div>
					</div>
				</div>
			</div>
			
			<!-- HEADER END -->
			<!--<div class="clr section-divider"></div>-->
			<div id="full-width" class="container-fluid" style="background: #fff;">
				<article id="post-1283" class="post-1283 page type-page status-publish hentry">
					<div class="entry-content">
						<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
										<div class="container drill-service">
											<div class="row">
												<div class="service-head">
													<div class="drill-txt-lg dtl-center title_bg_content service">
														<h2 style="#222e35"> Overview </h2>
													</div>
												</div>
												<div class="clr"></div>
												<div class="">
													<div class="row">
														<div class="col-sm-3">
															<div class="service-list mobi_service">
																<ul class="service-list-group">
																	<li>
																		<a class="service-name" href="#overview" data-toggle="tab">OVERVIEW </a>
																	</li>
																	<li>
																		<a class="service-name" href="#amenities" data-toggle="tab">AMENITIES </a>
																	</li>
																	<li>
																		<a class="service-name" href="#specification" data-toggle="tab">SPECIFICATION </a>
																	</li>
																	<li>
																		<a class="service-name" href="#availability" data-toggle="tab">AVAILABILITY </a>
																	</li>
																	<li>
																		<a class="service-name" href="#plan" data-toggle="tab">PLAN </a>
																	</li>
																	<li>
																		<a class="service-name" href="#location" data-toggle="tab">LOCATION </a>
																	</li>
																</ul>
															</div>
														</div>
														
														<div class="clr visible-xs"></div>
														<div class="col-sm-9 tab-content padtop">
															<div class="tab-pane fade in service-doc row" id="overview">
																<div class="col-sm-12">
																	<h3 class="drill-txt-sm">OVERVIEW</h3>
																	<p class="drill-txt-p"> 
																		<p class="drill-txt-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;sever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
																	</p>
																	<ul>
																		<li><i class="fa fa-arrow-circle-right"></i><span class="drill-txt-p"> Service name will be here </span></li>
																		<li><i class="fa fa-arrow-circle-right"></i><span class="drill-txt-p"> Service name will be here </span></li>
																		<li><i class="fa fa-arrow-circle-right"></i><span class="drill-txt-p"> Service name will be here </span></li>
																	</ul>
																</div>
															</div>
															<div class="tab-pane fade in service-doc row" id="amenities">
																<div class="col-sm-12">
																	<h3 class="drill-txt-sm">AMENITIES</h3>
																	<p class="drill-txt-p"> 
																		<p class="drill-txt-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s</p>
																		<p class="drill-txt-p">ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
																	</p>
																	<ul>
																		<li><i class="fa fa-fighter-jet"></i><span class="drill-txt-p"> Service name will be here </span></li>
																		<li><i class="fa fa-fighter-jet"></i><span class="drill-txt-p"> Service name will be here </span></li>
																		<li><i class="fa fa-fighter-jet"></i><span class="drill-txt-p"> Service name will be here </span></li>
																	</ul>
																	<a href="" class="drill-btn"> LEARN MORE </a>
																</div>
															</div>
															<div class="tab-pane fade in service-doc row" id="location">
																<div class="col-sm-12">
																	<h3 class="drill-txt-sm">LOCATION</h3>
																	<div class="map_bg">
																		<div id="map"></div>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade in service-doc row" id="specification">
																<div class="col-sm-12">
																	<h3 class="drill-txt-sm">SPECIFICATION</h3>
																	<div class="profile_bg">
																		<h5><b>Solo Exhibition – Recent</b></h5>
																		<ul>
																			<li><i class="fa fa-check"></i> Aakriti Art Gallery, Kolkata</li>
																			<li><i class="fa fa-check"></i> Gallery Nvya, New Delhi</li>
																			<li><i class="fa fa-check"></i> Maximasia, Jakarta-Indonesia</li>
																			<li><i class="fa fa-check"></i> Jehangir Art Gallery, Mumbai</li>
																		</ul>
																		<h5><b>Others</b></h5>
																		<ul>
																			<li><i class="fa fa-check"></i> 1986 Academy of Fine Arts, Kolkata</li>
																			<li><i class="fa fa-check"></i> 1989 Pundole Art Gallery, Mumbai</li>
																			<li><i class="fa fa-check"></i> 1991 Display Gallery, New Delhi, organized by Pundole Art Gallery</li>
																			<li><i class="fa fa-check"></i> 1992 Galerie '88, Kolkata</li>
																			<li><i class="fa fa-check"></i> 1993 Galerie '88, Kolkata</li>
																			<li><i class="fa fa-check"></i> 1994 Park Hotel, Kolkata</li>
																			<li><i class="fa fa-check"></i> "Works on Paper", Pundole Art Gallery,</li>
																			<li><i class="fa fa-check"></i> 1995 The Gallery,Chennai</li>
																			<li><i class="fa fa-check"></i> 1996 Crimson, Bangalore</li>
																			<li><i class="fa fa-check"></i> 1997 Art Today, New Delhi</li>
																			<li><i class="fa fa-check"></i> 1998 Jehangir Art Gallery, Mumbai</li>
																			<li><i class="fa fa-check"></i> 2001 Galerie '88, Kolkata</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade in service-doc row" id="availability">
																<div class="col-sm-12">
																	<h3 class="drill-txt-sm">AVAILABILITY</h3>
																	<div class="table-responsive">          
																		<table class="table table-hover table-bordered table-striped">
																			<thead>
																				<tr>
																					<th>S.No</th>
																					<th>PLOT</th>
																					<th>SqFt.</th>
																					<th>Availability</th>
																				</tr>
																			</thead>
																			<tbody>
																			   <?php 
																			   $i = 1;
																			   foreach($project_detail as $pro_ind => $pro_value){
																				   $sno = $i;
																				   $plot = $pro_value['plot'];
																				   $plot_sqrt = $pro_value['plot_sqft'];
																				   $plot_status = $pro_value['plot_status'];
																				   ?>
																																																			<tr>
																					<td><?php echo $sno; ?></td>
																					<td><?php echo $plot; ?></td>
																					<td><?php echo $plot_sqrt; ?></td>
																					<td><?php echo ucfirst($plot_status); ?></td>
																				</tr>
																			   <?php $i++; } ?>

																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade in service-doc row" id="plan">
																<div class="col-md-12">
																	<h3 class="drill-txt-sm">PLAN</h3>
																	<div class="main_area">
																		<img src="<?php echo PROJECT_PLOT_IMG.$plot_img; ?>" alt="" title="" />
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- OUR SERVICE END -->
									<div class="clr"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>
					<!-- .entry-content -->
				</article>
				<!-- #post-## -->
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
	
	<script type='text/javascript' src='assets/js/owl.carousel.min.js?ver=1.3.3'></script>
	<!--<script type='text/javascript' src='assets/js/bootstrap.min.js?ver=3.3.5'></script>-->
	<script type='text/javascript' src='assets/js/slick.min.js?ver=1.5.7'></script>
	<script type='text/javascript' src='assets/js/wow.min.js?ver=1.1.2'></script>
	<script type='text/javascript' src='assets/js/custom.js?ver=1.1.2'></script>
	<script type='text/javascript' src='assets/js/drill.js?ver=1.0'></script>
</body>
</html>