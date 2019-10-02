<!DOCTYPE html>
<html>

<head>

	<title></title>

</head>

<body>

		 <?php
$servername = "localhost";
$usuario = "root";
$senha = "";
$conexao = mysqli_($servername, $usuario, $senha);

if ($conexao->connect_error) {
    die("conexao falhou: " . $conexao->connect_error);
 } else{
	echo "Conectado com sucesso: ";
 }
?> 
		
</body>
</html>