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
<form action="sucesssFamilia" method="post">
    <label>Nome do familiar/Responsavel</label><br>
    <input type="text" name=""></input>
    <br><br>

    <label>Número para contato emergencial</label><br>
    <input type="tel" name="" id="" placeholder="12-3456-78910"><br>
    <br><br>

    <label>Endereço (opcional)</label><br>
    <input type="text" name="" id=""><br><br>
    <label>Selecione o grau de parentesco<label><br>
   <select name="tipo">
     <option value="Null" selected>Nulo</option>
     <option value="irmao(a)">irmão(a)</option>
     <option value="sobrinho(a)">Sobrinho(a)</option>
     <option value="neto(a)">Neto(a)</option>
     <option value="outro">Outro</option>
   </select>
    <button type="submit" name="registration-button" >Registrar</button>
  </form>
    </div>
    </div>
<style>
.container{
  text-align: center;
}
.form-box{
    max-width: 400px;
    margin: auto;
    padding: 20px 100px;
    border: 1px solid #ddd;
    border-radius: 5px;
    
}

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
input{
  width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
button{
     background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    margin-top: 10px;
    cursor: pointer;
}
</style>
</body>
</html>