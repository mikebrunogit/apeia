let currentPlayer = 'X';
let gameBoard = ['', '', '', '', '', '', '', '', ''];
let gameActive = true;
const winningCombos = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

const cells = document.querySelectorAll('.cell');
const message = document.getElementById('message');
const restartButton = document.getElementById('restart');

cells.forEach(cell => {
    cell.addEventListener('click', () => {
        if (gameBoard[cell.dataset.cellIndex] === '' && gameActive) {
            gameBoard[cell.dataset.cellIndex] = currentPlayer;
            cell.textContent = currentPlayer;
            cell.style.backgroundColor = currentPlayer === 'X' ? '#ffcc00' : '#ff66cc';

            if (checkWinner(currentPlayer)) {
                message.textContent = `Jogador ${currentPlayer} venceu!`;
                gameActive = false;
            } else if (!gameBoard.includes('')) {
                message.textContent = 'Empate!';
                gameActive = false;
            } else {
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
            }
        }
    });
});

restartButton.addEventListener('click', () => {
    gameBoard = ['', '', '', '', '', '', '', '', ''];
    gameActive = true;
    currentPlayer = 'X';
    cells.forEach(cell => {
        cell.textContent = '';
        cell.style.backgroundColor = '#eee';
    });
    message.textContent = '';
});

function checkWinner(player) {
    for (const combo of winningCombos) {
        const [a, b, c] = combo;
        if (gameBoard[a] === player && gameBoard[b] === player && gameBoard[c] === player) {
            return true;
        }
    }
    return false;
}
