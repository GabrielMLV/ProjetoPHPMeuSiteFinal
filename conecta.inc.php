<?php

$conexao = mysqli_connect("localhost", "root", "");

	

if($conexao){
	echo"Conexão pegou";
}else{
	echo"Conexão não pegou";
}
$db = mysqli_select_db($conexao, "meusite");
if($db){
	echo"Conexão com o banco pegou";
}else{
	echo"Conexão com o banco não pegou";
}

$query = mysqli_query(
$conexao, "SELECT * FROM faleconosco"
);
while($tabela = mysqli_fetch_array($query)){
	echo $tabela['nome']."<br>";
	echo $tabela['email']."<br>";
	echo $tabela['telefone']."<br>";
	echo $tabela['assunto']."<br>";
	echo $tabela['mensagem'];
}
	



?>
