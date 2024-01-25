<?php
include_once("connect.php");

if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {

    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    // Não é necessário escapar as variáveis quando se utiliza PDO

    // Utilizando PDO para a consulta
    $sql_code = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql_code);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificando a senha usando password_verify
    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['id'] = $user['id'];
        header('Location: ../pages_adm/dashboard.php');
        exit(); // Garante que o script pare após o redirecionamento
    } else {
        header('Location: ../pages_adm/login.php?error=data_err');
        exit();
    }
}
?>
