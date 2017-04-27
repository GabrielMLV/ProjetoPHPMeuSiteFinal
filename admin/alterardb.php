<?php

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];

$sql2 = mysqli_query($conexao, "SELECT * FROM admin WHERE id='$id'");

$sql = "UPDATE admin SET titulo='$titulo, subtitulo='$subtitulo', $texto='$texto' WHERE id=$id";