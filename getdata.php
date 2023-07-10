<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['email'])
    && isset($_FILES['pdf_file']['name'])) {


	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$weight = $_POST['weight'];
	$file_name = $_FILES['pdf_file']['name'];
	if (isset($_FILES['pdf_file']))
        {
          $file_tmp = $_FILES['pdf_file']['tmp_name'];
		$newname = str_replace(' ', '', $name);
		$file_name = $newname.date("Y-m-d-H-i-s").".pdf";
          move_uploaded_file($file_tmp,"./reports/".$file_name);
		}
		else{
			header("Location: index.php?error=Please select your health report");
	        exit();	
		}
	    $sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=The user with email $email alredy exist");
	        exit();
		}else {
           $sql = "INSERT INTO `users`(`Name`, `age`, `weight`, `email`, `helth-report`) VALUES ('$name', '$age', '$weight', '$email', '$file_name')";
           $result = mysqli_query($conn, $sql);
           if ($result) {
           	 header("Location: index.php?class=success&msg=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: index.php?class=error&msg=unknown error occurred&$user_data");
		        exit();
           }
		}
	
}else{
	#header("Location: index.php");
	echo("error");
	echo "<pre>";
print_r($_FILES);
echo "</pre>";
	exit();
}
#INSERT INTO `users`(`Name`, `age`, `weight`, `email`, `helth-report`,) VALUES ('$name', '$age', '$weight', '$email', '$file_name')