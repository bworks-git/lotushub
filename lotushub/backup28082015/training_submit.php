<?php
							
		$name = $email = $phone = $college = $city =  $message = "";
		if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["contact"]) && !empty($_POST["college"]) && !empty($_POST["city"]) && !empty($_POST["message"]) )
		{
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name"]);
			  $email = test_input($_POST["email"]);
			  $phone = test_input($_POST["contact"]);
			  $college = test_input($_POST["college"]);
			  $city = test_input($_POST["city"]);
			  $message = test_input($_POST["message"]);
			  				
				$to = "gnanamoorthi@bworks.in";
				$subject = "Enquiry from Lotushub - Training Page"; 
				$txt = "Name :" . $name . "\r\n\r\n  <br/>" . "Email :" . $email ." \r\n\r\n  <br/> " . "Phone :" . $phone ." \r\n\r\n  <br/> "   .  " College :" .  $college  ." \r\n\r\n  <br/> " . " City :" .  $city  ." \r\n\r\n  <br/> " . " Message :" .  $message  ." \r\n\r\n  <br/> "   ;
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= 'From: '.$email.'';				
				 $mail_response = mail($to,$subject,$txt,$headers);
				 echo "<br/>" . $txt;
				 echo "<br/>" . $mail_response;
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