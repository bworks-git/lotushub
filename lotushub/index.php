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
							<li class="active"><a href="<?php echo $PATH ?>">Home</a></li>
							<li><a href="<?php echo $PATH ?>students.html">Students</a></li>
							<li><a href="<?php echo $PATH ?>courses.html">Courses</a></li>
							<li><a href="<?php echo $PATH ?>training.html">Training</a></li>
							<li><a href="<?php echo $PATH ?>employers.html">Employers</a></li>
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
	<div class="fwid hme_pge clearfix">
		<div class="hm_top_sec clearfix">
			<div class="center">
				<div class="hm_top_blk clearfix">
					<div class="hm_top_banrblk">
					 <!-- Jssor Slider Begin -->
						<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
						<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width:800px; height: 330px; overflow: visible; ">
							
							<!-- Slides Container -->
							<div u="slides" style="cursor:initial; position: absolute; left: 0px; top: 0px; width:800px; height: 330px; overflow: hidden;">
								<div>
									<img u="image" src="images/banner.jpg" /> 
									<!-- div class="hban_desc" >  Treat yourself to a break during your journey - <br/>it's on us! </div -->
								</div>
								<div>
									<img u="image" src="images/banner1.jpg" />  
								</div>	
								<div>
									<img u="image" src="images/banner2.jpg" />           
								</div>	
							</div>
							 
						</div>
						<!-- Jssor Slider End -->
					
					</div>
					<div class="hm_top_rhtblk">
						
						
						 <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider3_container" style="position: relative; top: 0px; left: 0px; width: 220px; height: 300px; overflow: hidden; ">
        
        <!-- Slides Container -->
        <div u="slides" style="cursor: default; position: absolute; left: 0px; top: 0px; width: 220px; height: 300px;  overflow: hidden;">
             <div>			
              <a href="<?php echo $PATH ?>courses.html" title="" class="hm_top_rhtinfo">
					<h5 class="title1">Courses</h5>
					<p class="desc1">Asp.Net - Intermediate Level - By Mohan</p>
					<p class="desc1">PHP - Advanced Level - By Karthikeyan</p>
					<p class="desc1">Core Java - Beginner Level - By Tharun Pranav</p>
					<p class="desc1">Android - Intermediate Level - By Pranit Srivatsa</p>
				</a>     
            </div>
            <div>			
                <a href="<?php echo $PATH ?>workshop.html" class="hm_top_rhtinfo">
					<h5 class="title1">Workshops</h5>
					<p class="desc1">Will be updated shortly..</p>					
				</a>                
          	              
            </div>
            <div>			
               <a href="<?php echo $PATH ?>career.html" title="" class="hm_top_rhtinfo">
					<h5 class="title1">Recruitment</h5>
					<p class="desc1">CSR  with 0-2 years Exp </p>
	
					<p class="desc1">Java/J2EE with 3+ years Exp</p>
		
					<p class="desc1">Node.js Developer with 1+ years Exp</p>
					
					<p class="desc1">Ruby on Rails Developer with 2+ years Exp</p>
					
					<p class="desc1">Tech Support/Product Support with 1-3 years Exp</p>
			
					<p class="desc1">UI/UX Designer with 2+ years Exp </p>
				</a>               
            </div>
          
        </div>
    </div>
    <!-- Jssor Slider End -->
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="hserv_sec clearfix">
			<div class="center">
				<!-- h5 class="title1">Services</h5 -->
				<ul class="hserv_lst lst_blk clearfix">
					<li>
						<div class="box_in">
							<div class="box_lft color1">
								<div class="servbox_lft_blk">
									<h4 class="title2">Students</h4>
									<p class="desc2">Are you ready to enter the workforce and awaiting to plan your career?</p>
								</div>
								<a class="serv_morelnk" href="<?php echo $PATH ?>students.html"><i class="fa fa-plus-circle"></i></a>
							</div>
							<div class="box_rht">
								<img src="images/students.jpg" alt="Students" />
							</div>
						</div>
					</li>
					<li>
						<div class="box_in">
							<div class="box_lft color2">
								<div class="servbox_lft_blk">
									<h4 class="title2">Courses</h4>
									<p class="desc2">We have friendly and passionate trainer to train the students with professional touch.</p>
								</div>
								<a class="serv_morelnk" href="<?php echo $PATH ?>courses.html"><i class="fa fa-plus-circle"></i></a>
							</div>
							<div class="box_rht">
								<img src="images/courses.jpg" alt="Courses" />
							</div>
						</div>
					</li>
					
					<li>
						<div class="box_in">
							<div class="box_lft color3">
								<div class="servbox_lft_blk">
									<h4 class="title2">Training</h4>
									<p class="desc2">Choose the right place for "Training" and get the “Knowledge”.</p>
								</div>
								<a class="serv_morelnk" href="<?php echo $PATH ?>training.html"><i class="fa fa-plus-circle"></i></a>
							</div>
							<div class="box_rht">
								<img src="images/Training.jpg" alt="Training" />
							</div>
						</div>
					</li>
					<li>
						<div class="box_in">
							<div class="box_lft color4">
								<div class="servbox_lft_blk">
									<h4 class="title2">Employers</h4>
									<p class="desc2">Lotus hub have created a pool with trained manpower to support you.</p>
								</div>
								<a class="serv_morelnk" href="<?php echo $PATH ?>employers.html"><i class="fa fa-plus-circle"></i></a>
							</div>
							<div class="box_rht">
								<img src="images/Employers.jpg" alt="Employers" />
							</div>
						</div>
					</li>
					<li>
						<div class="box_in">
							<div class="box_lft color5">
								<div class="servbox_lft_blk">
									<h4 class="title2">Recruitment</h4>
									<p class="desc2">Right Candidate, Right Job at  Right Time is challenge. We Ensure to get your huddles out.</p>
								</div>
								<a class="serv_morelnk" href="<?php echo $PATH ?>recruitment.html"><i class="fa fa-plus-circle"></i></a>
							</div>
							<div class="box_rht">
								<img src="images/Recruitment.jpg" alt="Recruitment" />
							</div>
						</div>
					</li>
					
					<li>
						<div class="box_in">
							<div class="box_lft color6">
								<div class="servbox_lft_blk">
									<h4 class="title2">Career</h4>
									<p class="desc2">Here is the platform for you to implement your innovative ideas.</p>
								</div>
								<a class="serv_morelnk" href="<?php echo $PATH ?>career.html"><i class="fa fa-plus-circle"></i></a>
							</div>
							<div class="box_rht">
								<img src="images/career.jpg" alt="Career" />
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="htestm_sec clearfix">
			<div class="center">
				<div class="htestm_blk">
					<div class="htestm_lftblk">
						<h4 class="title2">About Us</h4>
						<p class="desc2">LotusHub has in place the best training methodology. It has been uniquely conceptualized and designed, based on real-time experience which has been gathered over the years of having worked on diverse and challenging projects. LotusHub provides bunches of trained and Skilled Manpower to the industries as per the requirement & expectations of the client. We are currently based at Bangalore with aspiration to start our branches across South India.</p>
					</div>
					<div class="htestm_rhtblk">
						<h4 class="title2">Why Lotushub ?</h4>
						<p class="desc2">That which delineates LotusHub from the rest is the Passion, Commitment and Dedication
