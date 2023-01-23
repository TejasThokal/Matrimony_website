<?php
session_start();
include 'conn.php';
$email=$_POST["email"];
$pass=$_POST["password"];


$query="SELECT * FROM users WHERE email='$email' AND password='$pass'";
if($result=mysqli_query($conn,$query)){
	if (mysqli_num_rows($result)>0) {
		$row=mysqli_fetch_assoc($result);
		$_SESSION["user_id"]=$row["id"];
		$_SESSION["name"]=$row["name"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["address"]=$row["address"];
		$_SESSION["dob"]=$row["dob"];
		$_SESSION["profile_pic"]=$row["profile_pic"];
		$_SESSION["gender"]=$row["gender"];
		$_SESSION["mobile_no"]=$row["mobile_no"];
		$_SESSION["cast"]=$row["cast"];
		header("Location: explore.php");
		
	}else{
		$_SESSION["msg"]="Incorrect email or password";
		header('Location: login_page.php');
	}
}else{
	echo "Error : ".mysqli_error($conn);
}

?>