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
						$mail->SMTPAuth = true;
						$mail->Username = "gnanamoorthi@bworks.in";
						$mail->Password = "bworks25"; 
						$mail->setFrom('gnanamoorthi@bworks.in');
						$mail->addAddress('gnanamoorthi@bworks.in');
						//$mail->addReplyTo($email);
						$mail->Subject = 'Enquiry from Graphlertech - contact us';
						$htmlbody = "This is sample test for mail send" ;		
						$mail->msgHTML($htmlbody); 
						$mail_response = $mail->send(); 
						echo $mail_response;
			
			 if($mail_response){    				
					echo " Your mail submitted to our Helpdesk. We will get you soon.";
				} 
				else {
					echo " Issue found in mail send. Please try again.";
				}	
	
		

						
?>