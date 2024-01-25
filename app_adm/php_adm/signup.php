<?php
include_once("connect.php");

if (isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPassword'])) {

    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $password = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header('Location: ../pages_adm/register.php?error=email_err');
        exit();
    }

    if (!preg_match("/^[a-zA-Z]*$/", $name)) {

        header('Location: ../pages_adm/register.php?error=name_err');
        exit();
    }

    if (strlen($_POST['userPassword']) < 8) {

        header('Location: ../pages_adm/register.php?error=password_err');
        exit();
    }

    // Verificando duplicidade de e-mail usando PDO
    $checkDuplicateSql = "SELECT * FROM users WHERE email = :email";
    $checkDuplicateStmt = $conn->prepare($checkDuplicateSql);
    $checkDuplicateStmt->bindParam(':email', $email);
    $checkDuplicateStmt->execute();

    if ($checkDuplicateStmt->rowCount() > 0) {

        header('Location: ../pages_adm/register.php?error=dupeemail_err');
        exit();
    }

    // Inserindo usuário usando PDO
    $insertUserSql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    $insertUserStmt = $conn->prepare($insertUserSql);
    $insertUserStmt->bindParam(':name', $name);
    $insertUserStmt->bindParam(':email', $email);
    $insertUserStmt->bindParam(':password', $password);
    $insertUserStmt->execute();
    $insertUserStmt->closeCursor();
}

header('Location: ../pages_adm/login.php');
?>
