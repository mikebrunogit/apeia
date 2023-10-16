<?php
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
        $cadastro_senha = $_POST["senha"];
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

        $sql = "SELECT cuid_id, cuid_senha FROM tab_cuidador WHERE cuid_email = '$login_email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($login_senha === $row["cuid_senha"]) {
                echo "Login bem-sucedido!";
            } else {
                echo "Erro de login: Credenciais incorretas.";
            }
        } else {
            echo "Erro de login: Credenciais incorretas.";
        }
    }
}

$conn->close();
?>
