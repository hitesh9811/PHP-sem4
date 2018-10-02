<?php
$email= "justanexample@gmail.com";
$email1= "justanexample.com";
function echeck($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	echo("$email is a valid email address\n");
	} 	else {
  	echo("$email is not a valid email address\n");
	}
}
echeck($email1);
echeck($email);
?>
