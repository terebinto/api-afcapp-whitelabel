<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sumula Amador FC. </title>
</head>
<style type="text/css">
*{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:12px;

}
td{
border:1px lightgray solid;
margin:0;
height:25px;
padding-left:3px;
font-size:11px;
}
.tabelaPrincipal{
 width:744px; 
 border:1px lightgray solid;
 margin-top: -6px;
 
}
.borderCimaFundo{
background-color:lightgray;
	

}
.verticaltext{

} 



</style>
<?php

include "../../configCampeonato.php";


$cd_time1 = $_POST['idTime1']; 


$sql = mysql_query("SELECT t_name FROM ".$prefixo."_bl_teams where id='$cd_time1'")or die("ERRO no comando SQL :".mysql_error());
$time1= mysql_result($sql, 0);
$time1 = strtoupper ($time1);


$cd_time2 = $_POST['idTime2']; 


$sql = mysql_query("SELECT t_name FROM ".$prefixo."_bl_teams where id='$cd_time2'")or die("ERRO no comando SQL :".mysql_error());
$time2= mysql_result($sql, 0);
$time2 = strtoupper ($time2);
	

?>   
    
    
    
<body>
<table class="tabelaPrincipal" cellpadding="0" cellspacing="0">
  <tr>
    <td width="153"><div align="center"><img src="logoamador.png" width="100%" height="70" /></div></td>
		<td colspan="6" class="borderCimaFundo">
			<p align="center" style="font-size: 10px;"><strong>CLUBE TRêS MARIAS</p><p align="center" style="font-size: 10px;"></p>
      <p align="center" style="font-size: 10px;">SUMULA E RELAT&Oacute;RIO DA  PARTIDA  </b> </strong></p></td>
  </tr>
  <tr>
		<td colspan="3" class="borderCima">Equipe A : <b><?=$time1?> </b></td>
    <td width="75"><div align="center">X</div></td>
		<td colspan="3">Equipe B : <b><?=$time2?></b></td>
  </tr>
 
  
   <tr>
    <td class="borderCima">Resultado final</td>
    <td width="98">&nbsp;</td>
    <td width="44"><div align="center">X</div></td>
    <td>&nbsp;</td>
    <td colspan="3">Em favor de</td>
  </tr>
  <tr>
    <td>&Aacute;rbitro:</td>
   <td colspan="6" style="background-color:#FFFAFA;">
		 <div style="width:40%; float:left;"><b>&nbsp;<? echo utf8_decode(strtoupper($arbritro));?></b></div>
    <div style="width:60%; float:left;">Ass.: </div>
</td>
  </tr>

<tr>
    <td>Assistente: </td>
  <td colspan="6" style="background-color:#F8F8FF;">
		 <div style="width:40%; float:left;"><b>&nbsp;<? echo utf8_decode(strtoupper($assistente1));?></b></div>
    <div style="width:60%; float:left;">Ass.: </div>
</td>
  </tr>

<tr>
    <td>Assistente: </td>
   <td colspan="6" style="background-color:#FFFAFA;">
		 <div style="width:40%; float:left;"><b>&nbsp;<? echo utf8_decode(strtoupper($assistente2));?></b></div>
    <div style="width:60%; float:left;">Ass.: </div>
</td>
  </tr>



<tr>
    <td>Mes&aacute;rio: </td>
   <td colspan="6" style="background-color:#FFFAFA;">
		 <div style="width:40%; float:left;"><b>&nbsp;<? echo utf8_decode(strtoupper($mesario));?></b></div>
    <div style="width:60%; float:left;">Ass.: </div>
