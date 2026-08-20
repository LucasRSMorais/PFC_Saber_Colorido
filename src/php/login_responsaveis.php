<?php 


require ("conexao.php") ; 


if (isset($_POST)){

$email_responsavel = $_POST ['email'];
$senha_responsavel = $_POST['senha'];


$select = "SELECT $email_responsavel , $senha_responsavel FROM responsaveis  ";

$stmt = $pdo->prepare($select);
$stmt ->execute();


}




?>

