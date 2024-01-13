<?php 
	include_once("connect.php");

	if(isset($_POST['userEmail']) && isset($_POST['userPassword'])){
		
		$email = $_POST['userEmail'];
		$password = $_POST['userPassword'];

		$clearInputEmail = $mysqli->real_escape_string($email);
		$clearInputPassword = $mysqli->real_escape_string($password);

		$sql_code = "SELECT * FROM users WHERE email = '$clearInputEmail'";
		$sql_exec = $mysqli->query($sql_code) or die('Erro: ' . $mysqli->error);

		$amount_data = $sql_exec->num_rows;

		if($amount_data == 1){
			$user = $sql_exec->fetch_assoc();
			if(password_verify($clearInputPassword, $user['password'])){
				session_start();
				$_SESSION['id'] = $user['id'];
				header('Location: ../pages_adm/dashboard.php');
				exit(); // Garante que o script pare após o redirecionamento
			} else {
				header('Location: ../pages_adm/login.php?error=data_err');
				exit();
			}
		} else {
			header('Location: ../pages_adm/login.php?error=data_err');
			exit();
		}
	}
?>
