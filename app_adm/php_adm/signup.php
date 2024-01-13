<?php 

	include_once("connect.php");

	if(isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPassword'])){

		$name = $_POST['userName'];
		$email = $_POST['userEmail'];
		$password = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

			header('Location: ../pages_adm/register.php?error=email_err');
			exit();
		}

		if(!preg_match("/^[a-zA-Z]*$/", $name)){

			header('Location: ../pages_adm/register.php?error=name_err');
			exit();
		}

		if(strlen($_POST['userPassword']) < 8){

			header('Location: ../pages_adm/register.php?error=password_err');
			exit();
		}

		$checkDuplicate = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
		if($checkDuplicate->num_rows > 0){
			
			header('Location: ../pages_adm/register.php?error=dupeemail_err');
			exit(); 
		}

		$stmt = $mysqli->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $password);
		$stmt->execute();
		$stmt->close();

	}

	header('Location: ../pages_adm/login.php');

?>