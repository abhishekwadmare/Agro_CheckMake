<?php
	require '../includes/common.php';
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	$iq="insert into Feedback(name, email, subject, message) values ('$name', '$email', '$subject', '$message')";
	$iqr=mysqli_query($con,$iq) or die(mysqli_error($con));
	header('location: ../index.php');	
?>