<?php
							
		$name = $email = $phone = $worktime = $domain = $experience = "";
		if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["contact"]) && !empty($_POST["domain"]) && !empty($_POST["worktime"]) && !empty($_POST["experience"]) )
		{			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name"]);
			  $email = test_input($_POST["email"]);
			  $phone = test_input($_POST["contact"]);
			  $worktime = test_input($_POST["worktime"]);
			  $domain = test_input($_POST["domain"]);
			  $experience = test_input($_POST["experience"]);
			  				
				$to = "gnanamoorthi@bworks.in";
				$subject = "Enquiry from Lotushub - Career Page"; 
				$txt = "Name :" . $name . "\r\n\r\n  <br/>" . "Email :" . $email ." \r\n\r\n  <br/> " . "Phone :" . $phone ." \r\n\r\n  <br/> "  . " Employee Behavior :" .  $worktime  ." \r\n\r\n  <br/> "  . " Domain / Position In :" .  $domain  ." \r\n\r\n  <br/> " . " Experience :" .  $experience  ." \r\n\r\n  <br/> "   ;
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
						
?>