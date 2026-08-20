<?php 

/*    Aqui vão ser linhas de codigo para criar a conexão para rede de banco dados    */
$servidor = "localhost";
$user = "root";
$passoword = "";
$db = "armazenamento";


try{
/*    \qui vai ser uma conexao para rede banco de dados  */


$pdo = new PDO("mysql:host=$servidor; dbname=$db" , $servidor , $user);

$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    echo"Erro". $e->getMessage();
    /*    Aqui vai mostra mensagem de tipo erro caso se tiver um  */




}


?>