</td>
  </tr>

   <tr>
    <td colspan="7" class="borderCimaFundo" style="height: 13px !important;"><div align="center"><strong>RELA&Ccedil;&Atilde;O DE JOGADORES</strong></div></td>
  </tr>
  <tr>
    <td colspan="7"><p>As equipes dever&atilde;o apresentar ao representante antes do inicio da partida,  com a rela&ccedil;&atilde;o dos respectivos  jogadores , devidamente documentados com carteirinha  de identifica&ccedil;&atilde;o do campeonato ou documento de identidade  expedido por &oacute;rg&atilde;o p&uacute;blico oficial. </p></td>
  </tr>
   <tr>
    <td colspan="7" class="borderCimaFundo" style="height: 13px !important;"><div align="center"><strong>GOLS (ORDEM CRONOL&Oacute;GICA)</strong></div></td>
  </tr>
</table>
  <table class="tabelaPrincipal" cellpadding="0" cellspacing="0">
  <tr>
    <td width="36"><div align="center">N&ordm;</div></td>
    <td colspan="3">Jogador</td>
    <td width="49">Min</td>
    <td width="58"><div align="center">1T/2T</div></td>
    <td width="42"><div align="center">N&ordm;</div></td>
    <td width="203">Jogador</td>
    <td width="44">Min</td>
    <td width="57"><div align="center">1T/2T</div></td>
  </tr>
   <tr>
    <td class="borderCima">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td class="borderCima">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td class="borderCima">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
  
   <tr>
    <td class="borderCima">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
  <table class="tabelaPrincipal" cellpadding="0" cellspacing="0">
   <tr>
    <td colspan="10" class="borderCimaFundo" style="height: 13px !important;" ><div align="center"><strong>JOGADORES ADVERTIDOS  COM CART&Atilde;O AMARELO E VERMELHO (ORDEM CRONOL&Oacute;GICA)</strong></div></td>
    </tr>
  <tr>
    <td width="74" rowspan="10" class="verticaltext"><div align="center"><strong>EQUIPE A </strong></div></td>
    <td colspan="3" rowspan="2" style="width:45px;">N&ordm;</td>
    <td width="44" rowspan="2"><div align="center">CA</div></td>
    <td colspan="2"><div align="center">CV</div></td>
    <td width="50" rowspan="2" style="width:45px;">Min</td>
    <td width="52" rowspan="2">1T / 2T</td>
    <td width="319" rowspan="2" style="text-align:center; font-weight:bold;">Nome do Jogador</td>
    </tr>
  <tr>
    <td width="67"><div align="center">2&ordm;</div></td>
    <td width="68"><div align="center">C</div></td>
  </tr>
   <tr>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   
   <tr>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
     <td height="37" colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
     <td rowspan="9 " class="verticaltext"><div align="center"><strong>EQUIPE B </strong></div></td>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
   <tr>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
   <tr>
     <td colspan="3">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
   <tr>
     <td colspan="3">&nbsp;</td>
    <td >&nbsp;</td><td >&nbsp;</td><td >&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
    <td colspan="3">&nbsp;</td>
    <td >&nbsp;</td><td >&nbsp;</td><td >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
       <td >&nbsp;</td><td >&nbsp;</td><td >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
   <tr>
    <td colspan="3">&nbsp;</td>
    <td >&nbsp;</td><td >&nbsp;</td><td >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
 </table>
 <br>

 <?include 'time1.php'; ?>	
<?include 'comissao1.php'; ?>
<?include 'comissao2.php'; ?>
<?include 'time2.php'; ?>
<?include 'ignorarPunicoes.php'; ?>
     
     
     
