<?php
$base = "seguro";
$conexao = mysqli_connect("127.0.0.1", "root", "root", $base);
$host = "http://127.0.0.1:8000/";
$prefixo = "seguro.nx510";
?>

<body style="background-position: top center; background-image: linear-gradient(980deg,rgba(150,105,97,0) 0%,rgba(2,0,61,0.67) 100%),url(images/sumula.png);">

	<div style="padding:10px; border-radius: 15px 15px 15px 15px;
border-top-width: 18px; border-top: 5px #ffbf00 solid; border-bottom: 5px #ffbf00 solid; 
;
">
		<form method="post" target="_blank" action="imprimirSumulaFut7.php">

			<label style="width:100%; padding:10px; margin:5px; color:#ffbf00; font-weight:bold; font-size:20px;">SUMULA FUT7</label>
			<br> <br>

			<label style="width:100%; padding:10px; margin:5px; color:#ffbf00;">Equipe A</label>

			<select name="idTime1" style="width:100%; padding:10px; margin:5px;">

				<?php


				$sql = 'SELECT distinct  b.id, b.t_emblem, b.t_name, b.id FROM ' . $prefixo . '_bl_season_teams a, ' . $prefixo . '_bl_teams b where a.team_id = b.id order by b.t_name';

				//echo $sql;	

				$sqlTimes = mysqli_query($conexao, $sql) or die("ERRO no comando SQL :" . mysqli_error());

				$completarTimes = mysqli_num_rows($sqlTimes);

				while ($campo = mysqli_fetch_row($sqlTimes)) {

					$id = $campo[0];
					$logo = $campo[1];
					$nome = $campo[2];
					$cd = $campo[3];

					echo utf8_encode('<option value="' . $id . '">' . $nome . '</option>');
				}



				?>


			</select>





			<label style="width:100%; padding:10px; margin:5px; color:#ffbf00;">Equipe B</label>

			<select name="idTime2" style="width:100%; padding:10px; margin:5px;">

				<?php


				$sql = 'SELECT distinct b.id, b.t_emblem, b.t_name, b.id FROM ' . $prefixo . '_bl_season_teams a, ' . $prefixo . '_bl_teams b where a.team_id = b.id order by b.t_name';


				$sqlTimes = mysqli_query($conexao, $sql) or die("ERRO no comando SQL :" . mysqli_error());

				$completarTimes = mysqli_num_rows($sqlTimes);

				while ($campo = mysqli_fetch_row($sqlTimes)) {

					$id = $campo[0];
					$logo = $campo[1];
					$nome = $campo[2];
					$cd = $campo[3];

					echo utf8_encode('<option value="' . $id . '">' . $nome . '</option>');
				}



				?>

			</select>






			<input type="submit" value="Gerar " style="width:150px; height:50px;  margin:5px; border:1px #ffbf00 solid;">


		</form>
	</div>
</body>