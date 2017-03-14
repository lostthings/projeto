<?php  
include("detalhe.php");
?>

<!DOCTYPE html>
 <html>
  
  <head>
  	<meta charset="UTF-8">
    <title>Publicação de objetos achados</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/publicacao.css"/>


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

	          <li class="active">
              <a href="Dadospessoais.php" id ="linmenu">Dados Pessoais</a>
            </li>
		
		        <li>
              <a href="sobre.php" id ="linmenu">Sobre</a>
            </li>


            <li class="active">
              <a href="matar.php" id ="linmenu">Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
<br>
	<center>
	<table id="tb" border=0>
		<tr>
			<td><i>O que você encontrou?</i></td>
		</tr>
       <form enctype="multipart/form-data" method="POST" action="objetos.php">
       <tr>
       	<td><input type="text" name="objeto" placeholder="Nome do objeto" id="encontrado" required maxlength="40"></td>
       </tr>
		
		<tr>
			<td><i>Em que Cidade?</i></td>
		</tr>	

		<tr>
			<td><input type="text" name="cidade" placeholder="Informe a sua cidade" id="cidade" required maxlength="40"></td>
		</tr>

		<tr>
		   <td><i>Em que Bairro?</i></td>
		</tr>
           
          <tr>
			<td><input type="text" name="bairro" placeholder="Informe a seu bairro" id="bairro" required maxlength="40"></td>
		</tr>

		<tr>
			<td><i>Telefone:</i></td>
		</tr>

		<tr>
			<td><input type="text" name="telefone" id="telefone" placeholder="Número do seu celular" maxlength="12" required></td>
		</tr>

		<tr>
		        <td><input type="file" id="imagem" name="imagem"  ></td>
		</tr>
		
		<tr>
		        <td><i>Descrição:</i>
		</tr>

                <tr>	
		  <td><textarea cols ="20" rows ="5" id = "descricao"  name = "descricao" maxlength = "250" placeholder = "Digite aqui a descrição."></textarea></td>
                </tr>

		<tr>
		  <td><input type="submit" value="Enviar" id="enviar"></td>
		</tr>



</form>
</table>
</center>	
</body>
</html>
