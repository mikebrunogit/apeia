const randomNumber = Math.floor(Math.random() * 100) + 1;
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
        setRestartButton(true); // Habilita o botão de reinício
    } else if (attempts === 10) {
        message.textContent = `Fim de jogo. O número correto era ${randomNumber}.`;
        guessField.disabled = true;
        guessSubmit.disabled = true;
        setRestartButton(true); // Habilita o botão de reinício
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

// Função para habilitar ou desabilitar o botão de reinício
function setRestartButton(enabled) {
    const restartButton = document.getElementById('restart-button');
    restartButton.disabled = !enabled;
}

// Adiciona um listener para o botão de reinício
const restartButton = document.createElement('button');
restartButton.textContent = 'Reiniciar Jogo';
restartButton.id = 'restart-button';
restartButton.disabled = true;
restartButton.addEventListener('click', restartGame);
document.body.appendChild(restartButton);

// Função para reiniciar o jogo
function restartGame() {
    randomNumber = Math.floor(Math.random() * 100) + 1;
    attempts = 0;

    guessField.disabled = false;
    guessSubmit.disabled = false;
    message.textContent = '';
    progressBar.style.width = '0';
    progressBar.style.backgroundColor = 'green';
    setRestartButton(false); // Desabilita o botão de reinício
    guessField.value = '';
}
