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
							<li><a href="<?php echo $PATH ?>employers.html">Employers</a></li>
							<li><a href="<?php echo $PATH ?>recruitment.html">Recruitment</a></li>
							<li><a href="<?php echo $PATH ?>career.html">Career</a></li>
							<li class="active"><a href="<?php echo $PATH ?>workshop.html">Workshop</a></li>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</header>
	
	<section style="min-height:300px;">
	<div class="fwid clearfix">		
		<div class="center">
				<div class="title1" style="text-align:center;padding:50px 0;"> Will Be Updated Soon!!</div>
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
				$SlideWidth: 800,  $SlideHeight: 330,  
				$SlideSpacing: 0,  $DisplayPieces: 1,   $ParkingPosition: 0,  $UISearchMode: 1, $PlayOrientation: 1,   $DragOrientation: 3,      
               /*  $CaptionSliderOptions: {  $Class: $JssorCaptionSlider$,  $CaptionTransitions: _CaptionTransitions,    $PlayInMode: 1,      $PlayOutMode: 3  }, */
               /*  $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$,  $ChanceToShow: 1,  $AutoCenter: 2,   $Steps: 1   } */
            };
            var jssor_slider1 = new $JssorSlider$(containerId, options);                        
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 800));
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
		  
		  jssor_slider2_starter = function (containerId) {
		   var options1 = { $AutoPlay: true,  $AutoPlaySteps: 1,  $AutoPlayInterval: 3000,   $PauseOnHover: 1, $ArrowKeyNavigation: true,  $SlideDuration: 500, $MinDragOffsetToSlide: 20, 
                /* $SlideWidth: 600, $SlideHeight: 300,  */ $SlideSpacing: 0, 	$DisplayPieces: 1,   $ParkingPosition: 0,  $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 3,  
				/* $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$,  $ChanceToShow: 1, $Steps: 1  } */
            };
			 var jssor_slider2 = new $JssorSlider$(containerId, options1); 
		    };
          jssor_slider2_starter('slider2_container');
		  
		  jssor_slider3_starter = function (containerId) {
            var options = {
                $AutoPlay: true,  
                $AutoPlaySteps: 1, 
                $AutoPlayInterval: 4000,
                $PauseOnHover: 1,
                $ArrowKeyNavigation: true,
                $SlideDuration: 500,
                $MinDragOffsetToSlide: 20,
                //$SlideWidth: 600, 
                //$SlideHeight: 300,
                $SlideSpacing: 5,
                $DisplayPieces: 1,
                $ParkingPosition: 0,
                $UISearchMode: 1,
                $PlayOrientation: 2,
                $DragOrientation: 3,  
            };
		
            var jssor_slider3 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider3.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    var sliderWidth = parentWidth;

                    //keep the slider width no more than 701
                    sliderWidth = Math.min(sliderWidth, 240);

                    jssor_slider3.$ScaleWidth(sliderWidth);
                }
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
		  };
		   jssor_slider3_starter('slider3_container');
	  </script>
	
</body>
</html>
