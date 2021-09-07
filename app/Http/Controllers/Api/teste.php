<?php


include 'configCampeonato.php';
 
 
?>

<?php
        
        $rows = array();

        $campeonato  = $_GET['campeonato'];

    //recuperar a ultima seasson do campeonato selecionado
      $query = "SELECT s_id FROM nx510_bl_seasons WHERE t_id = ".$campeonato." order by s_id desc limit 1";
         
        $result = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
     
        if (!$result || !mysql_num_rows($result)) {
            die('Empty set.');
        } else {
            $s_id= mysql_result($result, 0);
        }
        
    
        $query = "SELECT * FROM nx510_bl_seasons WHERE s_id = ".$s_id;

        $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());

    $row = mysql_fetch_array($sql, 0);
    $result = $row [0];
    $isAmistoso = $row [8];


        $season_par = $season_par[0];
        $groups_exists = array();
        $table_view = array();



        $query = "SELECT t.id,bonus_point,t.t_yteam,t.t_name,t.t_emblem FROM nx510_bl_season_teams as st, nx510_bl_teams as t WHERE t.id = st.team_id AND st.season_id = ".$s_id;

    $teams=  mysql_query($query) or die("ERRO no comando SQL :".mysql_error());

        //for ($i=0;$i<count($teams);$i++){

        $i=0;
   while ($team=mysql_fetch_row($teams)) {
       $i++;
         
       $tid = $team[0];
       $teams_name = $team[3];
       $teams_your = $team[2];
       $emblems = $team[4];
        
         
    
            
       $query = "SELECT bonus_point FROM nx510_bl_season_teams WHERE team_id = ".$tid." AND season_id=".$s_id;
         
       $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
       $bonus_point= mysql_result($sql, 0);
       //echo $bonus_point;

       $query = "SELECT gr.g_id FROM  nx510_bl_season_teams as st, nx510_bl_grteams as gr, nx510_bl_groups as g WHERE g.s_id = ".$s_id." AND g.id = gr.g_id AND gr.t_id = st.team_id AND st.season_id = ".$s_id." AND st.team_id = ".$tid." LIMIT 1";
         
       $query = "SELECT gr.g_id FROM  nx510_bl_season_teams as st, nx510_bl_grteams as gr, nx510_bl_groups as g WHERE g.s_id = ".$s_id." AND g.id = gr.g_id AND gr.t_id = st.team_id AND st.season_id = ".$s_id." AND st.team_id = ".$tid." LIMIT 1";
         
          
         
       $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
        
       if (!$sql || !mysql_num_rows($sql)) {
           $group_id = "";
       } else {
           $group_id= mysql_result($sql, 0);
       }
         
       if (!in_array($group_id, $groups_exists) && $group_id) {
           if ($gr_id && $season_par->s_groups) {
               if ($gr_id==$group_id) {
                   $groups_exists[] = $group_id;
               }
           } else {
               $groups_exists[] = $group_id;
           }
       }
    
       if (($season_par->s_groups && $group_id) || !$season_par->s_groups) {
           $query = "SELECT t_emblem FROM nx510_bl_teams WHERE id = ".$tid;
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $emblems= mysql_result($sql, 0);
             
           $query = "SELECT cfg_value FROM nx510_bl_config  WHERE cfg_name = 'yteam_color'";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $teams_your_color= mysql_result($sql, 0);
            
           $query = "SELECT gr.g_id FROM  nx510_bl_season_teams as st, nx510_bl_grteams as gr, nx510_bl_groups as g WHERE g.s_id = ".$s_id." AND g.id = gr.g_id AND gr.t_id = st.team_id AND st.season_id = ".$s_id." AND st.team_id = ".$tid." LIMIT 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
          
           if (!$sql || !mysql_num_rows($sql)) {
               $group_id = "";
           } else {
               $group_id= mysql_result($sql, 0);
           }
            
           $query = "SELECT SUM(score1) as sc,SUM(score2) as rc FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND md.is_playoff = 0 AND m.is_extra = 0 AND m.m_played = 1 AND m.team1_id = ".$tid;
             
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $homeSc = 0;
           $homeRc = 0;
           while ($campo=mysql_fetch_row($sql)) {
               $homeSc = $campo[0];
               $homeRc = $campo[1];
           }
            
            
             
             
                
           $query = "SELECT SUM(score1) as rc,SUM(score2) as sc FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND md.is_playoff = 0 AND m.is_extra = 0 AND m.m_played = 1 AND m.team2_id = ".$tid;
            
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
             
           $awaySc = 0;
           $awayRc = 0;
           while ($campo=mysql_fetch_row($sql)) {
               $awaySc = $campo[0];
               $awayRc = $campo[1];
           }
            
    
             
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team1_id AND m.score1 > m.score2) AND m.is_extra = 0 AND m.is_extra = 0 AND m.m_played = 1 AND md.is_playoff = 0";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $wins = mysql_result($sql, 0);
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team1_id) AND m.score1 = m.score2  AND m.m_played = 1 AND m.is_extra = 0 AND md.is_playoff = 0";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $drows= mysql_result($sql, 0);
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team1_id AND m.score1 < m.score2) AND m.is_extra = 0 AND m.is_extra = 0 AND md.is_playoff = 0 AND m.m_played = 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $loose= mysql_result($sql, 0);
            
           $query = "SELECT SUM(bonus1) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND ".$tid." = m.team1_id AND md.is_playoff = 0 AND m.m_played = 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $bonus1= mysql_result($sql, 0);
            
           $query = "SELECT SUM(bonus2) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND ".$tid." = m.team2_id AND md.is_playoff = 0 AND m.m_played = 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $bonus2= mysql_result($sql, 0);
           //--//
                
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team1_id AND m.score1 > m.score2) AND m.m_played = 1 AND m.is_extra = 0 AND  md.is_playoff = 0 ";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $wins2= mysql_result($sql, 0);
            
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team1_id) AND m.score1 = m.score2  AND m.m_played = 1 AND m.is_extra = 0 AND md.is_playoff = 0";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $drows2= mysql_result($sql, 0);
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team1_id AND m.score1 < m.score2) AND md.is_playoff = 0 AND m.is_extra = 0 AND m.m_played = 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $loose2= mysql_result($sql, 0);
                    
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (m.team2_id = ".$tid." AND m.score2 > m.score1)  AND m.m_played = 1 AND m.is_extra = 0 AND md.is_playoff = 0";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $wins_away2= mysql_result($sql, 0);
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team2_id) AND m.score1 = m.score2  AND m.m_played = 1 AND m.is_extra = 0 AND md.is_playoff = 0";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $drows_away2= mysql_result($sql, 0);
            
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team2_id AND m.score2 < m.score1)   AND md.is_playoff = 0 AND m.is_extra = 0 AND m.m_played = 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $loose_away2= mysql_result($sql, 0);
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (m.team2_id = ".$tid." AND m.score2 > m.score1) AND m.is_extra = 0 AND m.m_played = 1 AND md.is_playoff = 0";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $wins_away= mysql_result($sql, 0);
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team2_id) AND m.score1 = m.score2  AND m.m_played = 1 AND md.is_playoff = 0";
            
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $drows_away= mysql_result($sql, 0);
            
           $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND (".$tid." = m.team2_id AND m.score2 < m.score1)  AND m.is_extra = 0 AND md.is_playoff = 0 AND m.m_played = 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $loose_away= mysql_result($sql, 0);
       
           $query = "SELECT SUM(bonus1) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND ".$tid." = m.team1_id AND md.is_playoff = 0 AND m.m_played = 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $bonus1= mysql_result($sql, 0);
            
           $query = "SELECT SUM(bonus2) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND ".$tid." = m.team2_id AND md.is_playoff = 0 AND m.m_played = 1";
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $bonus2= mysql_result($sql, 0);
            
       
       
       
       
       
                        
           $wins_ext = 0;
           if ($season_par->s_enbl_extra) {
               $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND ((m.team2_id = ".$tid." AND m.score2 > m.score1) OR (".$tid." = m.team1_id AND m.score1 > m.score2)) AND m.is_extra = 1 AND md.is_playoff = 0 AND m.m_played = 1";
               $db->setQuery($query);
               $wins_ext = $db->loadResult();
                
               $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m WHERE m.m_id = md.id AND md.s_id = ".$s_id." AND m.published = 1 AND ((".$tid." = m.team2_id AND m.score2 < m.score1) OR (".$tid." = m.team1_id AND m.score1 < m.score2)) AND m.is_extra = 1 AND md.is_playoff = 0 AND m.m_played = 1";
               $db->setQuery($query);
               $loose_ext = $db->loadResult();
           }
           $table_view[$i]['posicao'] = "";
           $table_view[$i]['g_id'] = $season_par->s_groups ? $group_id : 0;
             
           if ($table_view[$i]['g_id']) {
               $query = "SELECT group_name FROM nx510_bl_groups WHERE id=".intval($table_view[$i]['g_id']);
               $db->setQuery($query);
               $table_view[$i]['g_name'] = $db->loadResult();
           } else {
               $table_view[$i]['g_name'] = '';
           }
             
           // echo $teams_name."-".($wins+$wins_away);
             
           $table_view[$i]['tid'] = $tid;
             
           $table_view[$i]['nomeEquipe'] = utf8_encode($teams_name);
           $table_view[$i]['played'] = $wins + $drows + $loose +$wins_away+$drows_away+$loose_away + (($season_par->s_enbl_extra)?($wins_ext + $loose_ext):0);
           $table_view[$i]['win'] = $wins +$wins_away;
           $table_view[$i]['draw'] = $drows+$drows_away;
           $table_view[$i]['lost'] = $loose+$loose_away;
           if ($season_par->s_enbl_extra) {
               $table_view[$i]['extra_win'] = $wins_ext;
               $table_view[$i]['extra_lost'] = $loose_ext;
           }
             
           //	 $homeSc = $campo[0];
           // 	$homeRc = $campo[1];
                        
           // echo $homeSc ."-".$homeRc."-".$awaySc."-".$awayRc;
           //	 echo "<br><br>";
             
           $table_view[$i]['goals'] = ($homeSc + $awayRc);
        
             
             
           //saldo
        
             
           $table_view[$i]['points'] = $wins2 * 3 + $drows2 * 1 + $loose2 * 0 + $wins_away2 * 3 + $drows_away2 * 1 + $loose_away2 * 0 +$bonus1+$bonus2;
                        
           $table_view[$i]['goal_score'] = $homeSc +  $awayRc;
           $table_view[$i]['goals_conc'] = $homeRc + 	$awaySc;
           $table_view[$i]['gd'] = ($homeSc +  $awayRc) - ($homeRc + 	$awaySc);
                        
            
           $query = "SELECT ev.fvalue as fvalue FROM nx510_bl_extra_filds as ef LEFT JOIN nx510_bl_extra_values as ev ON ef.id=ev.f_id AND ev.uid=".$tid." WHERE ef.published=1 AND ef.type = '1' AND ef.e_table_view = '1' ORDER BY ef.ordering";
        
           $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
           $table_view[$i]['ext_fields'] = mysql_fetch_array($sql, MYSQL_ASSOC);
    
           $table_view[$i]['escudo'] = "http://www.amigosdabolaonline.com.br/site/site/media/bearleague/".$emblems;
       }
   }
        
        //---playeachother---///
        $query = "SELECT opt_value FROM nx510_bl_season_option WHERE s_id = ".$s_id." AND opt_name='equalpts_chk'";
        $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
        $equalpts_chk= mysql_result($sql, 0);
        
        if ($equalpts_chk) {
            $pts_arr = array();
            $pts_equal = array();
            foreach ($table_view as $tv) {
                if (!in_array($tv['points'], $pts_arr)) {
                    $pts_arr[] = $tv['points'];
                } else {
                    if (!in_array($tv['points'], $pts_equal)) {
                        $pts_equal[] = $tv['points'];
                    }
                }
            }
            $k = 0;
            $team_arr = array();
            foreach ($pts_equal as $pts) {
                foreach ($table_view as $tv) {
                    if ($tv['points'] == $pts) {
                        $team_arr[$k][] = $tv['tid'];
                    }
                }
                $k++;
            }
            
            foreach ($team_arr as $tm) {
                foreach ($tm as $tm_one) {
                    $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m, nx510_bl_teams as t1, nx510_bl_teams as t2 WHERE m.m_id = md.id AND m.published = 1 AND md.s_id=".$s_id."  AND m.team1_id = t1.id AND m.team2_id = t2.id AND m.m_played=1 AND ((t1.id = ".$tm_one." AND m.score1>m.score2 AND t2.id IN (".implode(',', $tm).")) OR (t2.id=".$tm_one." AND m.score1<m.score2 AND t1.id IN (".implode(',', $tm).")))";
        
                    $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
                    $matchs_avulsa_win= mysql_result($sql, 0);
                                    
                    $tm_equal_win = array();
                    
                    foreach ($tm as $tm_other) {
                        $query = "SELECT COUNT(*) FROM nx510_bl_matchday as md, nx510_bl_match as m, nx510_bl_teams as t1, nx510_bl_teams as t2 WHERE m.m_id = md.id AND m.published = 1 AND md.s_id=".$s_id."  AND m.team1_id = t1.id AND m.team2_id = t2.id AND m.m_played=1 AND ((t1.id = ".$tm_other." AND m.score1>m.score2 AND t2.id IN (".implode(',', $tm).")) OR (t2.id=".$tm_other." AND m.score1<m.score2 AND t1.id IN (".implode(',', $tm).")))";
            
                        $sql = mysql_query($query)or die("ERRO no comando SQL  :".mysql_error());
                        $matchs_avulsa_win_other= mysql_result($sql, 0);
                                            
                        if ($matchs_avulsa_win_other == $matchs_avulsa_win) {
                            $tm_equal_win[] = $tm_other;
                        }
                    }
                    
                    $query = "SELECT SUM(score1) as sh,SUM(score2) as sw FROM nx510_bl_matchday as md, nx510_bl_match as m, nx510_bl_teams as t1, nx510_bl_teams as t2 WHERE m.m_id = md.id AND m.published = 1 AND m.m_played=1 AND md.s_id=".$s_id."  AND m.team1_id = t1.id AND m.team2_id = t2.id AND ((t1.id = ".$tm_one." AND t2.id IN (".implode(',', $tm_equal_win).")))";
                    
                    
                    $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
                    $matchs_avulsa_score= mysql_result($sql, 0);
                    
                    //var_dump($matchs_avulsa_score);
                    
                    $query = "SELECT SUM(score2) as sh,SUM(score1) as sw FROM nx510_bl_matchday as md, nx510_bl_match as m, nx510_bl_teams as t1, nx510_bl_teams as t2 WHERE m.m_id = md.id AND m.published = 1 AND m.m_played=1 AND md.s_id=".$s_id."  AND m.team1_id = t1.id AND m.team2_id = t2.id AND ((t2.id=".$tm_one." AND t1.id IN (".implode(',', $tm_equal_win).")))";
        
                        
                    $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
                    $matchs_avulsa_rec= mysql_result($sql, 0);
                    
                    $matchs_avulsa_res = intval($matchs_avulsa_score[0]) + intval($matchs_avulsa_rec[0]);
                    $matchs_avulsa_res2 = intval($matchs_avulsa_score[1]) + intval($matchs_avulsa_rec[1]);
                    

                    for ($b=0;$b<count($table_view);$b++) {
                        if ($table_view[$b]['tid']==$tm_one) {
                            $table_view[$b]['avulka_v'] = $matchs_avulsa_win;
                            $table_view[$b]['avulka_cf'] = $matchs_avulsa_res;
                            $table_view[$b]['avulka_cs'] = $matchs_avulsa_res2;
                            $table_view[$b]['avulka_qc'] = $matchs_avulsa_res-$matchs_avulsa_res2;
                        }
                    }
                }
            }
        }
        //--/playeachother---///
        
        $sort_arr = array();
         foreach ($table_view as $uniqid => $row) {
             foreach ($row as $key=>$value) {
                 $sort_arr[$key][$uniqid] = $value;
             }
         }
       if (count($groups_exists)) {
           sort($groups_exists, SORT_NUMERIC);
       }
        if (!$season_par->s_groups) {
            $groups_exists = array(0);
        }
        
        

        if (count($sort_arr)) {
            // sort fields 1-points, 2-wins percent, /*3-if equal between teams*/, 4-goal difference, 5-goal score
            
            $query = "SELECT * FROM nx510_bl_ranksort WHERE seasonid=".$s_id." ORDER BY ordering";
                    
            $sql = mysql_query($query)or die("ERRO no comando SQL :".mysql_error());
            
            $argsort = array();
            while ($campo=mysql_fetch_row($sql)) {
                switch ($campo[1]) {
                     
                        case '1': $argsort[][0] = $sort_arr['points'];		break;
                        case '2': $argsort[][0] = $sort_arr['win'];		break;
                        case '3': $argsort[][0] = $sort_arr['points'];		break; /* not used */
                        case '4': $argsort[][0] = $sort_arr['gd'];			break;
                        case '5': $argsort[][0] = $sort_arr['goal_score'];	break;
                     
             }
            }
            if ($equalpts_chk) {

                //var_dump($sort_arr['avulka_v']);
                array_multisort($sort_arr['g_id'], SORT_ASC, $sort_arr['points'], SORT_DESC, $sort_arr['win'], SORT_DESC, $sort_arr['gd'], SORT_DESC, $sort_arr['goal_score'], SORT_DESC, $sort_arr['gd'], SORT_DESC, $sort_arr['goal_score'], SORT_DESC, $table_view);
            } else {
                array_multisort($sort_arr['g_id'], SORT_ASC, (isset($argsort[0][0])?$argsort[0][0]:$sort_arr['points']), (isset($argsort[0][1])?($argsort[0][1]?SORT_ASC:SORT_DESC):SORT_DESC), (isset($argsort[1][0])?$argsort[1][0]:$sort_arr['gd']), (isset($argsort[1][1])?($argsort[1][1]?SORT_ASC:SORT_DESC):SORT_DESC), (isset($argsort[2][0])?$argsort[2][0]:$sort_arr['goal_score']), (isset($argsort[2][1])?($argsort[2][1]?SORT_ASC:SORT_DESC):SORT_DESC), $table_view);
            }
        }
        
        
    ?>

