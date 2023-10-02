<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
<?php
include "componentes/navbar.php";
?>
        <h1>Cadastro de paciente</h1>
        <form action="./sucessPaciente.php" method="post">
            <label> Nome do paciente <input name="nome" type="text"> </input></label><br><br>
            <label> idade do paciente <input name="idade" type="age"> </input></label><br><br>
            <label> Estagio do paciente <select name="estagio">
  <option value="inicial">inicial</option>
  <option value="Moderado">Moderado</option>
  <option value="Grave">Grave</option>
</select><br><br>
            <button type="submit">Cadastrar</button>
        </form>
    
   
</body>
</html>
</body>
</html>