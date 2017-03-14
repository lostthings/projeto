<?php  
include("detalhe.php");
?>

<html>
  
  <head>
   <title>Tela de Busca</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="css/paginainicial.css"/>
      
  </head>
  
  <body>
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

<!--Inĩcio da Tela-->

	<div align="middle">
	 <img src="img/desenho.png" height="150"></a>
	</div>

	  <br>
	  <br>

	 <div align="middle">
	  <table border="0" CELLSPACING="10">
	  <form method="POST" action="listar2.php">

	 
	 
	 <tr height=35>
		<td><font color="#2E8B57">Cidade:</font></td><td><input type="text" name="cidade" id="cidade"></a></td>
	</tr>
		<tr height=35>
		<td><font color="#2E8B57">Bairro:</font></td><td><input type="text" name="bairro" id="bairro"></a></td>
		</tr>
	
		<tr height=35>
		<td><font color="#2E8B57">Objeto:</font></td><td><input type="text" name="objeto" id="objeto"></td></td>
		</tr>

	
     </table>

	<br><br>
		
		<p align="middle"><input type="Submit" value="Buscar" id="envia"></p>
		<br>
		<p align="middle"><a href="publicacao.php" id = "en"><font color="#2E8B57" >Encontrou algo? Informe aqui</font></a></p>
		
	</form>

</div>
  </body>

</html>

<?php 
  echo" Bem vindo: ".$logado;
?>