php
<?php include 'conexao.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM USUARIOS WHERE USUID=$id");
$dados = $result->fetch_assoc();
?>

<h2>Editar Usuário</h2>

<form action="atualizar.php" method="POST">
<input type="hidden" name="id" value="<?php echo $dados['USUID']; ?>">

Nome: <input type="text" name="nome" value="<?php echo $dados['USUNOME']; ?>"><br>
Celular: <input type="text" name="celular" value="<?php echo $dados['USUCELULAR']; ?>"><br>
CPF: <input type="text" name="cpf" value="<?php echo $dados['USUCPF']; ?>"><br>
Cidade: <input type="text" name="cidade" value="<?php echo $dados['USUCIDADE']; ?>"><br>

Tipo:
<select name="tipo">
<?php
$result = $conn->query("SELECT * FROM TIPOSUSUARIOS");
while($row = $result->fetch_assoc()){
    $selected = ($row['ESTID'] == $dados['USUTIPID']) ? "selected" : "";
    echo "<option value='{$row['ESTID']}' $selected>{$row['ESTNOME']}</option>";
}
?>
</select>

<br><br>
<button type="submit">Atualizar</button>
</form>
