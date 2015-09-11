<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">        
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<title> </title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/media_style.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<?php $PATH = "http://lotushub.bworks.in/"; ?>
	<header>
		<div class="header_out">
			<div class="headerfix">
				<div class="center">
					<div class="logo_blk">
						<a class="logo" href="<?php echo $PATH ?>"><img src="images/logo.png" alt="Lotushub" /></a>
					</div>	
					<div class="head_rht">
						<a class="hresp_icon" href="javascript:;" onclick="$('#hmenuid').slideToggle('Medium');"><i class="fa fa-navicon"></i></a>
						<ul class="hr_menu lst_blk" id="hmenuid">
							<li><a href="<?php echo $PATH ?>">Home</a></li>
							<li><a href="<?php echo $PATH ?>students.html">Students</a></li>
							<li><a href="<?php echo $PATH ?>courses.html">Courses</a></li>
							<li><a href="<?php echo $PATH ?>training.html">Training</a></li>
							<li class="active"><a href="<?php echo $PATH ?>employers.html">Employers</a></li>
							<li><a href="<?php echo $PATH ?>recruitment.html">Recruitment</a></li>
							<li><a href="<?php echo $PATH ?>career.html">Career</a></li>
							<li><a href="<?php echo $PATH ?>workshop.html">Workshop</a></li>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</header>
	
	<section>
	<div class="fwid clearfix">
		<div class="std_baner_sec emplyer_baner clearfix">
			<div class="center">
				<div class="std_banerblk clearfix">
				
					 <!-- Jssor Slider Begin -->
						<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
						<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width:1100px; height: 330px; overflow: visible; ">
							
							<!-- Slides Container -->
							<div u="slides" style="cursor:initial; position: absolute; left: 0px; top: 0px; width:1100px; height: 330px; overflow: hidden;">
								<div>
									<img u="image" src="images/emplloyer_banner.jpg" /> 
									<!-- div class="hban_desc" >  Treat yourself to a break during your journey - <br/>it's on us! </div -->
								</div>
								<div>
									<img u="image" src="images/emplloyer_banner1.jpg" />             
								</div>	
								<div>
									<img u="image" src="images/emplloyer_banner2.jpg" />  
								</div>	
							</div>
							 
						</div>
						<!-- Jssor Slider End -->
					
									
				</div>
			</div>
		</div>
		
		
		<div class="std_icon_sec">
			<div class="center">
					<ul class="stdicon_lst">
						<li><a href="#sales_secid" class="stdicon1">Marketing / Sales Employers</a></li>
						<li><a href="#it_secid" class="stdicon2">IT Employers</a></li>
					</ul>
			</div>
		</div>
	<div class="stdnt_sec itstd_sec clearfix" id="sales_secid">
		<div class="bg2">
			<div class="center">
				<h4 class="title2">Marketting / Sales Employers</h4>				
				<p class="desc1">Lotus hub is the training agencies for the student’s. Our aim and goal is to fulfil the requirements of the students and guide them towards their Right path of success and to achieve their goals. We provide training based on your requirements.. Lotus hub have created the pool with trained manpower to support you and grow with you.</p>
				<p class="desc1">Since, Our students are coming from various back ground, No matter what industry you work in, with our reputation, you are guaranteed to find through us the very best, both in the standard and quality of our work.</p>

			</div>
		</div>
		
		<div class="bg1">
			<div class="center">				
				<h3 class="title1">Our Training</h3>
				<ul class="std_lst">
					<li>We Train our People on Role Plays to Build their Self-Confidence.</li>
					<li>We Train our People on Verbal and Non Verbal Communications.</li>
					<li>We Enhance our People on Product Delievery Skill.</li>
					<li>We Coach our People on Selling Skill’s.</li>
					<li>We Empower People’s Knowledge to Stay with US,</li>
				</ul>
			</div>
		</div>
		
		<div class="bg2">
			<div class="center">
		
				<h4 class="title2">Benefits</h4>
				<ul class="std_lst">
					<li>We provide perfect candidates.</li>
					<li>We reduce your Time.</li>
					<li>We reduced costs for the Training.</li>
					<li>We reduce Attrition.</li>		
				</ul>
				<p class="desc1">Send your requirements to <a href="mailto:hr@lotushub.in"> hr@lotushub.in</a></p>
				<p class="desc1">We also provide <a href="recruitment.html">recruitment</a> services</p>
			</div>
		</div>
	</div>
		
		
	<!--Salles sec  -->
	<!--IT sec  -->
	<div class="stdnt_sec mksal_sec clearfix" id="it_secid">
		<div class="bg1">
			<div class="center">
				<h4 class="title2">IT Employers</h4>
				<p class="desc1">Lotus hub is the training agencies for the student’s. Our aim and goal is to fulfil the requirements of the students and guide them towards their Right path of success and to achieve their goals. 
					We here provide best training Lotus hub have created the pool with trained manpower to support you and grow with you. </p>			
			</div>
		</div>
		
		
			
		<div class="bg2">
			<div class="center">
			<h4 class="title2">Benefits</h4>
				<ul class="std_lst">
					<li>We reduce your time.</li>
					<li>We provide best candidates.</li>
					<li>We Reduced costs for the recruitment.</li>
 				</ul>								
			</div>
		</div>

	</div>
	</section>
	
	<footer>
		
		<div class="foot_top">
			<div class="center">
				<div class="clearfix">
					<div class="ftop_box"> 
						<h6 class="title2"></h6>
						<ul class="ft_menu">
							<li><a href="<?php echo $PATH ?>workshop.html">Workshop</a></li>
							<li><a href="<?php echo $PATH ?>courses.html">Courses</a></li>
							<li><a href="<?php echo $PATH ?>training.html">Training</a></li>
							<li><a href="<?php echo $PATH ?>career.html">Career</a></li>
							<li><a href="<?php echo $PATH ?>recruitment.html">Recruitment</a></li>
						</ul>
					</div>
					<div class="ftop_box"> 
						<h6 class="title2">Follow Us</h6>
						<ul>
							<li><a href="http://www.facebook.com/lotushub.in">Facebook</a></li>
							<li><a href="javascript:;">Google+</a></li>
							<li><a href="javascript:;">Linkedin</a></li>
							<li><a href="javascript:;">Twitter</a></li>
						</ul>
					</div>
					<div class="ftop_box scal_media"> 
						<h6 class="title2">Contact Us</h6>
						<ul>
							<li>G11&12 Ground Floor, AM Plaza,</li>
							<li>89,Old Airport Road HAL,</li>
							<li>Bangalore - 560017</li>
							<li class="ftmail">+91 7760003797</li>
							<li><a class="ftmail" href="mailto:training@lotushub.in">training@lotushub.in</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
				
		
		<div class="ftr_out">
			<div class="center clearfix">
				<p class="cpy_rht">Copyright 2015 <i class="fa fa-copyright"></i> LotusHub</p>
				<p class="desgby">Designed by  <a href="http://bworks.in/" target="_blank" >Bworks Tech Labs</a></p>
			</div>
		</div>
	</footer>
	
	<script type="text/javascript" src="script/jssor.slider.min.js"></script>    
    <script>
        jssor_slider1_starter = function (containerId) {
             var options = {
                $AutoPlay: true,  $AutoPlaySteps: 1,   $AutoPlayInterval: 2000,   $PauseOnHover: 1,  $ArrowKeyNavigation: true, $SlideDuration: 500,  $MinDragOffsetToSlide: 20, 
				$SlideWidth: 1100,  $SlideHeight: 330,  
				$SlideSpacing: 0,  $DisplayPieces: 1,   $ParkingPosition: 0,  $UISearchMode: 1, $PlayOrientation: 1,   $DragOrientation: 3,      
               /*  $CaptionSliderOptions: {  $Class: $JssorCaptionSlider$,  $CaptionTransitions: _CaptionTransitions,    $PlayInMode: 1,      $PlayOutMode: 3  }, */
               /*  $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$,  $ChanceToShow: 1,  $AutoCenter: 2,   $Steps: 1   } */
            };
            var jssor_slider1 = new $JssorSlider$(containerId, options);                        
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 1100));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
          jssor_slider1_starter('slider1_container');
		
		 jQuery(document).ready(function () {
		/* smooth scroll start */
			$('.stdicon_lst li a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
			$('html,body').animate({
			scrollTop: target.offset().top - 70
			}, 2000);
			return false;
			}
			}
			});
			/* smooth scroll end */
		  });
	  </script>
	
</body>
</html>
