<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<?php
include "componentes/navbar.php";
?>
<h1>Cadastro de atividades</h1>
<form action="./succesAtividades.php" method="post">
    <div class="mb-3">
    <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Pacientes</label>
  <select class="form-select" id="inputGroupSelect01" name="nome">


            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apeia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
$sql = "SELECT * FROM tab_paciente";
$result = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($result))
{
    $nome = $registro['pac_nome'];
    $idade = $registro['pac_idade'];
    $estagio = $registro['pac_estagio'];
    $identificação = $registro['pac_id'];
    echo '<option value='."$nome".'>'.$nome.'</option>';
    
    
}
echo '</select>';
$conn->close();
?>
 <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Atividade</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="atividade"><br><br>
  <div class="input-group">
  <span class="input-group-text">Descrição</span>
  <textarea class="form-control" aria-label="With textarea" name="descrição"></textarea>
</div>
 </div>
</div>
<button type="submit">Registrar atividade</button>
</body>
</html>