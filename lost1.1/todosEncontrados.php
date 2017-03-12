<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">

    <style type="text/css">
	#cidade{
	padding: 0.2em;
    border: 1px solid #CCC;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    display: block
		   }
	#documento{
	padding: 0.2em;
    border: 1px solid #CCC;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    display: block
			}
	font {
	font-family: sans-serif;
    font-size: 1em;
	     }

	#envia{
	font-size: 1.5em;
    background: #2E8B57;
    border: 0;
    margin-bottom: 1em;
    color: #FFF;
    padding: 0.2em 0.6em;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: 1px 1px 1px rgba(0,0,0,0.5)
         }
      
     #en{
     text-decoration: none;
}
       #linmenu{
        
        background-color: #2E8B57;
}

    </style>
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
              <a href="paginainicial.html" id ="linmenu">Perdidos</a>
            </li>

    
            <li>
              <a href="DadosPessoais.html" id ="linmenu">Dados Pessoais</a>
            </li>

              <li>
              <a href="sobre.html" id ="linmenu">Sobre</a>
            </li>

            <li>
              <a href="login.html" id ="linmenu">Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </div>









<?php
  include("conexao.php");
?>




<?php


  
	  $stmt = $conexao->prepare("select  objeto,cidade,bairro,telefone,imagem,descricao from objetos");
  

  $stmt->execute();
  $resAlunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
 ?>
  

  <form>

         <table border=0 >
<?php
  foreach($resAlunos as $linha){

  	echo " 
                          
			<tr><th>Objeto:</th>
		       <td>".$linha["objeto"]."</td>
			</tr>

			<tr><th>Cidade:</th>
		     <td>".$linha["cidade"]."</td>
			</tr>
			<tr><th>Bairro:</th>
                    <td> ".$linha["bairro"]."</td>
			</tr>
			<tr><th>Telefone:</th>
                    <td>".$linha["telefone"]."</td>
			</tr>
			<tr><th>Imagem:</th>
                    <td><img src='".$linha['imagem']."' width='250px'/></td>
			</tr>
			<tr><th>Descrição: </th>
		    <td>".$linha["descricao"]."</td>
			</tr>
			<tr height=45>
                    <td><a href='consultaAluno.php?matricula=".$linha["id_obejtos"]."'>Alterar</a></td>
                    <td><a href='deleteAluno.php?matricula=".$linha["id_objetos"]."'>Excluir</a></td></tr>";
			  }


 ?>

 </table>
 </form>
 
</body>
</html>

