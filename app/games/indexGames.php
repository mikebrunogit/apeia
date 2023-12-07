<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Apeia | Jogos</title>
	<link href="indexGames.css" rel="stylesheet">
	        <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
			<link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../logoCircle.png" alt="logo" width="30" height="30">
    </a>
  <div class="container-fluid">
    <a class="navbar-brand" href="../dashboard.php">Página inicial</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./app/loginCuidador.php"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="verPacientes.php">Pacientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="./games/indexGames.php">Jogos</a>
        </li>
      
       
         
      </ul>
    </div>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            </li>
            <li class ="nav-login">
                <a class="nav-link" href="logout.php"><button class="btn btn-danger" type="button">Deslogar</button></a>
            </li>
        </ul>
    </div>
</nav>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<br><br>
<center>
	<h1>Xadrez <span>&#9822;</span></h1>
  <p class="destaque">Jogar xadrez é uma excelente estimulação cognitiva!</p>
  <p>O xadrez é um jogo que desafia a mente, estimula o raciocínio lógico, a criatividade e a concentração. Além disso, ele ajuda a melhorar a capacidade de planejamento estratégico, toma de decisões e antecipação das jogadas do oponente. Tudo isso enquanto se diverte!</p>
<a class="nav-link" href="./Chess/chess.php"><button class="btn btn-primary" type="button">Jogar</button></a>
<br>
    <div class="separador"></div>

	<h1>Adivinha<ion-icon name="help-outline"></ion-icon></h1>
  <p class="destaque">Esse jogo de adivinhação de números é uma boa estimulação cognitiva para pessoas com Alzheimer!</p><p> Oferece benefícios como estimulação mental, exercício de memória, concentração, resolução de problemas e redução do estresse. Além disso, a interação social e o treinamento a longo prazo são vantagens adicionais. Adaptado ao estágio da doença, esse jogo proporciona desafios construtivos e apoio emocional.</p>
</p>
<a class="nav-link" href="./Adivinha/adivinha.php"><button class="btn btn-primary" type="button">Jogar</button></a>
    <div class="separador"></div>

	<h1>Jogo da velha #</h1>
  <p class="destaque">O jogo da velha é uma atividade benéfica para pessoas com Alzheimer. </p><p>Este jogo de estratégia envolve a mente, incentivando a memória, a concentração e o raciocínio lógico. A simplicidade das regras torna-o acessível e, ao mesmo tempo, desafiador. Além disso, promove a interação social, estimula a atividade cerebral e ajuda a melhorar a qualidade de vida de quem enfrenta o Alzheimer.</p>
</p>
<a class="nav-link" href="./TicTacToe/tictactoe.php"><button class="btn btn-primary" type="button">Jogar</button></a>


</center>
<br><br><br>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>