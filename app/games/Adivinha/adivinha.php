<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apeia | Jogo de adivinhação</title>
    <link rel="stylesheet" type="text/css" href="adivinha.css">
    <link rel="icon" type="image/x-icon" href="./app/assets/logoCircle.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
 <?php include "./componentes/navbarLogin.php"; ?>
 
<center>
 <h1>Adivinhe o Número</h1>
    <p>Tente adivinhar o número entre 1 e 100.</p>
    <input type="number" id="guess" class="guessField">
    <input type="submit" value="Enviar Palpite" class="guessSubmit">
    <p class="message"></p>
</center>
    <div id="progress-container">
        <div id="progress-bar"></div>
    </div>

<center>
<button id="restart-button">Reiniciar Jogo</button>
</center>

<script>let randomNumber = Math.floor(Math.random() * 100) + 1;
let attempts = 0;

const guessField = document.getElementById('guess');
const guessSubmit = document.querySelector('.guessSubmit');
const message = document.querySelector('.message');

const progressBar = document.getElementById('progress-bar');

guessSubmit.addEventListener('click', checkGuess);

function checkGuess() {
    const userGuess = parseInt(guessField.value);
    attempts++;

    if (userGuess === randomNumber) {
        message.textContent = `Parabéns! Você acertou em ${attempts} tentativas.`;
        guessField.disabled = true;
        guessSubmit.disabled = true;
    } else {
        const hint = userGuess < randomNumber ? 'Maior' : 'Menor';
        message.textContent = `Tente novamente. Dica: o número é ${hint}.`;

        const difference = Math.abs(randomNumber - userGuess);
        const progressWidth = (100 - difference) + '%';

        let progressColor = 'green';
        if (difference > 20) {
            progressColor = 'red';
        } else if (difference > 10) {
            progressColor = 'orange';
        }

        progressBar.style.width = progressWidth;
        progressBar.style.backgroundColor = progressColor;
    }
}

const restartButton = document.getElementById('restart-button');
restartButton.addEventListener('click', restartGame);

function restartGame() {
    randomNumber = Math.floor(Math.random() * 100) + 1;
    attempts = 0;
    guessField.disabled = false;
    guessSubmit.disabled = false;
    message.textContent = '';
    progressBar.style.width = '0';
    progressBar.style.backgroundColor = 'green';
    guessField.value = '';
}
</script>
</body>
</html>
