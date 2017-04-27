<?php

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];

$sql = "INSERT INTO admin VALUES
('', '$titulo', '$subtitulo', '$texto')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. Tente Novamente";
    
}else{
    echo"<h3>Seção cadastrada com sucesso!</h3>";
}
?>