<table class="tabelaPrincipal" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="11"><div><img src="http://www.amigosdabolaonline.com.br/site/media/bearleague/<? echo $logo1;?>" style="width:64px; height:64px; float:left;"> </div> <div style="float:left; margin: 19px;
    font-size: 18px;"> Equipe A : <?=$time1?></div></td>    
  </tr>
   <tr>
		 <td width="46" class="borderCima" style="text-align:center;"><b>N&ordm;</b></td>
		 <td width="256" class="borderCima"><b>Nome dos Jogadores</b></td>
		 <td colspan="4"><span style="margin-top:3px; float:left; font-weight:bold;">R.G.</span><div style=" width:100px;">&nbsp;</div></td>
		 <td width="350" colspan="5"><span class="borderCima"><b>Assinatura</b></span></td>       
   </tr>
  <tr>
    <td </td>
    <td style="<?=$t1_css0?>"><?=$t1_nome0." " .$t1_sobrenome0?> </td>
    <td colspan="4"><?=$t1_rg0 ?> </td>       
    <td colspan="5"> </td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css1?>"><?=$t1_nome1." " .$t1_sobrenome1?> </td>
    <td colspan="4"><?=$t1_rg1 ?> </td>
    <td colspan="5"> </td>
   </tr>
     <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css2?>"><?=$t1_nome2." " .$t1_sobrenome2?> </td>
    <td colspan="4"><?=$t1_rg2 ?> </td>
    <td colspan="5"> </td>
   </tr>
    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css3?>"><?=$t1_nome3." " .$t1_sobrenome3?> </td>
    <td colspan="4"><?=$t1_rg3 ?> </td>
   <td colspan="5"> </td>
   </tr>
    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css4?>"><?=$t1_nome4." " .$t1_sobrenome4?> </td>
    <td colspan="4"><?=$t1_rg4 ?> </td>
    <td colspan="5"> </td>
   </tr>
    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css5?>"><?=$t1_nome5." " .$t1_sobrenome5?> </td>
    <td colspan="4"><?=$t1_rg5 ?> </td>
   <td colspan="5"> </td>
   </tr>
     <tr>
    <td>&nbsp;</td>
      <td style="<?=$t1_css6?>"><?=$t1_nome6." " .$t1_sobrenome6?> </td>
    <td colspan="4"><?=$t1_rg6 ?> </td>
   <td colspan="5"> </td>
   </tr>
     <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css7?>"><?=$t1_nome7." " .$t1_sobrenome7?> </td>
    <td colspan="4"><?=$t1_rg7 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css8?>"><?=$t1_nome8." " .$t1_sobrenome8?> </td>
    <td colspan="4"><?=$t1_rg8 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css9?>"><?=$t1_nome9." " .$t1_sobrenome9?> </td>
    <td colspan="4"><?=$t1_rg9 ?> </td>
    <td colspan="5"> </td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css10?>"><?=$t1_nome10." " .$t1_sobrenome10?> </td>
    <td colspan="4"><?=$t1_rg10 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css11?>"><?=$t1_nome11." " .$t1_sobrenome11?> </td>
    <td colspan="4"><?=$t1_rg11 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css12?>"><?=$t1_nome12." " .$t1_sobrenome12?> </td>
    <td colspan="4"><?=$t1_rg12 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css13?>"><?=$t1_nome13." " .$t1_sobrenome13?> </td>
    <td colspan="4"><?=$t1_rg13 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css14?>"><?=$t1_nome14." " .$t1_sobrenome14?> </td>
    <td colspan="4"><?=$t1_rg14 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css15?>"><?=$t1_nome15." " .$t1_sobrenome15?> </td>
    <td colspan="4"><?=$t1_rg15 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css16?>"><?=$t1_nome16." " .$t1_sobrenome16?> </td>
    <td colspan="4"><?=$t1_rg16 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css17?>"><?=$t1_nome17." " .$t1_sobrenome17?> </td>
    <td colspan="4"><?=$t1_rg17 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css18?>"><?=$t1_nome18." " .$t1_sobrenome18?> </td>
    <td colspan="4"><?=$t1_rg18 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css19?>"><?=$t1_nome19." " .$t1_sobrenome19?> </td>
    <td colspan="4"><?=$t1_rg19 ?> </td>
   <td colspan="5"> </td>
   </tr>
     <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css20?>"><?=$t1_nome20." " .$t1_sobrenome20?> </td>
    <td colspan="4"><?=$t1_rg20 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css21?>"><?=$t1_nome21." " .$t1_sobrenome21?> </td>
    <td colspan="4"><?=$t1_rg21 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css22?>"><?=$t1_nome22." " .$t1_sobrenome22?> </td>
    <td colspan="4"><?=$t1_rg22 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css23?>"><?=$t1_nome23." " .$t1_sobrenome23?> </td>
    <td colspan="4"><?=$t1_rg23 ?> </td>
    <td colspan="5"> </td>
   </tr>
    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css24?>"><?=$t1_nome24." " .$t1_sobrenome24?> </td>
    <td colspan="4"><?=$t1_rg24 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css25?>"><?=$t1_nome25." " .$t1_sobrenome25?> </td>
    <td colspan="4"><?=$t1_rg25 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css26?>"><?=$t1_nome26." " .$t1_sobrenome26?> </td>
    <td colspan="4"><?=$t1_rg26 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css27?>"><?=$t1_nome27." " .$t1_sobrenome27?> </td>
    <td colspan="4"><?=$t1_rg27 ?> </td>
   <td colspan="5"> </td>
   </tr>
	 <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css28?>"><?=$t1_nome28." " .$t1_sobrenome28?> </td>
    <td colspan="4"><?=$t1_rg28 ?> </td>
   <td colspan="5"> </td>
   </tr>

    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t1_css29?>"><?=$t1_nome29." " .$t1_sobrenome29?> </td>
    <td colspan="4"><?=$t1_rg29 ?> </td>
    <td colspan="5"> </td>
   </tr>	
  <tr>   
		<td colspan="11" style="text-align:center; font-weight:bold;" >COMISS&Atilde;O T&EacuteCNICA</td>   
	</tr>
	
	<tr>
		<td colspan="2" style="<?=$tc1_css0?>"><b>T&eacute;cnico :</b> <?=$tc1_nome0." " .$tc1_sobrenome0?></td>  
    <td colspan="4"><?=$tc1_rg0 ?></td>
    <td colspan="5"></td>
   </tr>	
	
		<tr>
			<td colspan="2" style="<?=$tc1_css1?>"><b>Aux. T&eacute;cnico :</b> <?=$tc1_nome1." " .$tc1_sobrenome1?></td>  
    <td colspan="4"><?=$tc1_rg1 ?></td>
    <td colspan="5"></td>
   </tr>
	
		<tr>
			<td colspan="2" style="<?=$tc1_css2?>"><b>Aux. T&eacute;cnico :</b> <?=$tc1_nome2." " .$tc1_sobrenome2?></td>  
    <td colspan="4"><?=$tc1_rg2 ?></td>
    <td colspan="5"></td>
   </tr>
	
	
	
	
	<tr>
    <td colspan="11" style="font-size: 10px;" class="borderCima">CA (cart&atilde;o amarelo); CV (cart&atilde;o vermelho); 2&ordm; CA (segundo cart&atilde;o amarelo); CVD (cart&atilde;o vermelho direto). Situa&ccedil;&otilde;es poss&iacute;veis (colocar &quot;x&quot; nos espa&ccedil;os  correspondentes): a) somente cart&atilde;o amarelo = &quot;x&rsquo; em CA; b) expuls&atilde;o por 2&ordm; CA = &quot;x&quot; em CA e &quot;x&quot; em 2&ordm; CA;c) expuls&atilde;o direta = &quot;x&quot; em CVD; e d) cart&atilde;o amarelo seguido de expuls&atilde;o direta = &quot;x&quot; em CA e &quot;x&quot; em CVD.
			&nbsp;<b>
	<?
	setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo strftime('%A, %d de %B de %Y', strtotime('today'));
			
			?>
			
			</b>
			
			 </td>
   </tr>
