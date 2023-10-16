<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" type="text/css" href="adivinha.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
 <?php include "./componentes/navbarLogin.php"; ?>
 <h1>Adivinhe o Número</h1>
    <p>Tente adivinhar o número entre 1 e 100.</p>
    <input type="number" id="guess" class="guessField">
    <input type="submit" value="Enviar Palpite" class="guessSubmit">
    <p class="message"></p>
    <div id="progress-container">
        <div id="progress-bar"></div>
    </div>

    <script src="adivinha.js"></script>
</body>
</html>
