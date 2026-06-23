php
<?php include 'conexao.php';

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO USUARIOS 
(USUNOME, USUCELULAR, USUCPF, USUCIDADE, USUTIPID)
VALUES ('$nome','$celular','$cpf','$cidade','$tipo')";

$conn->query($sql);

header("Location: index.php");
?>