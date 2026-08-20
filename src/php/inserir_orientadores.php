<?php 

/*    Inserido os dados dos profissões dos orientadores   */
require("conexao.php");

if (isset($_POST)){

/*  Variaiveis das colunas       */


$nome_orientador = $_POST ['nome'];
$RG = $_POST['RG'];
$CPF = $_POST['CPF'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$lograduro  = $_POST ['lograduro'];
$numero_casa  = $_POST ['numero'];
$bairro = $_POST ['bairro'];
$cargo = $_POST ['cargo'];
$especilidade =  $_POST ['especilidade'];





/*     Neste comado vai inserir os dados na tabela dos orientadores    */

$inserir_orientadores = "INSERT INTO  orientadores VALUES ($nome_orientador , $RG , $CPF , $email , $telefone  , $lograduro ,$numero_casa , $bairro , $cargo  , $especilidade )" ;
$stmt = $pdo->prepare($inserir_orientadores);
$stmt ->execute();


}




?>