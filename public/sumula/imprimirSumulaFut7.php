<?php


  $idTime1 = isset($_POST['idTime1']) ? $_POST['idTime1'] : false;
   if ($idTime1) {
    //  echo htmlentities($_POST['idTime1'], ENT_QUOTES, "UTF-8");
   } else {
     echo "acesso negado";
     exit; 
   }

  $idTime2 = isset($_POST['idTime2']) ? $_POST['idTime2'] : false;
   if ($idTime2) {
    //  echo htmlentities($_POST['idTime2'], ENT_QUOTES, "UTF-8");
   } else {
     echo "acesso negado";
     exit; 
   }

  $rodada = isset($_POST['rodada']) ? $_POST['rodada'] : false;

  $data = isset($_POST['data']) ? $_POST['data'] : false;

?>

<?php

$tokenInput = "amadorfc";

//cho $tokenInput;
//echo $idTime1;
//echo $idTime2;
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');
$str = $tokenInput.$date; 
$str = md5($str);  

$url = "https://www.ccfutebolsociety.com/sumula/retornarSumulaGenerica.php?campeonato=1&token=".$str."&idTime=".$idTime1."&idTime2=".$idTime2."&data=".$data."&rodada=".$rodada;
echo $url;
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
 
//echo $response[];
  
$result = json_decode($response);
  
$obj = (object)$result; //change array to stdClass object   

exit;




//dataPartida
  
  //print_r($obj);
  //echo print_r($obj);
  
  echo '<pre>'; 
  
 // print_r($obj);
  
   echo '</pre>'; 
  
  //[equipe] => Array    (
  //          [0] => stdClass Object
  //              (
  //                  [tid] =
  
  $equipe = $obj->equipe;
  $partida = $obj->partida;

  
 
  
   echo '<pre>'; 
  

  
   echo '</pre>'; 
  
$atletas =  $equipe[0]->atletas;
$atletas2 =  $equipe[0]->atletas2;
$dataPartida=$equipe[0]->partida;



  include 'sumulaFutsal/sumula.php';



?>