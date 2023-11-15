 <label>Selecione o paciente</label>
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
    echo '<option value='."$idPaciente".' selected>'.$nomePaciente.'</option>';
    
    
}
echo '</select>';
$conn->close();
?>
  </select>
  <br><br>
  <label>Nome da tarefa</label>
  <input type="text" name="atividade">
  <br>
  <label>Descrição da tarefa</label>
  <textarea name="descricao"></textarea>
  <br><br>
  <input type="submit" value="Enviar Tarefa">
</form>
<?php
$conn->close();
?>
