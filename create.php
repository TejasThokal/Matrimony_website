<?php
include 'conn.php';
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$gender=$_POST["gender"];
$dob=$_POST["birthday"];
$address=$_POST["address"];
$pass=$_POST["password"];
$cast=$_POST["cast"];



$target_dir = "uploads/";
$img_name=basename($_FILES["profile"]["name"]);
$target_file = $target_dir . basename($_FILES["profile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (!move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
    echo "Error in uploading image";
    exit();
} 

$query="INSERT INTO users(name,profile_pic,email,mobile_no,gender,dob,address,password,cast) VALUES('$name','$img_name','$email','$mobile','$gender','$dob','$address','$pass','$cast')";
if(mysqli_query($conn,$query)){
	    echo '
<script>
  alert("Your ACCOUNT has been created now PRESS OK to LOGIN");
document.location="login_page.php";
</script>';
}else{
	echo "Error : ".mysqli_error($conn);
}

?>