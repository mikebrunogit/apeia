<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
          <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
        <link href="css/page.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>

</head>
<body>
    <?php
include "componentes/navbarLogin.php";
?>
<center><h1>Cadastro de atividades</h1></center>
<form action="./sucessAtividades.php" method="post">

<?php
include 'sql/consultaIdPaciente.php';
?>
 
<button type="submit">Registrar atividade</button>
</form>
</body>
</html>