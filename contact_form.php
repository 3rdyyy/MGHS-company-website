<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';
include'db.php';
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone_no = $_POST['phone_no'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$query = "INSERT INTO `contact_form` (`fname`, `lname`, `phone_no`, `email`, `subject`, `message`, date) VALUES ('$fname', '$lname', '$phone_no', '$email', '$subject', '$message', CURRENT_TIMESTAMP )";
            if(performQuery($query)){
            	//Create an instance; passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                      //Enable verbose debug output
			    $mail->isSMTP();                                            //Send using SMTP
			    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			    $mail->Username   = 'systemanage42@gmail.com';                     //SMTP username
			    $mail->Password   = 'subkyyzylnahztjq';                               //SMTP password
			    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
			    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			    //Recipients
			    $mail->setFrom ($email, 'FormSubmit');
			    $mail->addAddress($email);   //Add a recipient
			    $body =  '<html>
					    <head>
				  <title>Message</title>
					        <style type="text/css">
					           body { background-color: #ff0000; }
					           .col-md-6{
					           	margin-top:10px;
					           	text-align: left;
					           }
					            .form-control input[type=text]{
					            	margin-right:30px;
					            }
					        </style>
					    </head>
					    <body style="box-shadow: 2px 2px 2px 3px rgba(0,0,0,0.1); ">
					   <center> 
					   <div class="bg" style="background-color:#1d9d74;  text-align:center;  padding:10px;   color: white; font-size:15px; width:50%; height:70px; border: solid #ddd 1px; padding:15px; ">
					    		Someone just submitted a form to your website on MGHS
					    		<p>here is the details:</p>
					    	</div></center>
					        <center><div style="  width:50% ; background-color:white; border: solid #ddd 1px; padding:15px; 	">
				<form >
              <div class="row">
                <div class="col-md-6 form-group">
                <label><strong>First name:</strong></label>
                <label>'.$fname.'</label>
                </div>
                <div class="col-md-6 form-group"  >
                 <label><strong>Last name:</strong></label>
                    <label>'.$lname.'</label>
                </div>
                <div class="col-md-6 form-group">
                 <label><strong>Phone no.:</strong></label>
                 	<label>'.$phone_no.'</label>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label><strong>E-mail Address:</strong></label>
                 	 <label>'.$email.'</label>
                </div>
              <hr>
              <p style="text-align:left;"><strong>Message:</strong> '.$message.'</p>
            </form>
					     
					    </body>
					</html>';

			    //Content
			    $mail->isHTML(true);   
			    $mail->Subject = ("New Contact Form Submitted by: ".$email." \r\n Subject: ".$subject."");
			    $mail->Body = $body;
			    $mail->AltBody = strip_tags($body);

			    $mail->send();
			  
			 
			} catch (Exception $e) {
			  
			}
			          echo "<script>alert('success')</script>" ;
			    }else{
			    	 echo "<script>alert('error')</script>" ;
			    }
				}
			?>