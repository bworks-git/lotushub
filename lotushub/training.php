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
							<li class="active"><a href="<?php echo $PATH ?>training.html">Training</a></li>
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
									<img u="image" src="images/training_banner.jpg" /> 
									<!-- div class="hban_desc" >  Treat yourself to a break during your journey - <br/>it's on us! </div -->
								</div>
								<div>
									<img u="image" src="images/training_banner1.jpg" />             
								</div>	
								<div>
									<img u="image" src="images/training_banner2.jpg" />  
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
						<li><a href="#classtrain_id" class="stdicon1">Class room Training</a></li>
						<li><a href="#campustrain_id" class="stdicon2">Campus Training</a></li>
						<li><a href="#it_secid" class="stdicon3">Corporate Training</a></li>
					</ul>
			</div>
		</div>
	<div class="stdnt_sec itstd_sec clearfix" id="classtrain_id">
		<div class="bg2">
			<div class="center">
				<h4 class="title2">Class room Training</h4>				
				<p class="desc1">We at lotus hub provide a strong foundation for technology. We have passionate trainer to train the students. Our trainer friendly approach to the student’s will ensure, All the Students will be Involved and start focusing more on the class rooms. We also feel that theoretical knowledge is not enough, so we will focus more and provide students Hands-on-Experience in the training.</p>
				<p class="desc1">To know more <a href="students.html">Click here</a></p>
			</div>
		</div>
	</div>
	<div class="stdnt_sec mksal_sec clearfix" id="campustrain_id">	
		<div class="bg1">
			<div class="center">				
				<h3 class="title1">Campus Training</h3>
				<!-- h4 class="title2">On Campus Training<h4 -->
				<p class="desc1">College Campus Training programs are conducted by the expert team from the lotus hub. We train your students based on the requirement of the management and we will Ensure, all our students are getting adequate knowledge from the training.
We do Technical Training, Soft Skill training, Placement training.</p>

			</div>
		</div>
		
		<div class="bg2">
			<div class="center">		
				<h4 class="title2">Benefits</h4>
				<ul class="std_lst">
					<li>Students are empowered with the Knowledge from the campus.</li>
					<li>Students money is saved in the campus then the off campus training.</li>
					<li>Expert trainers take training program.</li>
					<li>Students get the more confidence to compete in the interview.</li>			
				</ul>
				<p class="desc1">Please mail your queries to <a href="mailto:training@lotushub.in">training@lotushub.in</a></p>
			</div>
		</div>
		
		<?php /* div class="bg1">
			<div class="center">				
				<div class="cntct_blk train_form">					
					<div class="clearfix form_blk">
						<h3 class="title1">On Campus Training Form</h3>
						<form id="cntct_form" name="conatct_us" method="post" enctype="multipart/form-data" >
							<ul class="lst_blk two">
								<li><input type="text" name="name" id="form_name" placeholder="Name" required/></li>
								<li><input type="email" name="email" id="form_mailid" placeholder="Email" required/></li>
								<li><input type="text" name="phone" id="form_phone" placeholder="Phone" required/></li>
								<li><input type="text" name="college" id="form_college" placeholder="College" required/></li>					
								<li><input type="text" name="city" id="form_city" placeholder="City" required/></li>
								<li><textarea name="message" id="form_message" placeholder="Queries" required></textarea></li>							
								<li>
									<div class="input_line captcha_blk">
										<span id="capt_val"></span>
										<input type="text" id="capt_inpt" name="captcha" placeholder="Enter Captcha" maxlength="5" required />								
									</div>
								</li>
								<li>
									<div class="submt_blk">
										<input class="sbt_btn" type="submit" name="submit" onclick="javascript:vald_form();return false;" value="submit" />										
									</div>
								</li>
							</ul>
						</form>
					</div>					
				</div>
			</div>
		</div */ ?>
		
	</div>		
		
	<!--Salles sec  -->
	<!--IT sec  -->
	<div class="stdnt_sec corp_sec clearfix" id="it_secid">
		<div class="bg1">
			<div class="center">
				<h4 class="title2">Corporate Training</h4>
				<p class="desc1">We believe corporate training is very essential and mandatory in this changing world. This training will help our current employee to bring psychological changes in their mind, motivate them and change the Attitude and Behaviour. To overcome the situation most of the corporate give soft skill training to their Employees </p>			
				<p class="desc1">We at lotus hub have very strong and experienced soft skill trainers to support you and grow.
				 Please mail your queries to <a href="mailto:training@lotushub.in">training@lotushub.in</a></p>			
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
		 /* for captcha */
		$('#capt_val').text(Math.floor(Math.random() * 99999) + 1);
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
		   function vald_form() { //alert('called');			
			/* submission */
			var name = document.getElementById("form_name").value;
			var email = document.getElementById("form_mailid").value;
			var contact = document.getElementById("form_phone").value;
			var college = document.getElementById("form_college").value;
			var city = document.getElementById("form_city").value;
			var message = document.getElementById("form_message").value;
			
			var dataString = 'name=' + name + '&email=' + email + '&contact=' + contact +  '&college=' + college + '&city=' + city+ '&message=' + message ;
			if (name == '' || email == '' || contact == '' || college == '' || city == '' || message == '')
			{
				alert("Please Fill All Fields");
				return false;
			} 
			var capt_gen = parseInt($('#capt_val').text());
			var capt_inpt = parseInt($('#capt_inpt').val());			
			if(capt_inpt == capt_gen) { 
										$.ajax({
											type: "POST",
											url: "training_submit.php",
											data: dataString,
											cache: false,
											success: function(html) {
												alert(html);
											}
										}); 
										return false;
									}					
					else { alert("Enter Captcha Correctly"); return false;}				
				return false;
			}
	  </script>
	
</body>
</html>