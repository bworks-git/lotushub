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
	<header>
		<div class="header_out">
			<div class="headerfix">
				<div class="center">
					<div class="logo_blk">
						<a class="logo" href="javascript:;"><img src="images/logo.png" alt="Lotushub" /></a>
						<a class="fixed_logo"><img src="images/logo.png" alt="Lotushub" /></a>
					</div>	
					<div class="head_rht">
						<a class="hresp_icon"></a>
						<ul class="hr_menu lst_blk">
							<li><a href="index.html">Home</a></li>
							<li><a href="students.html">Students</a></li>
							<li><a href="courses.html">Courses</a></li>
							<li><a href="training.html">Training</a></li>
							<li><a href="employers.html">Employers</a></li>
							<li><a href="recruitment.html">Recruitment</a></li>
							<li><a href="career.html">Career</a></li>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</header>
	
	<section>
		<div class="fwid clearfix">
			<div class="clearfix career_pge" >
			<div class="career_banner"> </div>
				<div class="bg1">
					<div class="center">
							<h4 class="title1">Career</h4>		
								<p class="desc1">Lotus hub is the people development organisation. We give training and 100% placement for our students. We maintain very high level process for training and for the recruitments. We will recruit 
								manpower based on the client’s requirements. We will provide quality man power for our clients.</p>

								<p class="desc1">We will ensure that he/she are placed in suitable concern for their desired job. The students of lotus hub are guided towards their right path of success and achieve bright and prosperous position in life. 
								If you have Passion, Talent and want to learn and develop the new generation.</p>

								<p class="desc1">Yes, here is the platform for you to implement your innovative ideas. </p>

								<p class="desc1">Since, our students and clients are coming from various back ground, No matter what industry you work in.We do respect our employee as an employer. We do understand that you are the back bone of this organisation. </p>

								<p class="desc1">But, we are looking for the candidate who take the owner ship and drive the business.Please feel free to login and post your Specialisation in the desire Category..</p>
					</div>
				</div>	
			</div>
		</div>
		
		<!-- Enquiry form start -->
			<a class="enquiry_btn" href="javascript:;" onclick="$('#popup_id').show();">Career</a>
		<div class="clearfix popup_sec" id="popup_id">
			<div class="popup_fade"></div>
			<div class="popup">				
				<div class="cntct_blk popup_in">
					<a class="popup_close" href="javascript:;" onclick="$('#popup_id').hide();">X</a>
					<div class="clearfix form_blk">
						<h2 class="title1">Send Enquiry</h2>
						<form id="cntct_form" name="conatct_us" method="post" enctype="multipart/form-data" >
							<ul class="lst_blk">
								<li><input type="text" name="name" id="form_name" placeholder="Name" required/></li>
								<li><input type="email" name="email" id="form_mailid" placeholder="Email" required/></li>
								<li><input type="text" name="phone" id="form_phone" placeholder="Phone" required/></li>
								<li><input type="text" name="worktime" id="form_worktime" placeholder="Full Time / Part Time / Freelance" required/></li>
								<li><input type="text" name="domain" id="form_domain" placeholder="Domain / Position" required/></li>
								<li><input type="text" name="experience" id="form_experience" placeholder="Years of Experience" required/></li>
								<li><input type="file" name="resume" id="form_resume" /></li>
								<li>
									<div class="input_line captcha_blk">
										<span id="capt_val"></span>
										<input type="text" id="capt_inpt" name="captcha" placeholder="Enter Captcha" maxlength="5" required />								
									</div>
								</li>
								<li>
									<div class="submt_blk">
										<input class="sbt_btn" type="submit" name="submit" onclick="javascript:vald_form();" value="submit" />										
									</div>
								</li>
							</ul>
						</form>
					</div>					
				</div>
			</div>
		</div>
		
		<?php	
						date_default_timezone_set('Etc/UTC');
						require_once 'PHPMailerAutoload.php';	
						$mail = new PHPMailer;	
						$mail->isSMTP();
						$mail->SMTPDebug = 2;
						$mail->Debugoutput = 'html';
						//$mail->Host = "smtp.gmail.com";
						$mail->Host = "localhost";
						//$mail->SMTPSecure = 'ssl';
						//$mail->Port = 587;
						$mail->Port = 25;
						$mail->SMTPAuth = false;
						//$mail->Username = "gnanamoorthi@bworks.in";
						//$mail->Password = ""; 
						$mail->setFrom('gnanamoorthi@bworks.in');						
							
							$name = $email = $phone = $worktime = $domain = $experience = "";
							if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["domain"]) && !empty($_POST["worktime"]) && !empty($_POST["experience"]) )
							{
								
								//echo "inside called";
								// echo "<div>";
								// to send mail through phpmailler
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
								  $name = test_input($_POST["name"]);
								  $email = test_input($_POST["email"]);
								  $phone = test_input($_POST["phone"]);
								  $worktime = test_input($_POST["worktime"]);
								  $domain = test_input($_POST["domain"]);
								  $experience = test_input($_POST["experience"]);
								  
									
									$mail->addAddress('gnanamoorthi@bworks.in');
									$mail->addReplyTo($email);
									$mail->Subject = 'Career file upload from lotushub';
									$htmlbody =  "Name :" . $name . "\r\n\r\n  <br/>" . "Email :" . $email ." \r\n\r\n  <br/> " . "Phone :" . $phone ." \r\n\r\n  <br/> "  . " Employee Behavior :" .  $worktime  ." \r\n\r\n  <br/> "  . " Domain / Position In :" .  $domain  ." \r\n\r\n  <br/> " . " Experience :" .  $experience  ." \r\n\r\n  <br/> "   ;
									
									 if (is_uploaded_file($_FILES['resume']['tmp_name'])) 
										{  // echo "<br/> \r\n File Uploaded Sucess : <br/> \r\n ";
											// file_attach();
											$fileName = $_FILES['resume']['name'];											
											$tmpName  = $_FILES['resume']['tmp_name'];
											$fileSize = $_FILES['resume']['size'][0];
											$fileType = $_FILES['resume']['type'][0];
											$fileexten=explode(".",$fileName);
											 $namef = $fileName.".". $fileType;
											// echo "* * * file name : " . $fileName . " <br/> Temp name : " . $tmpName . " <br/> * * * " ;
											 foreach($fileexten as $gm)
											 {
												$fileext=$gm;
											 }
											$img_ex  = explode(".",strrev($_FILES['resume']['name']));
											$img_ext = strrev($img_ex[0]);
											$image_name =  $fileName.".".$img_ext;
											$image_type = $_FILES['resume']['tmp_name'];
											 $path = $_SERVER["DOCUMENT_ROOT"] . "/upload/"; 												
											 $path = getcwd(). "/upload/";
											// echo "PATH : " . $path;
											$upld_img 	= $path.$fileName;
											 move_uploaded_file($image_type,$upld_img);
											echo "Path : " .$path;
											echo "Uploaded file : " .$upld_img;
											 $mail->addAttachment($upld_img);											
											 // echo "<br/> \n ========== PATH :" . $upld_img . " =================== \n <br/>" ;	
										} 
										 /* else{																					
											echo "Error in file ";
											$fileName = $_FILES['resume']['name'];											
											$tmpName  = $_FILES['resume']['tmp_name'];
											$fileSize = $_FILES['resume']['size'][0];
											$fileType = $_FILES['resume']['type'][0];
											$fileexten=explode(".",$fileName);
											 $namef = $fileName.".". $fileType;
											echo "* * * file name : " . $fileName . " <br/> Temp name : " . $tmpName . " <br/> * * * " ;
										}  */
										$mail->msgHTML($htmlbody); 
										 $mail_response = $mail->send(); 
										 // $mail_response = 1; 
										 // echo "<br/> === </br/>" . $htmlbody . "<br/> === </br/>";
								} 
								 
								 if($mail_response){    
									// echo $txt;
										echo " <div class='mail_sec'> <h2 class='mail_msg'>Your mail submitted to our Helpdesk. We will get you soon.</h2> </div> ";
									} 
									else {
										echo " <div class='mail_sec'> <h2 class='mail_msg'>Issue found in mail send. Please try again.</h2> </div> ";
									}	
							}					
						function test_input($data) {
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  return $data;
						}					
						?>	
		
		<!-- Enquiry form end-->
	</section>
	<footer>
		
		<div class="foot_top">
			<div class="center">
				<div class="clearfix">
					<div class="ftop_box"> 
						<h6 class="title2"></h6>
						<ul class="ft_menu">
							<li><a href="javascript:;">Workshop</a></li>
							<li><a href="courses.html">Courses</a></li>
							<li><a href="training.html">Training</a></li>
							<li><a href="career.html">Career</a></li>
							<li><a href="recruitment.html">Recruitment</a></li>
						</ul>
					</div>
					<div class="ftop_box"> 
						<h6 class="title2">Follow Us</h6>
						<ul>
							<li><a href="http://www.facebook.com/lotushub.in">Facebook</a></li>
							<li><a href="">Google+</a></li>
							<li><a href="">Linkedin</a></li>
							<li><a href="">Twitter</a></li>
						</ul>
					</div>
					<div class="ftop_box scal_media"> 
						<h6 class="title2">Contact Us</h6>
						<ul>
							<li>G11&12 Ground Floor, AM Plaza,</li>
							<li>89,Old Airport Road HAL,</li>
							<li>Bangalore - 560017</li>
							<li class="ftmail">+91 7760003797</li>
							<li><a class="ftmail" href="">lotushub@gmail.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
				
		
		<div class="ftr_out">
			<div class="center clearfix">
				<p class="cpy_rht">Copyright 2015 @ LotusHub</p>
				<a href="http://bworks.in/" target="_blank" class="desgby">Designedby Bworks Tech Lab</a>
			</div>
		</div>
	</footer>
	
    <script>
       	
		 jQuery(document).ready(function () {
		 /* for captcha */
		$('#capt_val').text(Math.floor(Math.random() * 99999) + 1);
		document.getElementById("cntct_form").reset();			
		$('.mail_sec').delay(4000).fadeOut('slow');
		$('.mail_sec').delay(5000).hide(0);
		 $('.servlst_tabmenu_lst > li').click( function(){
				 $(this).addClass('active').siblings().removeClass('active');
				 var indx= $( '.servlst_tabmenu_lst > li' ).index( this ); 
				  $('.servlst_lst > li').eq($(this).index()).addClass('active').siblings().removeClass('active');		
			  });
		/* smooth scroll start */
			$('.stdicon_lst li a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
			$('html,body').animate({
			scrollTop: target.offset().top 
			}, 2000);
			return false;
			}
			}
			});
			/* smooth scroll end */
			/* File upload check */
			$('#form_resume').val('');
			$('#form_resume').change(function(){ 			
			var ext = $(this).val().split('.').pop().toLowerCase();
			//alert(ext);
			 if( ($.inArray(ext, ['pdf','doc','docx']) ) == -1) {
			// if( ($.inArray(ext, ['pdf']) ) == -1) {
				alert('Please upload PDF / doc / docx only!');
				$('#form_resume').val('');				
				return false;
			} 
		});	
			
		  });
		  
		  function vald_form() { //alert('called');			
			/* submission */
			var name = document.getElementById("form_name").value;
			var email = document.getElementById("form_mailid").value;
			var contact = document.getElementById("form_phone").value;
			var worktime = document.getElementById("form_worktime").value;
			var domain = document.getElementById("form_domain").value;
			var experience = document.getElementById("form_experience").value;
			
			if (name == '' || email == '' || contact == '' || worktime == '' || domain == '' || experience == '')
			{
				alert("Please Fill All Fields");
				return false;
			}
			var capt_gen = parseInt($('#capt_val').text());
			var capt_inpt = parseInt($('#capt_inpt').val());			
			if(capt_inpt == capt_gen) { 								
										return true;
									}					
					else { alert("Enter Captcha Correctly"); return false;}				
				return false;
			}
		  
	  </script>
</html>
