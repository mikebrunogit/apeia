<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="./style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>

</head>
<body>
<?php
include "componentes/navbar.php";
?>    


        <h1>registro</h1>
        <form action="index.php" method="post">
            <label> Nome <input name="nome" type="text"> </input></label><br><br>
            <label> Número <input name="numero" type="tel"> </input></label><br><br>
            <label> Email <input name="email" type="email"> </input></label><br><br>
            <label> Senha <input name="senha" type="password"> </input></label><br><br>
            <button type="submit">Registrar</button>
        </form>


</body>
</html>