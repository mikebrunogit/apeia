<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href=".css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="app/assets/logoCircle.png">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</head>
<body>
<?php
include "app/componentes/navbar.php";
?>    

<div class="container">
    <div class="content">
      <h1>O que é o projeto APEIA ? <ion-icon name="code-outline"></ion-icon></h1>
      <p>O projeto apeia é um aplicativo web gratuito para os cuidadores. Oferecemos suporte de maneira gratuita através do nosso gerenciador de atividades gratuito, facilitando o acesso a artigos e videos sobre Alzheimer e garantindo que o cuidador tenha acesso a entretenimentos relevantes para ofereces aos pacientes.</p>

      <h1>Artigos e reportagens sobre Alzheimer <ion-icon name="newspaper-outline"></ion-icon></h1>

<p>Esses conteúdos foram selecionados previamente para que o cuidador entenda sobre o mal de Alzheimer e construa uma relação melhor com seu paciente, criando empatia sobre a situação do paciente através do entendimento da situação e da da doença.</p>

<p>Clique <a  href="./app/registro.php">aqui</a> para ter acesso a artigos e reportagens de interesse sobre o Alzheimer. </p>

<h1>Jogos <ion-icon name="game-controller-outline"></ion-icon></h1>

<p>Conforme os estudos mostram, a exposição à estimulação cognitiva apresenta uma melhora cognitiva após a pratica regular de estimulação cognitiva. Pensado nisso montamos uma lista de jogos sempre disponíveis ao cuidador para oferecer ao paciente.</p>

<p>Clique <a  href="./app/loginCuidador.php">aqui</a> para ter acesso aos nosso jogos (este recurso somente pode ser acessado por quem é registrado em nossa aplicação, clique <a  href="./app/registro.php">aqui</a>  para se registrar). </p>

<h1>Gerenciador de atividades (to-do list) <ion-icon name="checkbox-outline"></ion-icon></h1>

<p>Nossa aplicação web oferece uma to-do list onde é possível criar atividades com descrição. O principal foco é a acessibilidade e facilidade na hora de se organizar!</p>

<p>Clique  <a  href="./app/LoginCuidador.php">aqui</a> para ter acesso a nossa to-do list! (este recurso somente pode ser acessado por quem é registrado em nossa aplicação, clique <a  href="./app/registro.php">aqui</a> para se registrar). </p>

    </div>
    <div class="background-layer"></div>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>
