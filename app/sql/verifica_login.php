<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apeia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['acao']) && $_POST['acao'] === 'registro') {
        // Este é o código de registro
        $cadastro_nome = $_POST["nome"];
        $cadastro_email = $_POST["email"];
        $cadastro_senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $cadastro_numero = $_POST["numero"];

        $sql = "INSERT INTO tab_cuidador (cuid_nome, cuid_email, cuid_senha) VALUES ('$cadastro_nome', '$cadastro_email', '$cadastro_senha')";

        if ($conn->query($sql) === TRUE) {
            echo "Cadastro bem-sucedido!";
        } else {
            echo "Erro de cadastro: " . $conn->error;
        }
    } else {
        // Este é o código de login
        $login_email = $_POST["email"];
        $login_senha = $_POST["senha"];

        $sql = "SELECT * FROM tab_cuidador WHERE cuid_email = '$login_email' LIMIT 1";
        $result = $conn->query($sql) or die($mysqli->error);

        $usario = $result->fetch_assoc();

        if(password_verify($login_senha, $usario['cuid_senha'])){
            echo "usuário logado!";
        }else{
            "usuário não logado!";
        }
    }
}
$conn->close();
?>
