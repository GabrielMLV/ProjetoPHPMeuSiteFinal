<?php
include "../conecta.inc.php";

?>
<html>
<head>
    <link href="../css/bootstrap.css"
          rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="page-header">Painel Admin</h1>
            <nav>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="?pg=listar">Listar</a></li>
                    <li><a href="?pg=inserir">Inserir</a></li>
                
                </ol>
            
            </nav>
        </div>
    
    
    <div>
        <?php
        if(empty($_SERVER["QUERY_STRING"])){
			$var = "../home.php";
			include_once("$var");
		}else{
			$pg = $_GET['pg'];
			include_once("$pg.php");
		}
        ?>  
    </div>   
        <?php include "rodape.php"; ?>
    </div>
</body>


</html>