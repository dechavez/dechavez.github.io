<?php
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $purpose = $_POST['purpose'];
    $message = $_POST['message'];
    $from = 'From: ladyschoice'; 
    $to = 'kristine.dechavez@gmail.com'; 
    $subject = 'Hello, Tea Ladies!';
    $human = $_POST['human'];
			
    $body = "From: $name\n Phone: $phonenumber\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<h2 class="teal">Your message has been sent!</h2>';
	} else { 
	    echo '<h2 class="teal">Something went wrong, go back and try again!</h2>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<h2 class="teal">You answered the anti-spam question incorrectly!</h2>';
    }
?>