<?php
$list =   $table_view;

$cont=1;
$classificacao = array();
$classificacaoAmistoso=array();

foreach ($list as $obj) {
    $obj["posicao"]=$cont;
    $obj["posicao"];
    $cont++;
    array_push($classificacao, $obj);
}


$array = array(
          "posicao	" => "1",
            "g_id" => "0",
                "g_name" => "",
                "tid"	 => "0",
                "nomeEquipe" => "Não Disponível",
                "played"	 => "0",
                "win" => "0",
                "draw" =>  "0",
                "lost" =>  "0",
        "goals" =>  "0",
        "points" =>  "0",
        "goal_score"  => "0",
        "goals_conc"  => "0",
                "gd" => "0",
        "ext_fields"  => "0"
                );

                array_push($classificacaoAmistoso, $array);


if ($_GET['ios'] == "s") {
  
  //se for amistoso
    if ($isAmistoso==1) {
        echo html_entity_decode(json_encode($classificacaoAmistoso));
    } else {
        echo html_entity_decode(json_encode($classificacao));
    }
} else {
  
  //se for amistoso
    if ($isAmistoso==1) {
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode(array("equipeClassificacao"=>$classificacaoAmistoso), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    } else {
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode(array("equipeClassificacao"=>$classificacao), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
                







?> 
				 