</table>
	
<div style="page-break-after: always;">

</div> 
	
	<div style="hheight:120px; width:100%;"></div>		
	
	<table class="tabelaPrincipal" cellpadding="0" cellspacing="0" style="margin-top:20px;">
	<tr>
		<td colspan="11"><div><img src="http://www.amigosdabolaonline.com.br/site/media/bearleague/<? echo $logo2;?>" style="width:64px; height:64px; float:left;"> </div> <div style="float:left; margin: 19px;
    font-size: 18px;"> Equipe B : <?=$time2?></div></td>    
  </tr>

    <tr>
		 <td width="46" class="borderCima" style="text-align:center;"><b>N&ordm;</b></td>
		 <td width="256" class="borderCima"><b>Nome dos Jogadores</b></td>
		 <td colspan="4"><span style="margin-top:3px; float:left; font-weight:bold;">R.G.</span><div style=" width:100px;">&nbsp;</div></td>
		 <td width="350" colspan="5"><span class="borderCima"><b>Assinatura</b></span></td>       
   </tr>
  <tr>
    <td </td>
    <td style="<?=$t2_css0?>"><?=$t2_nome0." " .$t2_sobrenome0?> </td>
    <td colspan="4"><?=$t2_rg0 ?> </td>
    <td colspan="5"> </td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css1?>"><?=$t2_nome1." " .$t2_sobrenome1?> </td>
    <td colspan="4"><?=$t2_rg1 ?> </td>
    <td colspan="5"> </td>
   </tr>
     <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css2?>"><?=$t2_nome2." " .$t2_sobrenome2?> </td>
    <td colspan="4"><?=$t2_rg2 ?> </td>
    <td colspan="5"> </td>
   </tr>
    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css3?>"><?=$t2_nome3." " .$t2_sobrenome3?> </td>
    <td colspan="4"><?=$t2_rg3 ?> </td>
    <td colspan="5"> </td>
   </tr>
    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css4?>"><?=$t2_nome4." " .$t2_sobrenome4?> </td>
    <td colspan="4"><?=$t2_rg4 ?> </td>
    <td colspan="5"> </td>
   </tr>
    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css5?>"><?=$t2_nome5." " .$t2_sobrenome5?> </td>
    <td colspan="4"><?=$t2_rg5 ?> </td>
   <td colspan="5"> </td>
   </tr>
     <tr>
    <td>&nbsp;</td>
      <td style="<?=$t2_css6?>"><?=$t2_nome6." " .$t2_sobrenome6?> </td>
    <td colspan="4"><?=$t2_rg6 ?> </td>
   <td colspan="5"> </td>
   </tr>
     <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css7?>"><?=$t2_nome7." " .$t2_sobrenome7?> </td>
    <td colspan="4"><?=$t2_rg7 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css8?>"><?=$t2_nome8." " .$t2_sobrenome8?> </td>
    <td colspan="4"><?=$t2_rg8 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css9?>"><?=$t2_nome9." " .$t2_sobrenome9?> </td>
    <td colspan="4"><?=$t2_rg9 ?> </td>
    <td colspan="5"> </td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css10?>"><?=$t2_nome10." " .$t2_sobrenome10?> </td>
    <td colspan="4"><?=$t2_rg10 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css11?>"><?=$t2_nome11." " .$t2_sobrenome11?> </td>
    <td colspan="4"><?=$t2_rg11 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css12?>"><?=$t2_nome12." " .$t2_sobrenome12?> </td>
    <td colspan="4"><?=$t2_rg12 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css13?>"><?=$t2_nome13." " .$t2_sobrenome13?> </td>
    <td colspan="4"><?=$t2_rg13 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css14?>"><?=$t2_nome14." " .$t2_sobrenome14?> </td>
    <td colspan="4"><?=$t2_rg14 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css15?>"><?=$t2_nome15." " .$t2_sobrenome15?> </td>
    <td colspan="4"><?=$t2_rg15 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css16?>"><?=$t2_nome16." " .$t2_sobrenome16?> </td>
    <td colspan="4"><?=$t2_rg16 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css17?>"><?=$t2_nome17." " .$t2_sobrenome17?> </td>
    <td colspan="4"><?=$t2_rg17 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css18?>"><?=$t2_nome18." " .$t2_sobrenome18?> </td>
    <td colspan="4"><?=$t2_rg18 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css19?>"><?=$t2_nome19." " .$t2_sobrenome19?> </td>
    <td colspan="4"><?=$t2_rg19 ?> </td>
   <td colspan="5"> </td>
   </tr>
     <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css20?>"><?=$t2_nome20." " .$t2_sobrenome20?> </td>
    <td colspan="4"><?=$t2_rg20 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css21?>"><?=$t2_nome21." " .$t2_sobrenome21?> </td>
    <td colspan="4"><?=$t2_rg21 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css22?>"><?=$t2_nome22." " .$t2_sobrenome22?> </td>
    <td colspan="4"><?=$t2_rg22 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css23?>"><?=$t2_nome23." " .$t2_sobrenome23?> </td>
    <td colspan="4"><?=$t2_rg23 ?> </td>
   <td colspan="5"> </td>
   </tr>
    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css24?>"><?=$t2_nome24." " .$t2_sobrenome24?> </td>
    <td colspan="4"><?=$t2_rg24 ?> </td>
   <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css25?>"><?=$t2_nome25." " .$t2_sobrenome25?> </td>
    <td colspan="4"><?=$t2_rg25 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css26?>"><?=$t2_nome26." " .$t2_sobrenome26?> </td>
    <td colspan="4"><?=$t2_rg26 ?> </td>
    <td colspan="5"> </td>
   </tr>
      <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css27?>"><?=$t2_nome27." " .$t2_sobrenome27?> </td>
    <td colspan="4"><?=$t2_rg27 ?> </td>
    <td colspan="5"> </td>
   </tr>
	 <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css28?>"><?=$t2_nome28." " .$t2_sobrenome28?> </td>
    <td colspan="4"><?=$t2_rg28 ?> </td>
   <td colspan="5"> </td>
   </tr>

    <tr>
    <td>&nbsp;</td>
    <td style="<?=$t2_css29?>"><?=$t2_nome29." " .$t2_sobrenome29?> </td>
    <td colspan="4"><?=$t2_rg29 ?> </td>
    <td colspan="5"> </td>
   </tr>	
     <tr>   
		<td colspan="11" style="text-align:center; font-weight:bold;" >COMISS&Atilde;O T&EacuteCNICA</td>   
	</tr>
	
