<style>
  .bordaTabela{
    border: 1px solid #000000;
  }
  
</style>


<div style="background-color:white;width:49%;float:left;/* height:100%; */margin-left:10px;">
            <table cellspacing="0" border="0">
               <colgroup width="18"></colgroup>
               <colgroup width="28"></colgroup>
               <colgroup width="18"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup span="2" width="18"></colgroup>
               <colgroup width="28"></colgroup>
               <colgroup width="18"></colgroup>
               <colgroup width="29"></colgroup>
               <colgroup width="18"></colgroup>
               <colgroup width="29"></colgroup>
               <colgroup width="18"></colgroup>
               <colgroup width="28"></colgroup>
               <colgroup span="2" width="18"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup width="8"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup width="8"></colgroup>
               <colgroup width="20"></colgroup>
               <colgroup span="2" width="18"></colgroup>
               <colgroup width="8"></colgroup>
               <colgroup width="18"></colgroup>
               <colgroup width="15"></colgroup>
               <colgroup width="8"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup width="18"></colgroup>
               <colgroup width="28"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup width="8"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup width="18"></colgroup>
               <colgroup width="8"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup width="18"></colgroup>
               <colgroup width="8"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup width="8"></colgroup>
               <colgroup width="9"></colgroup>
               <colgroup width="18"></colgroup>
               <tbody>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */text-align: left;padding-left: 5px;background-color: lightgray;" colspan="41" height="18" align="center" valign="top"><b><font face="Arial" size="1"><?php echo strtoupper($equipe[0]->nomeEquipe2); ?> </font></b></td>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="4" height="18" align="center" valign="top"><b><font face="Arial" size="1">NÚMERO</font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="9" align="center" valign="top"><b><font face="Arial" size="1">JOGADORES</font></b></td>
                     <td style="width:50px;border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="2" align="center" valign="top"><b><font face="Arial" size="1">INI.</font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="7" align="center" valign="top"><b><font face="Arial" size="1">FALTAS</font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="top"><b><font face="Arial" size="1">AM</font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */width: 4%;" colspan="3" align="center" valign="top"><b style="
"><font face="Arial" size="1">AZ</font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="2" align="center" valign="top"><b><font face="Arial" size="1">VM</font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" colspan="11" align="center" valign="top"><b><font face="Arial" size="1">ACUMULATIVAS</font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[0]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[0]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[0]->nomeCompleto; ?></font></td>
                     <td style="border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="width:30px; border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b style="
    color: white;
"><font face="Arial" size="1" color="#000000" style="
    color: white;
"></font></b></td>
                     <td style="width:30px; border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000" style="
    color: white;
"></font></b></td>
                     <td style="width:20px; border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000" style="
    color: white;
"></font></b></td>
                     <td style="width:20px; border-top: 1px solid #000000;border-bottom: 1px solid #000000;/* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000" style="
    /* color: wheat; */
    color: white;
"></font></b></td>
                     <td style="width:25px; border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000" style="
    color: white;
