<?php

include "../../configCampeonato.php";

$css = "";

       
$sqlLogo1 = "SELECT t_emblem FROM ".$prefixo."_bl_teams where id='$cd_time1'";
$sqlLogo2 = "SELECT t_emblem FROM ".$prefixo."_bl_teams where id='$cd_time2'";

$queryl1=  mysql_query($sqlLogo1);
$queryl2=  mysql_query($sqlLogo2);

$logo1 = mysql_result($queryl1,0);
$logo2 = mysql_result($queryl2,0);



$sql = "SELECT   ".$prefixo."_bl_players.first_name, ".$prefixo."_bl_players.last_name,  ".$prefixo."_bl_extra_values.fvalue, ".$prefixo."_bl_teams.t_name , ".$prefixo."_bl_players.id

        FROM

            ".$prefixo."_bl_players INNER JOIN

            ".$prefixo."_bl_teams ON ".$prefixo."_bl_players.team_id = ".$prefixo."_bl_teams.id INNER JOIN

            ".$prefixo."_bl_extra_values ON ".$prefixo."_bl_players.id = ".$prefixo."_bl_extra_values.uid

            INNER JOIN

            ".$prefixo."_bl_extra_filds ON ".$prefixo."_bl_extra_filds.id =

              ".$prefixo."_bl_extra_values.f_id where ".$prefixo."_bl_teams.id='$cd_time1' and ".$prefixo."_bl_extra_filds.id=1 and ".$prefixo."_bl_players.position_id <=12 order by trim(".$prefixo."_bl_players.first_name) asc";


            $query=  mysql_query($sql);

			

            $i=0;     

             while($campo=mysql_fetch_row($query)){
                 
             
                 
             //verificar total de cart�es
             $player_id = $campo[4];
            // echo $player_id;    		    
          
        $is_suspenso=0;
		

	if ($i==0){

            $t1_sobrenome0=$campo[1];	

       	    $t1_nome0=$campo[0];

            $t1_rg0=$campo[2];
            
            ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css0 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css0 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==1){

            $t1_sobrenome1=$campo[1];	

       	    $t1_nome1=$campo[0];

            $t1_rg1=$campo[2];  
            
             ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css1 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css1 = "";
               }
            /////////////////////////////////////////////////////////     

        }else if ($i==2){

            $t1_sobrenome2=$campo[1];	

       	    $t1_nome2=$campo[0];

            $t1_rg2=$campo[2];    
            
             ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css2 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css2 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==3){

            $t1_sobrenome3=$campo[1];	

       	    $t1_nome3=$campo[0];

            $t1_rg3=$campo[2];    
            
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css3 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css3 = "";
               }
            ///////////////////////////////////////////////////////// 
            
            

            

        }else if ($i==4){

            $t1_sobrenome4=$campo[1];	

       	    $t1_nome4=$campo[0];

            $t1_rg4=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css4 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css4 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==5){

            $t1_sobrenome5=$campo[1];	

       	    $t1_nome5=$campo[0];

            $t1_rg5=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css5 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css5 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==6){

            $t1_sobrenome6=$campo[1];	

       	    $t1_nome6=$campo[0];

            $t1_rg6=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css6 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css6 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==7){

            $t1_sobrenome7=$campo[1];	

       	    $t1_nome7=$campo[0];

            $t1_rg7=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css7 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css7 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==8){

            $t1_sobrenome8=$campo[1];	

       	    $t1_nome8=$campo[0];

            $t1_rg8=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css8 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css8 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==9){

            $t1_sobrenome9=$campo[1];	

       	    $t1_nome9=$campo[0];

            $t1_rg9=$campo[2]; 
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css9 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css9 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==10){

            $t1_sobrenome10=$campo[1];	

       	    $t1_nome10=$campo[0];

            $t1_rg10=$campo[2];   
            
             ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css10 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css10 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==11){

            $t1_sobrenome11=$campo[1];	

       	    $t1_nome11=$campo[0];

            $t1_rg11=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css11 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css11 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==12){

            $t1_sobrenome12=$campo[1];	

       	    $t1_nome12=$campo[0];

            $t1_rg12=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css12 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css12 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==13){

            $t1_sobrenome13=$campo[1];	

       	    $t1_nome13=$campo[0];

            $t1_rg13=$campo[2];    

               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css13 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css13 = "";
               }
            ///////////////////////////////////////////////////////// 
            
            

        }

        else if ($i==14){

            $t1_sobrenome14=$campo[1];	

       	    $t1_nome14=$campo[0];

            $t1_rg14=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css14 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css14 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==15){

            $t1_sobrenome15=$campo[1];	

       	    $t1_nome15=$campo[0];

            $t1_rg15=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css15 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css15 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==16){

            $t1_sobrenome16=$campo[1];	

       	    $t1_nome16=$campo[0];

            $t1_rg16=$campo[2];   
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css16 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css16 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==17){

            $t1_sobrenome17=$campo[1];	

       	    $t1_nome17=$campo[0];

            $t1_rg17=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css17 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css17 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==18){

            $t1_sobrenome18=$campo[1];	

       	    $t1_nome18=$campo[0];

            $t1_rg18=$campo[2];   
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css18 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css18 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==19){

            $t1_sobrenome19=$campo[1];	

       	    $t1_nome19=$campo[0];

            $t1_rg19=$campo[2];  
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css19 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css19 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==20){

            $t1_sobrenome20=$campo[1];	

       	    $t1_nome20=$campo[0];

            $t1_rg20=$campo[2];    
            
             ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css20 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css20 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==21){

            $t1_sobrenome21=$campo[1];	

       	    $t1_nome21=$campo[0];

            $t1_rg21=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css21 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css21 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==22){

            $t1_sobrenome22=$campo[1];	

       	    $t1_nome22=$campo[0];

            $t1_rg22=$campo[2];    

                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css22 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css22 = "";
               }
            ///////////////////////////////////////////////////////// 
            
            

        }

        else if ($i==23){

            $t1_sobrenome23=$campo[1];	

       	    $t1_nome23=$campo[0];

            $t1_rg23=$campo[2];   
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css23 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css23 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==24){

            $t1_sobrenome24=$campo[1];	

       	    $t1_nome24=$campo[0];

            $t1_rg24=$campo[2];    

            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css24 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css24 = "";
               }
            ///////////////////////////////////////////////////////// 
            

        }

        else if ($i==25){

            $t1_sobrenome25=$campo[1];	

       	    $t1_nome25=$campo[0];

            $t1_rg25=$campo[2];  
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css25 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css25 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==26){

            $t1_sobrenome26=$campo[1];	

       	    $t1_nome26=$campo[0];

            $t1_rg26=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css26 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css26 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==27){

            $t1_sobrenome27=$campo[1];	

       	    $t1_nome27=$campo[0];

            $t1_rg27=$campo[2];   
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css27 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css27 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==28){

            $t1_sobrenome28=$campo[1];	

       	    $t1_nome28=$campo[0];

            $t1_rg28=$campo[2];  
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css28 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css28 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==29){

            $t1_sobrenome29=$campo[1];	

       	    $t1_nome29=$campo[0];

            $t1_rg29=$campo[2]; 
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css29 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css29 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==30){

            $t1_sobrenome30=$campo[1];	

       	    $t1_nome30=$campo[0];

            $t1_rg30=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t1_css30 = "text-decoration: line-through";
                
               }else{                   
                   $t1_css30 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }                   

                        

        $i++;                

      }

      

       	   



      

?>





		