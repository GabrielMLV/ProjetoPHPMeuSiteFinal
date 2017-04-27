<html>

<head>
 <title>MeuSite.com</title>

 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="css/estilos.css">
  
</head>

<body>
	<div >
	<?php 
		include_once("topo.php");
		include_once("menu.php");
		
		
		
		if(empty($_SERVER["QUERY_STRING"])){
			$var = "conteudo.php";
			include_once("$var");
		}else{
			$pg = $_GET['pg'];
			include_once("$pg.php");
		}
		
		include_once("conteudo.php");		
		include_once("rodape.php");
	?>
	</div>

	<script src="js/bootstrap.min.js"></script>
</body>

</html>