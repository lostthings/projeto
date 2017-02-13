<?php
$conexao = new PDO("mysql:hots=localhost;dbname=lostthings","root","@luno1fpe");
$objeto = $_POST['objeto'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];
//$imagem = $_POST['imagem'];
$descricao = $_POST['descricao']; 

$uploaddir = 'imagens/';
echo $uploadfile = $uploaddir . basename($_FILES['imagem']['name']);
echo $arquivo_tmp = $_FILES['imagem']['tmp_name'];
echo $uploadfile;
echo '<pre>';
if (move_uploaded_file($arquivo_tmp, $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
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
   
  if ($stmt->rowCount()>0){
	echo "Publicação efetuada com sucesso";
    }else{
        echo "Houve algum problema na publicação";
   } 
  }catch(PDOException $e){

    echo "Conexão falhou. o motivo foi:";

    echo $e->getMessage();
}
?>



