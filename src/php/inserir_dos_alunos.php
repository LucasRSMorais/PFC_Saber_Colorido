<?php 

/*
cadastro dos alunos       
*/
require("conexao.php");

if (isset($_POST)){

$nome = $_POST ['nome'];
$email = $_POST['email'];
$senha_normal = $_POST ['senha'];
$CPF = $_POST ['CPF'];
$lograduro = $_POST['lograduro'];
$numero_casa = $_POST ['numero_casa'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];
$nome_mae = $_POST ['mãe'];
$nome_pai = $_POST['pai'];


/*     Neste comado vai inserir os dados na tabela dos alunos    */

$inserir = "INSERT INTO ALUNO VALUES ($nome ,$email  , $CPF , $lograduro , $numero_casa , $bairro  , $cidade , $nome_mae  , $nome_pai )";

$stmt = $pdo->prepare($inserir);
$stmt ->execute();

}



?>