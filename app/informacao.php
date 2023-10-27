<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apeia | Pacientes</title>
    <link href="" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
      <link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
<?php 
 include "componentes/navbarLogin.php";
?>   

<?php
    include "sql/verPacientes.php";
?>
    <h1>Um pouco sobre o Alzheimer</h1>
    <p>       A doença de Alzheimer é a patologia neurodegenerativa mais freqüente associada à idade, cujas manifestações cognitivas e neuropsiquiátricas
resultam em deficiência progressiva<br>e incapacitação. A doença afeta aproximadamente 10% dos indivíduos com idade superior a 65 anos e 40% 
acima de 80 anos. Estima-se que, em 2050, mais de 25% da população<br> mundial será idosa, aumentando, assim, a prevalência da doença. O sintoma 
inicial da doença é caracterizado pela perda progressiva da memória recente. Com a evolução da patologia,<br> outras alterações ocorrem na 
memória e na cognição, entre elas as deficiências de linguagem e nas funções vísuo-espaciais. Esses sintomas são freqüentemente acompanhados 
por <br>distúrbios comportamentais, incluindo agressividade, depressão e alucinações. O objetivo deste trabalho foi revisar, na literatura médica,
os principais aspectos que envolvem a doença<br> de Alzheimer, como as características histopatológicas, a neuroinflamação e a farmacoterapia 
atual.</p>

<h1>Aqui tem alguns videos caso queira mais detalhes sobre o Alzheimer:</h1>

<video src="video/video-alzheimer.mp4"
controls
width="500"
poster="video/capa-video.jpg"
></video>
<video src="video/video-alzheimer2.mp4"
controls
width="500"
poster="video/capa-video.jpg"
></video>

<h1>Bom mesmo o Alzheimer sendo uma doença terrivel ainda podemos nos previnir </h1>
<h3>Aqui tem um videozinho curto com o que podemos fazer para previnir o Alzheimer ainda na junventude: </h3> 
<video src="video/video-PrevencaoAlzheimer.mp4"
controls
width="500"
poster="video/capa-video3.jpg"
></video>


</body>
</html>
