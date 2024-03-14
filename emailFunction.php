<?php

    require_once "emailPackage.php";
    
    //print_r($_POST);
    file_put_contents("post.log", print_r($_POST, true));

	$emPackage = new emailPackage;

	$emPackage->AddRecipiant("BCC", "Matt Smith<matt@internetimagineering.com>");
	
	$emPackage->AddHeader("Content-type", "text/html");
	$emPackage->AddHeader("From", "matt@internetimagineering.com");
	$emPackage->AddHeader("Return-path", "matt@internetimagineering.com");
	$emPackage->AddHeader("MIME-Version", "1.0");

	$body = $_POST['email'];
	$emPackage->AddBody($body);
	
	echo $emPackage->GetEmailString();
	//$emPackage->Send();

?>
