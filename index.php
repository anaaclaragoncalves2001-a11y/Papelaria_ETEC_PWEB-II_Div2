php
<?php include 'conexao.php'; ?>

<h2>Lista de Usuários</h2>
<a href="cadastrar.php">Cadastrar Novo</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Celular</th>
    <th>CPF</th>
    <th>Cidade</th>
    <th>Tipo</th>
    <th>Ações</th>
</tr>

<?php
$sql = "SELECT u.*, t.ESTNOME 
        FROM USUARIOS u
        INNER JOIN TIPOSUSUARIOS t ON u.USUTIPID = t.ESTID";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<tr>
        <td>{$row['USUID']}</td>
        <td>{$row['USUNOME']}</td>
        <td>{$row['USUCELULAR']}</td>
        <td>{$row['USUCPF']}</td>
        <td>{$row['USUCIDADE']}</td>
        <td>{$row['ESTNOME']}</td>
        <td>
            <a href='editar.php?id={$row['USUID']}'>Editar</a>
        </td>
    </tr>";
}
?>
</table>