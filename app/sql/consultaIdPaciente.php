<style>
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
  <select name="idPaciente">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apeia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
$sql = "SELECT * FROM tab_paciente";
$result = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

while ($pacientes = mysqli_fetch_array($result))
{
    $nomePaciente = $pacientes['pac_nome'];
    $idPaciente = $pacientes['pac_id'];
    echo '<option value='."$idPaciente".'>'.$nomePaciente.'</option>';
    
    
}
echo '</select>';
$conn->close();
?>
  </select>
  <br><br>
  <label>Nome da Tarefa:</label>
  <input type="text" name="atividade">
  <br><br>
  <label>Descrição da Tarefa:</label>
  <textarea name="descricao"></textarea>
  <br><br>
  <input type="submit" value="Enviar Tarefa">
</form>
<?php
$conn->close();
?>
