
<?php
include("conexao.php");
$objeto = $_POST['objeto'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];
//$imagem = $_POST['imagem'];
$descricao = $_POST['descricao'];
/*
define('DEST_DIR', __DIR__ . '/imagens');


if (isset($_FILES['imagem']) &&
!empty($_FILES['imagem']['name']))
{
$arquivo = $_FILES['imagem'];

if (!move_uploaded_file($arquivo['tmp_name'],
DEST_DIR . '/' . $arquivo['name']))
{
echo "Erro ao enviar arquivo";
}
else
{
echo "Arquivo enviado com sucesso";
}
}
 */

	$uploaddir = 'imagens/';
	 $uploadfile = $uploaddir . basename($_FILES['imagem']['name']);
	 $arquivo_tmp = $_FILES['imagem']['tmp_name'];
	$uploadfile;
	echo '<pre>';
	if (move_uploaded_file($arquivo_tmp, $uploadfile)) {
    //echo "Arquivo válido e enviado com sucesso.\n";
	} else {
    echo "Erro ao enviar imagem!\n";
}


 try{
//select * from usuario where login=:login and senha=:senha
	
        $stmt = $conexao->prepare('INSERT INTO objetos(objeto, cidade, bairro, telefone, imagem,descricao) VALUES(:objeto, :cidade, :bairro, :telefone, :imagem, :descricao)');
  $stmt->execute(array(
    ':objeto' => $objeto,   
    ':cidade' => $cidade,
    ':bairro' => $bairro,
    ':telefone' => $telefone,
    ':imagem' => $uploadfile,
    ':descricao' => $descricao
     
  ));
?>
<html>
<head>
<meta http-equiv="refresh" content="2;url=publicacao.php">
</head>
 
<?php  
  if ($stmt->rowCount()>0){
	echo "<h3>Publicação efetuada com sucesso</h3>";
    }else{
        echo "Houve algum problema na publicação";
   } 
  }catch(PDOException $e){

    echo "Conexão falhou. o motivo foi:";

    echo $e->getMessage();
}
?>

<html>
<head>
<meta http-equiv="refresh" content="2;url=publicacao.php">
</head>
<body>
</body>
</html>



