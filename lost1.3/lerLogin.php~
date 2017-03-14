<?php

include("conexao.php");
$usuario = $_POST['usuario'];
$senha = SHA1($_POST['senha']);


 try{
  
        $stmt = $conexao->prepare('select * from usuario where usuario=:usuario and senha=:senha');
  $stmt->execute(array(
    ':usuario' => $usuario,
    ':senha' => $senha
 
  ));
   
  if ($stmt->rowCount()>0){
    session_start();
  
  $_SESSION['usuario'] = $usuario;
  $_SESSION['senha'] = $senha;

  header('Location: paginainicial.php');

    }else{

      //Destrói
  session_destroy();

  //Limpa
  unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
      
    header('Location: login.php?msg=error');
        //echo "Houve algum problema no cadastro de usuário";
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