of its founder that has been imbibed in full by an equally receptive team. The team 
believes in going the extra mile, to add a personal touch in all its interactions. It extends 
deep concern in resolving issues to transform the creases into a delightful smile!</p>
						<p class="desc2">Business Intelligence is another unique service we render as a value addition. Our analytics  
has made a difference in many of our projects resulting in efficiency and appreciable increase in turnovers.</p>
						<p class="desc2">LotusHub has a strong and loyal Client base that has been growing from strength to 
strength with each passing year.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="hbot_sec">
			<div class="center">
				<div id="slider2_container" style="position: relative; top: 0px; left: 0px; width:1100px; height: 130px; overflow: visible; ">
			<!-- Slides Container -->
					<div class="tesm_sliderin" u="slides" style="cursor: initial; position: absolute; left: 0px; top: 0px; width:1100px;max-width:100%; height: 130px; overflow: hidden;">
						<div>
							<div class="tesym_slide" >
								<h5 class="title1">Mission</h5>
							<p class="desc1">To create hub to support and grow with all organization by giving trained manpower as per our client requirements.
Human resources are the most important part of business productivity. We are passionate about high- quality and cutting –edge teaching and Learning.</p> 
							</div>
						</div>
						 <div>
							<div class="tesym_slide" >
								<h5 class="title1">Vision</h5>
							<p class="desc1">To perform consistently and deliver value-added services to our Clients with highest 
	level of quality. To be Active, Unique and Creative every day. We help Student’s to 
	be employed by being a Bridge and giving them Training and Skill acquisition.</p>
							</div>
						</div>
					</div>
					<!-- Arrow Left -- >
					<span u="arrowleft" class="jssora02l harw_lft"> </span>
					<!-- Arrow Right -- >
					<span u="arrowright" class="jssora02r harw_rht"> </span>
					<!--#endregion Arrow Navigator Skin End -->   
				</div>
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
				$SlideWidth: 800,  $SlideHeight: 330,  
				$SlideSpacing: 0,  $DisplayPieces: 1,   $ParkingPosition: 0,  $UISearchMode: 1, $PlayOrientation: 1,   $DragOrientation: 3,      
               /*  $CaptionSliderOptions: {  $Class: $JssorCaptionSlider$,  $CaptionTransitions: _CaptionTransitions,    $PlayInMode: 1,      $PlayOutMode: 3  }, */
               /*  $ArrowNavigatorOptions: { $Class: $JssorArrowNavigator$,  $ChanceToShow: 1,  $AutoCenter: 2,   $Steps: 1   } */
            };
            var jssor_slider1 = new $JssorSlider$(containerId, options);                        
           /* function ScaleSlider() {
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
            //responsive code end */
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
            /* function ScaleSlider() {
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
            //responsive code end */
		  };
		   jssor_slider3_starter('slider3_container');
	  </script>
	
</body>
</html>
