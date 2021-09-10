<?php


  $id_match = isset($_POST['id_match']) ? $_POST['id_match'] : false;
   if ($id_match) {
    //  echo htmlentities($_POST['idTime1'], ENT_QUOTES, "UTF-8");
   } else {
     echo "acesso negado";
     exit; 
   }

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

$url = "https://www.ccfutebolsociety.com/sumula/retornarSumulaGenerica.php?campeonato=1&token=".$str."&id_match=".$id_match;
//  echo $url;
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
 
//echo $response[];

echo var_dump($response);
  
$result = json_decode($response);
  
$obj = (object)$result; //change array to stdClass object   






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
  //$partida = $equipe ->partida;

 
  
   echo '<pre>'; 
  

  
   echo '</pre>'; 
  
$atletas =  $equipe[0]->atletas;
$atletas2 =  $equipe[0]->atletas2;
$dataPartida=$equipe[0]->partida;

//echo var_dump($atletas );


  include 'sumulaFutsal/sumula.php';



?>