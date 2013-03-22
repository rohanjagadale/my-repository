<?php
	require_once('db.php');
	$con = new Connection();
	$demoFormVal 	=	clean_data($_POST['demoFormVal']);
	$queAnsData 	=	clean_data($_POST['queAnsData']);
	$sign1Json 		=	clean_data($_POST['sign1Json']);
	$sign1base64 	=	clean_data($_POST['sign1base64']);
	$sign2Json 		=	clean_data($_POST['sign2Json']);
	$sign2base64 	=	clean_data($_POST['sign2base64']);
	
	$Query = "INSERT INTO common_infromation(`key`,`value`) VALUES ('DemographicFormValue','$demoFormVal' ),('ExitInterviewFormValue', '$queAnsData'),('sign1Json', '$sign1Json'),('sign1base64', '$sign1base64'),('sign2Json', '$sign2Json'),('sign2base64', '$sign2base64');";
	$result=mysql_query($Query);
	
	if($result){
		echo "success";
	}else{
		echo "fail";
	}
	
?>
