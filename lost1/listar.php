<?php
 try{
  
  $conexao = new PDO("mysql:host=localhost;dbname=escola","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $stmt = $conexao->prepare("select * from objetos where objeto=? and cidade=? and bairro=? 
                                    order by objeto");
  $objeto= $_GET["objeto"]; 
  $cidade= $_GET["cidade"];
  $bairro= $_GET["bairro"]; 
    
	

  $stmt->bindParam(1,$objeto);
  $stmt->bindParam(2,$cidade);
  $stmt->bindParam(3,$bairro);



  $stmt->execute();

  $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  foreach($resultado as $linha){

    //list($ano,$mes,$dia) = explode("-",$linha["data_nasc"]);


    echo $linha["objeto"].",".$linha["cidade"].",".$linha["bairro"].",".$linha["telefone"].",".$linha["descrição"];
  }
}catch(PDOException $e){
   echo $e->getMessage();
}

?>
