<?php
$conexao = new PDO("mysql:hots=localhost;dbname=lostthings","root","@luno1fpe");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


 try{
//select * from usuario where login=:login and senha=:senha
	
        $stmt = $conexao->prepare('select * from usuario where usuario=:usuario and senha=:senha');
  $stmt->execute(array(
    ':usuario' => $usuario,
    ':senha' => $senha
 
  ));
   
  if ($stmt->rowCount()>0){
	header('Location: paginainicial.html');
    }else{
        echo "Houve algum problema no cadastro de usuário";
   } 
  }catch(PDOException $e){

    echo "Conexão falhou. o motivo foi:";

    echo $e->getMessage();
}
?>

<html>
<head>
</head>
<body>
</body>
</html>
