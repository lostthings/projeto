<?php
include("conexao.php");
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];

 try{
//select * from usuario where login=:login and senha=:senha
	
        $stmt = $conexao->prepare('INSERT INTO usuario(nome, usuario, senha, email, cidade, bairro, telefone) VALUES(:nome,:usuario, :senha, :email, :cidade, :bairro, :telefone)');
  $stmt->execute(array(
    ':nome' => $nome,
    ':usuario' => $usuario,
    ':senha' => SHA1($senha),
    ':email' => $email,
    ':cidade' => $cidade,
    ':bairro' => $bairro,
    ':telefone' => $telefone
  ));
   
  if ($stmt->rowCount()>0){
	echo "Cadastro efetuado com sucesso";
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
<meta http-equiv="refresh" content="2;url=novocad.html">
</head>
<body>
</body>
</html>
