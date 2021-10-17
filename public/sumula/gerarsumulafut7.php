<?php


$servername="127.0.0.1:3306";
$base = "ccfute89_api-afcapp";
$host = "http://127.0.0.1:8000/";
$prefixo = "nx510";
$username='ccfute89_root';
$password='qwop&1971';

// Create connection

$conexao = mysqli_connect($servername, $username, $password, $base);

// Check connection

if ($conexao->connect_error) {
die("Connection failed: " . $conexao->connect_error);
}


?>

<body style="background-position: top center; background-image: linear-gradient(980deg,rgba(150,105,97,0) 0%,rgba(2,0,61,0.67) 100%),url(images/sumula.png);">

	<div style="padding:10px; border-radius: 15px 15px 15px 15px;
border-top-width: 18px; border-top: 5px #ffbf00 solid; border-bottom: 5px #ffbf00 solid; 
;
">
		<form method="post" target="_blank" action="imprimirSumulaFut7.php">

		<input  type="hidden" name="id_match" id="id_match" class="ng-untouched ng-pristine ng-valid" value="31">
			<input type="submit" value="Gerar " style="width:150px; height:50px;  margin:5px; border:1px #ffbf00 solid;">


		</form>
	</div>
</body>