<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apeia | Cadastro Paciente</title>
        <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
        <link href="" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
    <style>
        body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      text-align: center;
      margin: 0 auto; /* Centralizar a caixa horizontalmente */
    }

    h2 {
      color: #007bff; /* Cor azul para o título */
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button[type="submit"] {
      background-color: #007bff; /* Cor azul para o botão */
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    @media (max-width: 600px) {
      /* Estilos para dispositivos móveis (largura máxima de 600px) */
      .container {
        max-width: 90%; /* Largura máxima de 90% da largura da tela */
      }
    }
  </style>

<?php
include "componentes/navbarLogin.php";
?>
<br><br>
  <div class="container">
    <h2>Formulário de Registro de Pacientes</h2>
    <form action="sucessPaciente.php" method="post">
      <label for="nome">Nome do Paciente:</label>
      <input type="text" id="nome" name="nome" required>
      <br>
      <label for="idade">Idade do Paciente:</label>
      <input type="number" id="idade" name="idade" required>
      <br>
      <label for="estagio">Estágio do Paciente:</label>
      <select id="estagio" name="estagio" required>
        <option value="grave">Grave</option>
        <option value="moderado">Moderado</option>
        <option value="inicial">Inicial</option>
      </select>
      <br><br><br>
      <button type="submit">Registrar Paciente</button>
    </form>


</body>
</html>