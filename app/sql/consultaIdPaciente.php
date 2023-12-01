 <label>Selecione o paciente</label>
 <select name="idPaciente">


<?php
 include("config.php");

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
