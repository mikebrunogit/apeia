<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</head>
<body>

<?php
 include 'componentes/navbar.php';
?>
    
<?php
 include 'sql/verAtividades.php';
?>  

<script>
function verificarExclusao() {
    var checkboxes = document.querySelectorAll("input[name='atividade[]']:checked");
    var botaoExclusao = document.getElementById("botaoExclusao");
    
    if (checkboxes.length > 0) {
        botaoExclusao.style.display = "block";
    } else {
        botaoExclusao.style.display = "none";
        alert("Selecione pelo menos uma atividade para excluir.");
    }
}
</script>

</body>
</html>
