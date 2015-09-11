
<?php	
						date_default_timezone_set('Etc/UTC');
						require_once 'PHPMailerAutoload.php';	
						$mail = new PHPMailer;	
						$mail->isSMTP();
						$mail->SMTPDebug = 2;
						$mail->Debugoutput = 'html';
						//$mail->Host = "smtp.gmail.com";
						$mail->Host = "localhost";
						// $mail->SMTPSecure = 'ssl';
						//$mail->Port = 587;
						$mail->Port = 25;
						$mail->SMTPAuth = false;
						$mail->setFrom('enquiry@lotushub.in');						
							
							$name = $email = $phone = $experience = $jobseek =  $experience = $city =  $message = "";
							if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["contact"]) && !empty($_POST["jobseek"]) && !empty($_POST["experience"]) && !empty($_POST["city"]) && !empty($_POST["message"]) )
							{
								
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
								  $name = test_input($_POST["name"]);
								  $email = test_input($_POST["email"]);
								  $phone = test_input($_POST["contact"]);
								  $jobseek = test_input($_POST["jobseek"]);
								  $experience = test_input($_POST["experience"]);
								  $city = test_input($_POST["city"]);
								  $message = test_input($_POST["message"]);
								  
									
									$mail->addAddress('hr@lotushub.in');
									$mail->addReplyTo($email);
									$mail->Subject = 'Enquiry from Lotushub from Recruitment';
									$htmlbody = "Name :" . $name . "\r\n\r\n  <br/>" . "Email :" . $email ." \r\n\r\n  <br/> " . "Phone :" . $phone ." \r\n\r\n  <br/> "  . " Employee Job Seeker :" .  $jobseek  ." \r\n\r\n  <br/> "  .  " Experience :" .  $experience  ." \r\n\r\n  <br/> " . " City :" .  $city  ." \r\n\r\n  <br/> " . " Message :" .  $message  ." \r\n\r\n  <br/> "   ;
									$mail->msgHTML($htmlbody); 
										$mail_response = $mail->send(); 
										 // $mail_response = 1; 
										 // echo "<br/> === </br/>" . $htmlbody . "<br/> === </br/>";
										 // echo $htmlbody;
								} 
								 
								 if($mail_response){    									
										echo " Your mail submitted to our Helpdesk. We will get you soon.";
									} 
									else {
										echo "Issue found in mail send. Please try again.";
									}	
							}
						function test_input($data) {
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  return $data;
						}					
						?>	
<?php /*
							
		$name = $email = $phone = $experience = $jobseek =  $experience = $city =  $message = "";
		if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["contact"]) && !empty($_POST["jobseek"]) && !empty($_POST["experience"]) && !empty($_POST["city"]) && !empty($_POST["message"]) )
		{
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name"]);
			  $email = test_input($_POST["email"]);
			  $phone = test_input($_POST["contact"]);
			  $jobseek = test_input($_POST["jobseek"]);
			  $experience = test_input($_POST["experience"]);
			  $city = test_input($_POST["city"]);
			  $message = test_input($_POST["message"]);
			  				
				$to = "gnanamoorthi@bworks.in";
				$subject = "Enquiry from Lotushub - Recruitment Page"; 
				$txt = "Name :" . $name . "\r\n\r\n  <br/>" . "Email :" . $email ." \r\n\r\n  <br/> " . "Phone :" . $phone ." \r\n\r\n  <br/> "  . " Employee Job Seeker :" .  $jobseek  ." \r\n\r\n  <br/> "  .  " Experience :" .  $experience  ." \r\n\r\n  <br/> " . " City :" .  $city  ." \r\n\r\n  <br/> " . " Message :" .  $message  ." \r\n\r\n  <br/> "   ;
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= 'From: '.$email.'';
				
				 $mail_response = mail($to,$subject,$txt,$headers);
			} 
			
			 if($mail_response){    				
					echo " Your mail submitted to our Helpdesk. We will get you soon.";
				} 
				else {
					echo " Issue found in mail send. Please try again.";
				}	
		}
		else{
			echo "Data are invalid";								
		}
		

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}					
	*/					
?>