<?php
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    /*$purpose = $_POST['purpose'];*/
    $message = $_POST['message']; 
    $to = 'kristine.dechavez@gmail.com'; 
    $subject = 'Ladys Choice: New Message';
    $human = $_POST['human'];
	$selection_value = $_POST['selection'];
	
    
$body = "From: $name\n Phone: $phonenumber\n E-Mail: $email\n Purpose: $selection_value\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body)) { 
	    echo '<h2 style="font-family: Arial, sans-serif; color: #333333; font-weight: normal; margin-bottom: 0;">Your message has been sent!</h2><br /><a style="color: #48a691; font-family: Arial, sans-serif; text-transform: uppercase; font-size: 12px; font-weight: bold;" href="http://www.dechavez.com/portfolio_work/ladyschoice/index.html#home">Back to Lady&rsquo;s Choice</a>';
	} else { 
	    echo '<h2 style="font-family: Arial, sans-serif; color: #333333; font-weight: normal; margin-bottom: 0;">Something went wrong, go back and try again!</h2>
		<br /><a style="color: #48a691; font-family: Arial, sans-serif; text-transform: uppercase; font-size: 12px; font-weight: bold;" href="http://www.dechavez.com/portfolio_work/ladyschoice/index.html#contact">Back to Lady&rsquo;s Choice</a>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<h2 style="font-family: Arial, sans-serif; color: #333333; font-weight: normal; margin-bottom: 0;">You answered the anti-spam question incorrectly!</h2>
	<br /><a style="color: #48a691; font-family: Arial, sans-serif; text-transform: uppercase; font-size: 12px; font-weight: bold;" href="http://www.dechavez.com/portfolio_work/ladyschoice/index.html#contact">Back to Lady&rsquo;s Choice</a>';
    }
?>