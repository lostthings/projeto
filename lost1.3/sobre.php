<?php  
include("detalhe.php");
?>

<html>

<head> <meta charset="utf-8">
	<title>Sobre</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/alteraDados.css"/>
</head>


</body>
<div class="navbar navbar-default navbar-static-top" id = "linmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse" id ="linmenu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Lost Things</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li class="active">
              <a href="todosEncontrados.php" id ="linmenu">Encontrados</a>
            </li>
		        
            <li class="active">
              <a href="paginainicial.php" id ="linmenu">Perdidos</a>
            </li>

    
            <li>
              <a href="DadosPessoais.php" id ="linmenu">Dados Pessoais</a>
            </li>

              <li>
              <a href="sobre.php" id ="linmenu">Sobre</a>
            </li>

            <li>
              <a href="matar.php" id ="linmenu">Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </div>

	<center>
	<table>
	<tr>
	<td><img src="img/lost.png" width="450px"</td>
	</tr>
	<tr>
	<th><center><h3>Versão 1.0.1</h3></center></th>
	</tr>
	</table></center>
</body>
</html>
