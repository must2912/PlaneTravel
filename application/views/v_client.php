<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Xtreme Travel a Travel Agency Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Xtreme Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url("gedang/web/css/bootstrap.css")?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url("gedang/web/css/style.css")?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url("gedang/web/css/styles.css?v=1.6")?>" rel="stylesheet">
<!-- js -->
<script src="<?php echo base_url("gedang/web/js/jquery-1.11.1.min.js")?>"></script>
<script src="<?php echo base_url("gedang/web/js/scripts.js?v=1.7")?>"></script>
<!-- //js -->
<!--FlexSlider-->
		<link rel="stylesheet" href="<?php echo base_url("gedang/web/css/flexslider.css")?>" type="text/css" media="screen" />
		<script defer src="<?php echo base_url("gedang/web/js/jquery.flexslider.js")?>"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<!-- pop-up-script -->
<script src="<?php echo base_url("gedang/web/js/jquery.chocolat.js")?>"></script>
		<link rel="stylesheet" href="<?php echo base_url("gedang/web/css/chocolat.css")?>" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.view-seventh a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<script src="<?php echo base_url("gedang/web/js/easyResponsiveTabs.js")?>" type="text/javascript"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url("gedang/web/js/move-top.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("gedang/web/js/easing.js")?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul class="nav">
						<li><a href="index.html" class="active"> Home</a></li>
						<li><a href="#about" class="scroll"> About</a></li>
						<li><a href="#portfolio" class="menu scroll">Popular Places<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
							<ul class="nav-sub">
								<li><a href="#portfolio" class="scroll">Place 1</a></li>                                             
								<li><a href="#portfolio" class="scroll">Place 2</a></li>																								
								<li><a href="#portfolio" class="scroll">Place 3</a></li> 
							</ul>
							<script>
								$( "li a.menu" ).click(function() {
								$( "ul.nav-sub" ).slideToggle( 300, function() {
								// Animation complete.
								});
								});
							</script>
						<li><a href="#events" class="scroll"> Events</a></li>
						<li><a href="#mail" class="scroll"> Mail us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="head-logo">
					<a href="index.html"><span>X</span>treme Travel<i>Feeling Amazing Tour</i></a>
				</div>
				<div class="top-nav">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="<?php echo base_url("login") ?>" style="color: white">Login/Register</a>
					</div>	
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-info">
			<div class="container">
				<h1>Book Your Best Trip</h1>
				<div class="sap_tabs">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span><i class="glyphicon glyphicon-plane" aria-hidden="true"></i>Flights</span></li>
						  </ul>				  	 
							<div class="resp-tabs-container">
								
								
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
										<div class="flights">
											<div class="reservation">
												<ul>		
													<li  class="span1_of_1 desti1">
														 <div class="book_date">
															 <form>
																<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																<input type="text" placeholder="From" class="typeahead1 input-md form-control tt-input" required="">
															 </form>
														 </div>					
													 </li>
													 <li  class="span1_of_1 desti1">
														 <div class="book_date">
															 <form>
																<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																<input type="text" placeholder="To" class="typeahead1 input-md form-control tt-input" required="">
															 </form>
														 </div>					
													 </li>
													 <div class="clearfix"> </div>
												</ul>
											</div>
											<div class="reservation">
												<ul>	
													 <li  class="span1_of_1">
														 <h5>Departure</h5>
														 <div class="book_date">
														<form>
															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input class="date" id="datepicker" type="date" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">
														 </form>
														 </div>		
													 </li>
													 <li  class="span1_of_1 left">
														 <h5>Return</h5>
														 <div class="book_date">
														<form>
															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input class="date" ty9 id="datepicker" type="date" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">
														 </form>
														 </div>					
													 </li>
													 <div class="clearfix"> </div>
												</ul>
											</div>
											<div class="reservation">
												<ul>
													<li class="span1_of_1 adult">
														 <h5>Traveller</h5>
														 
														 <div class="section_room">
															  <select id="1 Traveller" onchange="change_country(this.value)" class="frm-field required sect1">
																	<option value="null">1 Traveller</option>
																	<option value="null">2 Traveller</option>         
																	<option value="AX">3 Traveller</option>
																	<option value="AX">4 Traveller</option>
																	<option value="AX">5 Traveller</option>
																	<option value="AX">6 Traveller</option>
															  </select>
														 </div>	
													</li>
													<li class="span1_of_1 adult">
															 <h5>Children (0-17)</h5>
															 <div class="section_room">
																  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																		<option value="null">1</option>
																		<option value="null">2</option>         
																		<option value="AX">3</option>
																		<option value="AX">4</option>
																		<option value="AX">5</option>
																		<option value="AX">6</option>
																  </select>
															 </div>	
														</li>
														<li class="span1_of_1 adult">
															 <h5>Class</h5>
															 <div class="section_room">
																  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																		<option value="null">Economy</option>
																		<option value="null">Business</option>     
																  </select>
															 </div>	
														</li>

													<div class="clearfix"> </div>
												</ul>

											</div>
											<div class="reservation">
												<ul>	
													 <li class="span1_of_3">
															<div class="date_btn">
																<form>
																	<input type="submit" value="Search Flights" />
																</form>
															</div>
													 </li>
													 <div class="clearfix"></div>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
				<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
						</script>
				
			</div>
		</div>
	</div>
<!-- //banner -->

<!-- //footer-top -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<ul>
					<li><a href="index.html"><i>X</i>treme Travel</a><span> |</span></li>
					<li><p>The awesome agency. <span>0800 (123) 4567 // Australia 746 PO</span></p></li>
				</ul>
			</div>
			<div class="footer-right">
				<p>© 2016 Xtreme Travel. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>