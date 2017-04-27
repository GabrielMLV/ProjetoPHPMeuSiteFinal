<?php

$id = $_GET['id'];
$sql = "SELECT * FROM admin WHERE id = $id";
$busca = mysqli_query($conexao, $busca);


while($dados=mysqli_fetch_array($sql)){

?>

<div class="container">
<form action="?pg=inserirdb" method="post">
   <div class="col-md-6">
       
    <input type="hidden" id="id" value="<?=$dados['id'];?>">   
    
    <label>Nome da Seção:</label>
    <input class="form-control" name="titulo" type="text" value="<?=$dados['titulo'];?>"/>
    
    <label>Subtitulo</label>
    <input class="form-control" name="subtitulo" type="text" value="<?=$dados['subtitulo'];?>"/>
    
    <label>Texto</label>
       <textarea class="form-control" rows="8" id="texto" name="texto" type="text" value="<?=$dados['texto'];?>"></textarea>
    <br>
    <button class="btn btn-danger" name="Enviar">Cadastrar</button>
    </div>
</form>

</div>

<?php } ?>