<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width,maximum-scale=1.0">
      <style type="text/css" media="screen"></style>
      <style type="text/css" media="print">
         /* @page {size:landscape}  */   
      </style>
      <title>SÚMULA OFICIAL CLUBE CURITIBANO - FUTEBOL SOCIETY</title>
   </head>
   <body >
          <div style="float:left; border :1px  solid; float:left; width:1200px; height:665px; background-color:white;">
        <div style="float:left;float:left;width:100%;height:20px;background-color:white;padding-top: 5px;padding-bottom: 5px;background-color: #344072; color:white;">
            <table cellspacing="0" border="0" width="100%">
               <tbody>
                  <tr>
                     <td style="text-align:center;/* border-top: 1px solid #000000; */border-bottom: 1px solid #000000;/* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" height="27" align="left" valign="top">
                       <font face="Verdana" size="4" style="color:white;">CLUBE CURITIBANO - FUTEBOL SOCIETY  </font></td>
                  </tr>
               </tbody>
            </table>
         </div>
            
    <div style="float:left; float:left; width:100%; height:30px; background-color:white; ">
            <table cellspacing="0" border="0" width="100%">
               <tbody>
                  <tr>
                     <td style="text-align:center;/* border-top: 1px solid #000000; */border-bottom: 1px solid #000000;/* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" height="27" align="left" valign="top">
                      
                       <div style="width:100%;float:left;height: 100%;border-top: 1px black solid;">
                         <div style="width: 38%;float:left;height: 100%;border-right: 2px black solid;     padding-top: 5px;"><?= strtoupper($equipe[0]->nomeEquipe) ;?></div>
                       <div style="width:20%;float:left;height: 100%;text:align:center;padding-top: 1px;font-size: 21px;">X</div>
                         <div style="width:40%;float:left;height: 100%;border-left: 2px black solid;     padding-top: 5px;"><?= strtoupper($equipe[0]->nomeEquipe2) ;?></div>
                       
                       </div></td>
                  </tr>
               </tbody>
            </table>
         </div>  
            
        <? include 'cabecalho.php';?>         
        <? include 'equipe1.php'; ?>        
        <? 
        include 'equipe2.php';
        ?>      
      </div>
   </body>
</html>

