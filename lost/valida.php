<?php 

// Definindo parametros de conexao 
$dsn = 'mysql:host=localhost;port=3306;dbname=banco'; 
$usuario = 'usuario'; 
$senha = 'senha'; 

// Conectando 
try { 
$pdo = new PDO($dsn, $usuario, $senha); 
} catch (PDOException $e) { 
echo $e->getMessage(); 
exit(1); 
} 

// Preparando statement 
$stmt = $pdo->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ?"); 
$stmt->bind_param(1, $_POST['login'], PDO::PARAM_STR); 
$stmt->bind_param(2, $_POST['senha'], PDO::PARAM_STR); 

// Executando statement 
$stmt->execute(); 

// Obter linha consultada 
$obj = $stmt->fetchObject(); 

// Se a linha existe: indicar que esta logado e encaminhar para outro lugar 
if ($obj) { 
$_SESSION['login'] = $_POST['login']; 
header('Location: http://outro/lugar'); 
} else { 
echo '<p class="erro">Login/Senha inv&aacute;lidos</p>'; 
} 

?> 
