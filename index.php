<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="icon" type="image/x-icon" href="app/assets/logoCircle.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="app/assets/logoCircle.png" alt="logo" width="30" height="30">
    </a>
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Página inicial</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./app/loginCuidador.php"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"></a>
        </li>
      
        <li class="nav-item dropdown">
       
         
      </ul>
    </div>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class ="nav-login">
                <a class="nav-link" href="./app/registroCuidador.php"><button class="btn btn-primary" type="button">Registro</button></a>
            </li>
            <li class ="nav-login">
                <a class="nav-link" href="./app/loginCuidador.php"><button class="btn btn-primary" type="button">Login</button></a>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    <br>
      <h1>O que é o projeto APEIA ? <ion-icon name="code-outline"></ion-icon></h1>
      <p>O projeto apeia é um aplicativo web gratuito para os cuidadores. Oferecemos suporte de maneira gratuita através do nosso gerenciador de atividades gratuito, facilitando o acesso a artigos e videos sobre Alzheimer e garantindo que o cuidador tenha acesso a entretenimentos relevantes para ofereces aos pacientes.</p>

      <h1>Artigos e reportagens sobre Alzheimer <ion-icon name="newspaper-outline"></ion-icon></h1>

<p>Esses conteúdos foram selecionados previamente para que o cuidador entenda sobre o mal de Alzheimer e construa uma relação melhor com seu paciente, criando empatia sobre a situação do paciente através do entendimento da situação e da da doença.</p>

<p>Clique<a  href="./app/registro.php">aqui</a> para ter acesso a artigos e reportagens de interesse sobre o Alzheimer. </p>

<h1>Jogos <ion-icon name="game-controller-outline"></ion-icon></h1>

<p>Conforme os estudos mostram, a exposição à estimulação cognitiva apresenta uma melhora cognitiva após a pratica regular de estimulação cognitiva. Pensado nisso montamos uma lista de jogos sempre disponíveis ao cuidador para oferecer ao paciente.</p>

<p>Clique <a  href="./app/loginCuidador.php">aqui</a> para ter acesso aos nosso jogos (este recurso somente pode ser acessado por quem é registrado em nossa aplicação, clique <a  href="./app/registro.php">aqui</a>  para se registrar). </p>

<h1>Gerenciador de atividades (to-do list) <ion-icon name="checkbox-outline"></ion-icon></h1>

<p>Nossa aplicação web oferece uma to-do list onde é possível criar atividades com descrição. O principal foco é a acessibilidade e facilidade na hora de se organizar!</p>

<p>Clique  <a  href="./app/LoginCuidador.php">aqui</a> para ter acesso a nossa to-do list! (este recurso somente pode ser acessado por quem é registrado em nossa aplicação, clique <a  href="./app/registro.php">aqui</a> para se registrar). </p>

    </div>
  </div>
</body>
</html>