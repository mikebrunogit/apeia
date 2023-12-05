<?php

session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['acao']) && $_POST['acao']) {
        $cadastro_nome = $_POST["nome"];
        $cadastro_email = $_POST["email"];
        $cadastro_senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $cadastro_numero = $_POST["numero"];
        $userCriado = date("Y-m-d");

        $sql = "INSERT INTO tab_cuidador (cuid_nome, cuid_email, cuid_senha, usuario_criado_em) VALUES ('$cadastro_nome', '$cadastro_email', '$cadastro_senha', '$userCriado')";

        if ($conn->query($sql) === TRUE) {
            echo "<center><br><br>Bem-vindo!";
        } else {
            echo "Erro de cadastro: " . $conn->error;
        }
    } else {
        // Este é o código de login
        $login_email = $_POST["email"];
        $login_senha = $_POST["senha"];

        $sql = "SELECT * FROM tab_cuidador WHERE cuid_email = '$login_email' LIMIT 1";
        $result = $conn->query($sql) or die($mysqli->error);

        $usuario = $result->fetch_assoc();

        if(password_verify($login_senha, $usuario['cuid_senha'])){
            echo "usuário logado!";
        }else{
            header('Location: loginCuidador.php');
        }
    }
}
$conn->close();
?>
