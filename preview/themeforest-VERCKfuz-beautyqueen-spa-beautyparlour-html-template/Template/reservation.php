<?php

$errors = '';
$myemail = 'support@themetrading.com';//<-----Put Your email address here.
if(	empty($_POST['date'])  ||
	empty($_POST['time'])  ||
	empty($_POST['guest']) ||
	empty($_POST['treatment']) ||
	empty($_POST['name'])  ||
    empty($_POST['email']) ||
    empty($_POST['phone']) || 
    empty($_POST['address']))
{
    $errors .= "\n Error: all fields are required";
}
$date = $_POST ['date'];
$time = $_POST ['time'];
$guest = $_POST ['guest'];
$treatment = $_POST ['treatment'];
$first = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone']; 
$address = $_POST['address']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail;
	$email_subject = "$treatment";
	$email_body = "You have received a new message from: $first". 
	
	" Here are the details:\n 
	Name: $first,
	Email: $email_address,
	Phone: $phone,
	Date: $date,
	Time: $time,
	Number of Guest: $guest,
	Type of Treatment: $treatment,
	Address: $address";
	
	
	$headers = "From: Beautyqueen <spa@beautyqueen.com>\n";  // Type here where the message has came from
	$headers .= "Reply-To: $email_address";
	
	$send = mail($to,$email_subject,$email_body,$headers);
	if($send)
	{
		echo "success";
	}
	else{
		echo "error";
	}

} 

?>