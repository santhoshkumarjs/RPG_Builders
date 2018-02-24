<?php
		require_once('autoload.php');
		if(isset($_POST) && $_POST['name'] != ''){
			$name		=	$_POST['name'];
			$mobile		=	$_POST['mobile'];
			$email		=	$_POST['email'];
			$location	=	$_POST['location'];
			$budget		=	$_POST['budget'];
			$message	=	$_POST['message'];
			$enquiry_insert_query	=	"insert into enquiry_form(`name`,`mobile`,`email`,`location`,`budget`,`message`) values ('".$name."','".$mobile."','".$email."','".$location."','".$budget."','".$message."')"; 
			$db_obj->ExecuteQuery($enquiry_insert_query);
			$last_id	=	$db_obj->getLastId();
			if($last_id != ''){
				
				echo "SUCCESS";
			}else{
				echo "ERROR";
			}
		}else{
			echo "ERROR";
		}
?>