"></font></b></td>
                     <td style="border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;border-bottom: 1px solid #000000;border-left: 1px solid #000000;border-right: 1px solid #000000;" colspan="11" align="center" valign="top" sdval="1" sdnum="1046;0;0">
                      <div style="width:100%; float:left;">
                        
                        <div style="width:14%; float:left; font-size: 10px;  padding-top: 5px; ">1</div>
                        <div style="width:14%; float:left; border-left: 1px solid #000000; font-size: 10px;  padding-top: 5px; ">2</div>
                        <div style="width:13%; float:left; border-left: 1px solid #000000; font-size: 10px;  padding-top: 5px; ">3</div>
                        <div style="width:14%; float:left;  border-left: 1px solid #000000;  font-size: 10px;  padding-top: 5px;">4</div>
                         <div style="width:13%;float:left;border-left: 1px solid #000000;/* border-right: 1px solid #000000; */font-size: 10px;padding-top: 5px;">5</div>
                         <div style="width:14%; float:left;  border-left: 1px solid #000000;  font-size: 10px;  padding-top: 5px; ">6</div>
                         <div style="width:13%; float:left; border-left: 1px solid #000000;    font-size: 10px;  padding-top: 5px; ">7</div>
                      
                       
                      </div>
                    
                    </td>
                     
                     
                     
                     
                     
                     
                  </tr>
                  <tr>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[1]->rg; ?></font></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[1]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[1]->nomeCompleto; ?></font></td></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; */border-bottom: 1px solid #000000;border-left: 1px solid #000000;border-right: 1px solid #000000;" colspan="11" align="center" valign="top" sdval="1" sdnum="1046;0;0">
                      <div style="width:100%; float:left;">
                        
                        <div style="width:14%; float:left; font-size: 10px;  padding-top: 5px; ">1</div>
                        <div style="width:14%; float:left; border-left: 1px solid #000000; font-size: 10px;  padding-top: 5px; ">2</div>
                        <div style="width:13%; float:left; border-left: 1px solid #000000; font-size: 10px;  padding-top: 5px; ">3</div>
                        <div style="width:14%; float:left;  border-left: 1px solid #000000;  font-size: 10px;  padding-top: 5px;">4</div>
                         <div style="width:13%;float:left;border-left: 1px solid #000000;/* border-right: 1px solid #000000; */font-size: 10px;padding-top: 5px;">5</div>
                         <div style="width:14%; float:left;  border-left: 1px solid #000000;  font-size: 10px;  padding-top: 5px; ">6</div>
                         <div style="width:13%; float:left; border-left: 1px solid #000000;    font-size: 10px;  padding-top: 5px; ">7</div>
                      
                       
                      </div>
                    </td>
                     
                     
                     
                     
                     
                     
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[2]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[2]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[2]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000 */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="/* border-top: 1px solid #000000; *//* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" colspan="11" align="center" valign="top"><b><font face="Arial" size="1">PEDIDO DE TEMPO</font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[3]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[3]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[3]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" colspan="11" align="center" valign="top">
                       <div style="width:100%; float:left;">
                        <div style="width:32%; float:left; font-size: 10px;  padding-top: 5px; "> 1º P</div>
                        <div style="width:32%; float:left; border-left: 1px solid #000000; font-size: 10px;  padding-top: 5px; "> 2º P</div>
                        <div style="width:32%; float:left; border-left: 1px solid #000000; font-size: 10px;  padding-top: 5px; "> EX</div>
                       
                       </div>
                    </td>
                     
                     
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[4]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[4]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[4]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" colspan="11" align="center" valign="middle">
                     <div style="width:100%; float:left;">
                        <div style="width:32%; float:left; font-size: 10px;  padding-top: 5px; color:white; "> 1º P</div>
                        <div style="width:32%; float:left; border-left: 1px solid #000000; font-size: 10px; color:white;  padding-top: 5px; "> 2º P</div>
                        <div style="width:32%; float:left; border-left: 1px solid #000000; font-size: 10px; color:white; padding-top: 5px; "> EX</div>
                       
                       </div>
                      </td>
                     
                     
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[5]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[5]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[5]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" rowspan="10" align="center" valign="top"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" colspan="3" rowspan="20" align="center" valign="top"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" colspan="2" rowspan="10" align="center" valign="top"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" rowspan="20" align="center" valign="top"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" rowspan="2" height="17" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[6]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" rowspan="2" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[6]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[6]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[7]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[7]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[7]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[8]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[8]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[8]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" rowspan="2" height="17" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[9]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" rowspan="2" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[9]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[9]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="2" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[10]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000" <? if ($atletas2[10]->isSuspenso==1){ echo 'style="
    text-decoration: line-through;"';}   ?>><?=$atletas2[10]->nomeCompleto; ?></font></td></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[11]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[11]->nomeCompleto; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" rowspan="2" height="17" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[12]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" rowspan="2" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[12]->nomeCompleto; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" rowspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" rowspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */background-color: lightgrey;" colspan="2" rowspan="10" align="center" valign="middle"><div style="/*! border:1px red solid; */transform: rotate(270deg);"><font size="1" face="Arial">CAPITAO</font></div></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" rowspan="10" align="center" valign="middle"><div style="/*! border:1px red solid; */transform: rotate(270deg); color:white;"><font size="1" face="Arial">TÉCNICO</font></div></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */background-color: lightgrey;" colspan="2" rowspan="10" align="center" valign="middle"><div style="/*! border:1px red solid; */transform: rotate(270deg);"><font size="1" face="Arial">TÉCNICO</font></div></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[13]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[13]->nomeCompleto; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[14]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[14]->nomeCompleto; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[15]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[15]->nomeCompleto; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[16]->rg; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"><font face="Arial" size="1" color="#000000"><?=$atletas2[16]->nomeCompleto; ?></font></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; *//* border-left: 1px solid #000000; *//* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="center" valign="top" sdnum="1046;0;0"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
            
         
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="4" height="18" align="center" valign="middle"></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */background-color: lightgray;" colspan="9" align="center" valign="top"><b><font face="Arial" size="1">TÉCNICO</font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */" colspan="4" height="18" align="center" valign="middle"></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="middle"></td>
                     <td style="background-color: lightgrey;border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="9" align="center" valign="top"><b><font face="Arial" size="1">AUXILIAR</font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" colspan="2" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
                  </tr>
               </tbody>
            </table>
            <table cellspacing="0" border="0" width="100%">
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <tbody>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */background-color: lightgray;/* color: white; */font-size: 16px;/* transform-style: unset; *//* font-stretch: condensed; */font-variant: all-small-caps;" rowspan="2" valign="middle" height="34" align="center">Gols</td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="left"><br></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="left"><br></td>
                  </tr>
               </tbody>
            </table>
  
          <table cellspacing="0" border="0" width="100%">
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <colgroup width="32"></colgroup>
               <tbody>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000 */background-color: black; color: white;    font-size: 16px;/* transform-style: unset; *//* font-stretch: condensed; */font-variant: all-small-caps;     width: 32px;" rowspan="2" valign="middle" height="34" align="center">ASS.</td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="left"><br></td>
                  </tr>
                  <tr>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;/* border-right: 1px solid #000000; */" align="left"><br></td>
                     <td style="border-top: 1px solid #000000;/* border-bottom: 1px solid #000000; */border-left: 1px solid #000000;border-right: 1px solid #000000;" align="left"><br></td>
                  </tr>
               </tbody>
            </table>
         </div>