<?php
$busca = "SELECT * FROM admin";
$sql = mysqli_query($conexao,$busca);

?>

<div class="container">
    <div class="navbar-header">
        <h3>Lista de Seções</h3>
    </div>
    <div>
        <ol class="nav nav-justified">
            <li>ID</li>
            <li>Seção</li>
            <li>Ação</li>
        </ol>
        <?php while ($dados=mysqli_fetch_array($sql)) {
            ?>
        <ol class="nav nav-justified">
            <li><?=$dados['id'];?></li>
            <li><?=$dados['titulo'];?></li>
            <li><a href="?pg=alterar&id=<?=dados['id'];?>">Alterar</a></li>
        </ol>
        <?php } ?>
    </div>



</div>