<?php

include "../../configCampeonato.php";

  $css = "";


$sql = "SELECT   ".$prefixo."_bl_players.first_name, ".$prefixo."_bl_players.last_name,  ".$prefixo."_bl_extra_values.fvalue, ".$prefixo."_bl_teams.t_name , ".$prefixo."_bl_players.id

        FROM

            ".$prefixo."_bl_players INNER JOIN

            ".$prefixo."_bl_teams ON ".$prefixo."_bl_players.team_id = ".$prefixo."_bl_teams.id INNER JOIN

            ".$prefixo."_bl_extra_values ON ".$prefixo."_bl_players.id = ".$prefixo."_bl_extra_values.uid

            INNER JOIN

            ".$prefixo."_bl_extra_filds ON ".$prefixo."_bl_extra_filds.id =

              ".$prefixo."_bl_extra_values.f_id where ".$prefixo."_bl_teams.id='$cd_time2' and ".$prefixo."_bl_extra_filds.id=1 and ".$prefixo."_bl_players.position_id <=12 order by trim(".$prefixo."_bl_players.first_name)";

//echo $sql;

            $query=  mysql_query($sql);

			

            $i=0;     

									

             while($campo=mysql_fetch_row($query)){
                 
             
                 
             //verificar total de cart�es
             $player_id = $campo[4];
        $is_suspenso=0;            
		

	if ($i==0){

            $t2_sobrenome0=$campo[1];	

       	    $t2_nome0=$campo[0];

            $t2_rg0=$campo[2];
            
            ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css0 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css0 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==1){

            $t2_sobrenome1=$campo[1];	

       	    $t2_nome1=$campo[0];

            $t2_rg1=$campo[2];  
            
             ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css1 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css1 = "";
               }
            /////////////////////////////////////////////////////////     

        }else if ($i==2){

            $t2_sobrenome2=$campo[1];	

       	    $t2_nome2=$campo[0];

            $t2_rg2=$campo[2];    
            
             ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css2 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css2 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==3){

            $t2_sobrenome3=$campo[1];	

       	    $t2_nome3=$campo[0];

            $t2_rg3=$campo[2];    
            
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css3 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css3 = "";
               }
            ///////////////////////////////////////////////////////// 
            
            

            

        }else if ($i==4){

            $t2_sobrenome4=$campo[1];	

       	    $t2_nome4=$campo[0];

            $t2_rg4=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css4 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css4 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==5){

            $t2_sobrenome5=$campo[1];	

       	    $t2_nome5=$campo[0];

            $t2_rg5=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css5 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css5 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==6){

            $t2_sobrenome6=$campo[1];	

       	    $t2_nome6=$campo[0];

            $t2_rg6=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css6 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css6 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==7){

            $t2_sobrenome7=$campo[1];	

       	    $t2_nome7=$campo[0];

            $t2_rg7=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css7 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css7 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==8){

            $t2_sobrenome8=$campo[1];	

       	    $t2_nome8=$campo[0];

            $t2_rg8=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css8 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css8 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==9){

            $t2_sobrenome9=$campo[1];	

       	    $t2_nome9=$campo[0];

            $t2_rg9=$campo[2]; 
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css9 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css9 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==10){

            $t2_sobrenome10=$campo[1];	

       	    $t2_nome10=$campo[0];

            $t2_rg10=$campo[2];   
            
             ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css10 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css10 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==11){

            $t2_sobrenome11=$campo[1];	

       	    $t2_nome11=$campo[0];

            $t2_rg11=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css11 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css11 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==12){

            $t2_sobrenome12=$campo[1];	

       	    $t2_nome12=$campo[0];

            $t2_rg12=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css12 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css12 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==13){

            $t2_sobrenome13=$campo[1];	

       	    $t2_nome13=$campo[0];

            $t2_rg13=$campo[2];    

               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css13 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css13 = "";
               }
            ///////////////////////////////////////////////////////// 
            
            

        }

        else if ($i==14){

            $t2_sobrenome14=$campo[1];	

       	    $t2_nome14=$campo[0];

            $t2_rg14=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css14 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css14 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==15){

            $t2_sobrenome15=$campo[1];	

       	    $t2_nome15=$campo[0];

            $t2_rg15=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css15 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css15 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==16){

            $t2_sobrenome16=$campo[1];	

       	    $t2_nome16=$campo[0];

            $t2_rg16=$campo[2];   
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css16 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css16 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==17){

            $t2_sobrenome17=$campo[1];	

       	    $t2_nome17=$campo[0];

            $t2_rg17=$campo[2];    
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css17 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css17 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==18){

            $t2_sobrenome18=$campo[1];	

       	    $t2_nome18=$campo[0];

            $t2_rg18=$campo[2];   
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css18 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css18 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==19){

            $t2_sobrenome19=$campo[1];	

       	    $t2_nome19=$campo[0];

            $t2_rg19=$campo[2];  
            
               ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css19 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css19 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==20){

            $t2_sobrenome20=$campo[1];	

       	    $t2_nome20=$campo[0];

            $t2_rg20=$campo[2];    
            
             ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css20 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css20 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==21){

            $t2_sobrenome21=$campo[1];	

       	    $t2_nome21=$campo[0];

            $t2_rg21=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css21 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css21 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==22){

            $t2_sobrenome22=$campo[1];	

       	    $t2_nome22=$campo[0];

            $t2_rg22=$campo[2];    

                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css22 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css22 = "";
               }
            ///////////////////////////////////////////////////////// 
            
            

        }

        else if ($i==23){

            $t2_sobrenome23=$campo[1];	

       	    $t2_nome23=$campo[0];

            $t2_rg23=$campo[2];   
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css23 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css23 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==24){

            $t2_sobrenome24=$campo[1];	

       	    $t2_nome24=$campo[0];

            $t2_rg24=$campo[2];    

            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css24 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css24 = "";
               }
            ///////////////////////////////////////////////////////// 
            

        }

        else if ($i==25){

            $t2_sobrenome25=$campo[1];	

       	    $t2_nome25=$campo[0];

            $t2_rg25=$campo[2];  
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css25 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css25 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }

        else if ($i==26){

            $t2_sobrenome26=$campo[1];	

       	    $t2_nome26=$campo[0];

            $t2_rg26=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css26 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css26 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==27){

            $t2_sobrenome27=$campo[1];	

       	    $t2_nome27=$campo[0];

            $t2_rg27=$campo[2];   
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css27 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css27 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==28){

            $t2_sobrenome28=$campo[1];	

       	    $t2_nome28=$campo[0];

            $t2_rg28=$campo[2];  
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css28 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css28 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==29){

            $t2_sobrenome29=$campo[1];	

       	    $t2_nome29=$campo[0];

            $t2_rg29=$campo[2]; 
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css29 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css29 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }else if ($i==30){

            $t2_sobrenome30=$campo[1];	

       	    $t2_nome30=$campo[0];

            $t2_rg30=$campo[2];    
            
                ///////////////////////////////////////////////////////
            if ($is_suspenso==1){                   
                $t2_css30 = "text-decoration: line-through";
                
               }else{                   
                   $t2_css30 = "";
               }
            ///////////////////////////////////////////////////////// 

            

        }                   

                        

        $i++;                

      }

      

       	   



      

?>





