php
<?php include 'conexao.php'; ?>

<h2>Cadastrar Usuário</h2>

<form action="salvar.php" method="POST">
Nome: <input type="text" name="nome"><br>
Celular: <input type="text" name="celular"><br>
CPF: <input type="text" name="cpf"><br>
Cidade: <input type="text" name="cidade"><br>

Tipo:
<select name="tipo">
<?php
$result = $conn->query("SELECT * FROM TIPOSUSUARIOS");
while($row = $result->fetch_assoc()){
    echo "<option value='{$row['ESTID']}'>{$row['ESTNOME']}</option>";
}
?>
</select>

<br><br>
<button type="submit">Salvar</button>
</form>