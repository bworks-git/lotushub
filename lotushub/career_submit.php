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
							if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["contact"]) && !empty($_POST["domain"]) && !empty($_POST["worktime"]) && !empty($_POST["experience"]) )
							{
								
								echo "inside called";
								// echo "<div>";
								// to send mail through phpmailler
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
								  $name = test_input($_POST["name"]);
								  $email = test_input($_POST["email"]);
								  $phone = test_input($_POST["contact"]);
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
											echo "PATH : " . $path;
											$upld_img 	= $path.$fileName;
											move_uploaded_file($image_type,$upld_img);
											// echo "Path : " .$path;
											// echo "Uploaded file : " .$upld_img;
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
										echo "Your mail submitted to our Helpdesk. We will get you soon.";
									} 
									else {
										echo " Issue found in mail send. Please try again.";
									}	
							}
					/*  else { echo "<h2 class='title1'>No style set</h2>\r\n";
							 $result = ( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["experience"]) );
							echo "RESULT : " . $result ; 
						 }  */
						function test_input($data) {
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  return $data;
						}					
						?>	



<?php /*
							
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
		*/				
?>