<?php  
include("detalhe.php");
?>

<html>
  
  <head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="css/alteraDados.css"/>
    
      
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
              
               <center>
	<div id="login">


	<form>
		<table CELLSPACING="10">

		<tr height = 35>
		<td><b>Alterar Nome:</b></td><td><input type=text name="nome" placeholder="Informe o nome "></td><hr>
                </tr>
                
		<tr height = 35>
	        
		<td><b>Senha Atual:</b></td><td><input type=text name="usuario" placeholder="Informe a Senha Atual"></td>
		</tr>

		<tr height = 35>
		<td><b>Nova Senha:</b></td><td><input type=password name="senha" id="se" placeholder="Informe a nova senha"></td>
		</tr>
	
		<tr height = 35>
		<td><b>Confirme sua senha:</b></td><td><input type=password name="senha2" id="se2" placeholder="Repita a Senha"></td>
		</tr>

	        <tr height = 35>
		<td><b>Alterar Telefone:</b></td><td><input type=text name="telefone" placeholder="Informe o novo Telefone"></td>
		</tr>

		<tr height = 35>
		<th><input type="submit" value="Salvar"></th><th colspan=2><input type="reset" value="Cancelar"> </th>
		</tr>

           
     
		
	    
             		
		 
		
		</table>
	</form>

	</div>
	</center>
</body>
</html>
