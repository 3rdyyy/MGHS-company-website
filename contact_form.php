<?php
include'db.php';
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone_no = $_POST['phone_no'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$query = "INSERT INTO `contact` (`fname`, `lname`, `phone_no`, `email`, `subject`, `message`, date) VALUES ('$fname', '$lname', '$phone_no', '$email', '$subject', '$messge', CURRENT_TIMESTAMP )";
            if(performQuery($query)){
        echo'succes';
    }else{
    	echo'error'
    }
	}
?>