<tr>
	<td colspan="2" style="<?=$tc2_css0?>"><b>T&eacute;cnico : </b><?=$tc2_nome0." " .$tc2_sobrenome0?></td>  
    <td colspan="4"><?=$tc2_rg0 ?></td>
    <td colspan="5"></td>
   </tr>	
	
		<tr>
			<td colspan="2" style="<?=$tc2_css1?>"><b>Aux. T&eacute;cnico : </b><?=$tc2_nome1." " .$tc2_sobrenome1?></td>  
    <td colspan="4"><?=$tc2_rg1 ?></td>
    <td colspan="5"></td>
   </tr>
	
		<tr>
			<td colspan="2" style="<?=$tc2_css2?>"><b>Aux. T&eacute;cnico : </b><?=$tc2_nome2." " .$tc2_sobrenome2?></td>  
    <td colspan="4"><?=$tc2_rg2 ?></td>
    <td colspan="5"></td>
   </tr>
	
	
	
	
	<tr>
    <td colspan="11" style="font-size: 10px;" class="borderCima">CA (cart&atilde;o amarelo); CV (cart&atilde;o vermelho); 2&ordm; CA (segundo cart&atilde;o amarelo); CVD (cart&atilde;o vermelho direto). Situa&ccedil;&otilde;es poss&iacute;veis (colocar &quot;x&quot; nos espa&ccedil;os  correspondentes): a) somente cart&atilde;o amarelo = &quot;x&rsquo; em CA; b) expuls&atilde;o por 2&ordm; CA = &quot;x&quot; em CA e &quot;x&quot; em 2&ordm; CA;c) expuls&atilde;o direta = &quot;x&quot; em CVD; e d) cart&atilde;o amarelo seguido de expuls&atilde;o direta = &quot;x&quot; em CA e &quot;x&quot; em CVD.
			&nbsp;<b><br>
	<?
	setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo strftime('%A, %d de %B de %Y', strtotime('today'));
			
			?>
			
			</b>	 
			 
			 </td>
   </tr>
</table>

</body>
</html>



