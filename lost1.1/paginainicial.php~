<?php

 if(isset($_GET["objeto"])){
 try{
 
  $conexao = new PDO("mysql:host=localhost;dbname=LostThings","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $stmt = $conexao->prepare("select * from objetos where objeto=? or cidade=? or bairro=? 
                                    order by objeto");
  
  $cidade= $_GET["cidade"];
  $bairro= $_GET["bairro"]; 
    
	

  $stmt->bindParam(1,$objeto);
  $stmt->bindParam(2,$cidade);
  $stmt->bindParam(3,$bairro);



  $stmt->execute();

  
}catch(PDOException $e){
   echo $e->getMessage();
}


}
?>

<html>
  
  <head>
   <title>Tela de Busca</title>
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
              <a href="/media/labtarde/Moises/ifpe/2 periodo/Projeto e Pratica/Projeto/HTML_LOST/" id ="linmenu">Encontrados</a>
            </li>

    
            <li>
              <a href="DadosPessoais.html" id ="linmenu">Dados Pessoais</a>
            </li>

              <li>
              <a href="#" id ="linmenu">Sobre</a>
            </li>

            <li>
              <a href="login.html" id ="linmenu">Logout</a>
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
	  <table border="0">
	  <form method="get" action="#">

	 <td><font color="#2E8B57">Bairro</font></td><td><font color="#2E8B57">Cidade</font></td><td><font color="#2E8B57">Documento/Objeto</font></td>
	 
	 <tr>
		<td><input type="text" name="bairro" id="bairro" maxlength="20" ></a></td>
		<td><input type="text" name="cidade" id="cidade" maxlength="20" ></a></td>
		<td><input type="text" name="objeto" id="objeto" maxlength="20" ></td>
	</tr>
     </table>

	<br><br>
		
		<p align="middle"><input type="Submit" value="Buscar" id="envia"></p>
		<br>
		<p align="middle"><a href="publicacao.html" id = "en"><font color="#2E8B57" >Encontrou algo? Informe aqui</font></a></p>
<?php

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  foreach($resultado as $linha){

    //list($ano,$mes,$dia) = explode("-",$linha["data_nasc"]);


    echo $linha["objeto"].",".$linha["cidade"].",".$linha["bairro"];
  }
?>
		
	</form>

</div>
  </body>

</html>
