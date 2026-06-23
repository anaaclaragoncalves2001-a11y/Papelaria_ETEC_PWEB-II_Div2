php
<?php include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$tipo = $_POST['tipo'];

$sql = "UPDATE USUARIOS SET
USUNOME='$nome',
USUCELULAR='$celular',
USUCPF='$cpf',
USUCIDADE='$cidade',
USUTIPID='$tipo'
WHERE USUID=$id";

$conn->query($sql);

header("Location: index.php");
?>