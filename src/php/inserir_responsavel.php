<?php 

/*  Cadastros por responsaveis (mae e pai)    */

require("conexao.php");
/*  Variaiveis das colunas       */

if (isset($_POST)){
$nome_responsavel = $_POST ['nome'];
$RG = $_POST['RG'];
$CPF = $_POST['CPF'];
$data_nascimento = $_POST ['data'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$lograduro  = $_POST ['lograduro'];
$numero_casa  = $_POST ['numero'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];

/*     Neste comado vai inserir os dados na tabela dos Pais responsaveis    */


$inserir_resp = "INSERT INTO responsaveis VALUES ($nome_responsavel ,$RG , $CPF , $data_nascimento , $email  , $telefone  , $lograduro  , $numero_casa  ,  $bairro , $cidade  )" ;
$stmt = $pdo->prepare($inserir_resp);
$stmt ->execute();



}

?>